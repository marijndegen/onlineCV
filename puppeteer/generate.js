require('dotenv').config()
const puppeteer = require('puppeteer')
var fs = require('fs').promises // don't forget to require in the header or it won't work
const { mainModule } = require('process')
const { PDFDocument } = require('pdf-lib')

const pdfPartsPath = 'public/pdf-parts/'

// landscape - horizontal or portrait,
// format - size,
// name - conceptual name,
// pageRanges (optional) - if an additional blank page is generated for some reason
const parts = [
    { landscape: false, format: 'a3', name: 'header' },
    { landscape: false, format: 'a4', name: 'career', pageRanges: '1-2' },
    { landscape: false, format: 'a3', name: 'features' },
    { landscape: true, format: 'a3', name: 'skills' },
    { landscape: true, format: 'a5', name: 'footer' }
]

// const locales = ['nl',]
const locales = ['nl', 'en']
const url = 'http://localhost:8000' + '/PDF-generator/'

async function printAndSaveMergePDF() {
    for await (const locale of locales) {
        for await (const part of parts) {
            const pdf = await printPDFPart(locale, part).catch(err => console.log(err))
            console.log('Browsing: ', locale, ' - ', part.name);
            await savePDF(locale, part, pdf)
            console.log('Saving: ', locale, ' - ', part.name);
        }
    }

    for await (const locale of locales) {
        await mergePDFs(locale)
    }
}

async function mergePDFs(locale) {
    try {
        const mergedPdf = await PDFDocument.create()
        
        for (const part of parts) {
            const pdfPath = pdfPartsPath + locale + '-' + part.name + '.pdf'
            const pdfBytes = await fs.readFile(pdfPath)
            const pdf = await PDFDocument.load(pdfBytes)
            const copiedPages = await mergedPdf.copyPages(pdf, pdf.getPageIndices())
            copiedPages.forEach((page) => mergedPdf.addPage(page))
        }
        
        const mergedPdfBytes = await mergedPdf.save()
        await fs.writeFile('public/' + locale + '-cv.pdf', mergedPdfBytes)
        console.log('Successfully merged ' + locale + '!')
    } catch (err) {
        console.log(err)
    }
}

async function printPDFPart(locale, part) {
    const browser = await puppeteer.launch({ headless: false })
    const page = await browser.newPage()
    
    const fullUrl = url + locale + '/' + part.name;

    console.log("ding" + fullUrl)

    await page.goto(fullUrl, { waitUntil: 'networkidle0' })
    const pdf = await page.pdf({ printBackground: true, ...part })

    await browser.close()

    return pdf
}

async function savePDF(locale, part, pdf) {
    await fs.writeFile(
        pdfPartsPath + locale + '-' + part.name + '.pdf',
        pdf,
        {
            encoding: "utf8",
            //flag: "a" // flag that specifies that it will append stuff
        },
        function () { console.log("done!") }
    )
}

printAndSaveMergePDF().catch(err => console.log(err))