# QUrl Theme for YOURLS
A simple theme for [YOURLS](https://yourls.org) built based on the [Bootstrap](https://getbootstrap.com) framework.

[![Listed in Awesome YOURLS!](https://img.shields.io/badge/Awesome-YOURLS-C5A3BE)](https://github.com/YOURLS/awesome-yourls/) [![Bootstrap 5!](https://img.shields.io/badge/Bootstrap-5-8A2BE2)](https://github.com/twbs) [![PHPMailer!](https://img.shields.io/badge/PHP-Mailer-blue)](https://github.com/PHPMailer/PHPMailer)

![QUrl Preview](QUrl_theme_preview.png)

## Requirements
Theme requires:
* [YOURLS](https://yourls.org) itself, of course
* YOURLS plugin [U-SRV](https://github.com/joshp23/YOURLS-U-SRV)
* YOURLS plugin [YOURLS-IQRCodes](https://github.com/joshp23/YOURLS-IQRCodes)
* [PHPMailer](https://github.com/PHPMailer/PHPMailer) library

### Recommended plugins
If you intend to run a publicly accessible website, it is worth protecting yourself against spam and dangerous links. For this reason, it is worth installing several plugins.

* [Original URL Regex Limiter](https://github.com/uniwue-rz/yourls-original-url-regex-limiter) - Blocking unwanted/dangerous websites using regular expressions
* [Mass Remove Links](https://github.com/YOURLS/mass-remove-links/) - Bulk link removal according to various criteria

## Installation
Installation involves copying the contents of the `QUrl-Theme` directory directly to the main directory where YOURLS was installed. After copying the theme files to the main YOURLS directory, install the required plugins. 

### PHPMailer installation
To send e-mail notifications and for the contact form and the form to report suspicious links to work properly, it is necessary to install the PHPMailer library. The library files should be placed in the `qurl/PHPMailer` folder. 

## Configuration
The theme has basic configuration options. All options are located in the `qurl/config.php` file.
The theme can be translated into other languages. To do this, you need to create your own language file based on the file `PL-pl_qurl.php`, which is located in the `qurl/lang` directory.

## Preview
The theme is used on the website [QUrl.pl](https://qurl.pl)
