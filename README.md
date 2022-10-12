# onlineCV

### Ideeën lijst

- Video maken met Leon
- Devops en deep learning cnn's toevoegen als skill

### installatie

1. Clone repo
2. composer install
3. mv / copy .env.example .env
4. configure .env to your needs
5. php artisan key:generate
6. php artisan serve

### PDF generation
PDFs are devided into components based on locale and part

locales:
> nl, en, de

parts:
> header, career, info, skills, footer

A sample url:
> marijndegen.nl/PDF-generator/nl/header

To merge the PDF files, the npm package easy-pdf-merge is used. It requires at least java 6 installed on the operation system generating the PDF files using puppeteer. The java command needs to be added to the path.

**To generate the files (on windows):**
1. Startup the artisan server (on port 80) using:
> npm run php
2. Run the puppeteer script
> node puppeteer/generate.js
