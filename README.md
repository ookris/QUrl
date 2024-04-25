# QUrl Theme for YOURLS
A simple theme for [YOURLS](https://yourls.org) built based on the [Bootstrap](https://getbootstrap.com) framework.

## Requirements
Theme requires:
* YOURLS itself, of course
* plugin [U-SRV](https://github.com/joshp23/YOURLS-U-SRV)
* plugin [YOURLS-IQRCodes](https://github.com/joshp23/YOURLS-IQRCodes)

The [PHPMailer](https://github.com/PHPMailer/PHPMailer) library was used to send e-mail messages. Messages are sent via SMTP

## Installation
Installation involves copying the contents of the `QUrl-Theme` directory directly to the main directory where YOURLS was installed.

## Configuration
The theme has basic configuration options. All options are located in the `qurl/config.php` file.
The theme can be translated into other languages. To do this, you need to create your own language file based on the file `PL-pl_qurl.php`, which is located in the `qurl/lang` directory.

## Preview
The theme is used on the website [QUrl.pl](https://qurl.pl)