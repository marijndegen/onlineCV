# onlineCV

### TODO / Ideeën lijst
- Lijst met repos op public zetten
- python toevoegen
- Devops en deep learning cnn's toevoegen als skill
- Video maken met Leon ??
- css los maken van photoshop, kijken of photoshop moet blijven.
- bij ieder bedrijf zeggen welke programmeer / technologie er gewerkt is.
    - resources/lang/en/index.php, hierin kunnen de tags niet staan, dan zou het language specifiek zijn, beter een directory/file in resources (in de vorm van een php multidemensionale php array) maken en daarin één language file maken voor alle talen.
- Per programmeertaal verwijzen naar github projecten of tags erin zetten.



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



# Delete me (github)
## java
TheHeist - java processing
deaberoepsproduct - java, tomcat, java enterprice
Blockchainproject2018allRepos - java, java enterprice, angular, ethereum

## c#
MultiChat - c# client server mvvm wpf material design visual studio
wapp-inside-airbnb - c# client server mapbox +

## c++
toyotastarletautostart - c++ arduino esp8622 dart flutter
arduino-speedometer - c++ arduino

## javascript / nodejs
onlineCV - php laravel nodejs puppeteer
javascript-snake - html css javascript +
Laravel-react-crud-rdw - php laravel javascript react +
programmero - javascript

## dart
toyotastarletautostart - c++ arduino esp8622 dart flutter

## php
onlineCV - php laravel nodejs puppeteer
laravel-Keypair-admin - rsa-encrytion laravel +
Laravel-react-crud-rdw - php laravel javascript react +
