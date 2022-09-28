const puppeteer = require('puppeteer')
const fs = require('fs').promises

async function printPDF() {
    const browser = await puppeteer.launch({ headless: true });
    const page = await browser.newPage();
    await page.goto('https://marijndegen.nl', { waitUntil: 'networkidle0' });
    const pdf = await page.pdf({ format: 'A4', printBackground: true });

    await browser.close();
    return pdf
}

async function savePDF(pdf) {
    await fs.writeFile(
        'public/full-test.pdf',
        pdf,
        {
            encoding: "utf8",
            //flag: "a" // flag that specifies that it will append stuff
        },
        function () { console.log("done!") }
    )
}

(
    async () => {
        const pdf = await printPDF()
        await savePDF(pdf)
    }
)();