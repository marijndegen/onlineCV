require('dotenv').config()
const puppeteer = require('puppeteer')
var fs = require('fs').promises // don't forget to require in the header or it won't work
const { mainModule } = require('process')
const merge = require('easy-pdf-merge')

const pdfPartsPath = 'public/pdf-parts/'
const parts = [
    { landscape: false, format: 'a3', name: 'header' },
    { landscape: false, format: 'a4', name: 'career' },
    { landscape: false, format: 'a3', name: 'info' },
    { landscape: true, format: 'a3', name: 'skills' },
    { landscape: true, format: 'a5', name: 'footer' }
]

// const locales = ['nl',]
const locales = ['nl', 'en', 'de']
const url = process.env.APP_URL + '/PDF-generator/'

async function printAndSaveMergePDF() {
    for await (const locale of locales) {
        for await (const part of parts) {
            const pdf = await printPDFPart(locale, part).catch(err => console.log(err))
            console.log('Browsing: ', locale, ' - ', part.name);
            await savePDF(locale, part, pdf)
            console.log('Saving: ', locale, ' - ', part.name);
        }
    }

    locales.forEach(locale => {
        merge(parts.map(part => pdfPartsPath + locale + '-' + part.name + '.pdf'), 'public/' + locale + '-cv.pdf', function (err) {
            if (err) {
                return console.log(err)
            }
            console.log('Successfully merged ' + locale + '!')
        });
    })
}

async function printPDFPart(locale, part) {
    const browser = await puppeteer.launch({ headless: true })
    const page = await browser.newPage()

    await page.goto(url + locale + '/' + part.name, { waitUntil: 'networkidle0' })
    const pdf = await page.pdf({ landscape: part.landscape, format: part.format, printBackground: true })

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