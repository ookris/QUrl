<?php 
// Theme config file

// Page title
$sitetitle = 'Szybkie skracanie linków';
$shorttitle = 'QUrl.pl';
$slogan = 'Szybkie, wygodne i darmowe skracenie linków';

// Meta description
$description = 'Szybkie, wygodne i darmowe skracenie linków ze statystykami';

// Meta keywords
$keywords = 'skracacz linkow, tiny link, tiny url, skracanie linków,';

// Theme language 
$lang = "PL-pl";

// Logo
$logo = "qurl/img/QUrl_logo.png";

// Google robots tag
// More info: https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag
$robots = 'index, nofollow';

// Google reCAPTCHA V3
// More info: https://developers.google.com/recaptcha
$recaptchaSiteKey = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
$recaptchaSecretKey = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';

// Email send settings 
// Sending emails using the PHPMailer library. More info: https://github.com/PHPMailer/PHPMailer
$emailHost = 'mail.mydomain.com';
$emailSMTPAuth = 'true';
$emailUsername = 'kontakt@mydomain.com';
$emailPassword = 'password';
$emailSMTPSecure = 'PHPMailer::ENCRYPTION_SMTPS';
$emailPort = '465';
$emailFromName = 'QUrl.pl - Kontakt';
$emailFromAddress = 'kontakt@mydomain.com';

// These are the links in the header and footer. Add a new link for each new link.
// The array follows a title link structure:
// 'TITLE' => 'LINK',
// How to add pages to YOURLS: https://yourls.org/docs/guide/extend/pages

$headerLinks = [
    'O stronie' => '/about',
    'Zasady' => '/rules',
    'FAQ' => '/faq'
];

$footerLinks = [
    'O stronie' => '/about',
    'Zasady' => "/rules",
    'FAQ' => '/faq',
    'Ciasteczka' => '/cookies',
    'Kontakt' => '/contact',
    '<span class="text-danger"><i class="bi bi-exclamation-triangle"></i> Zgłoś link</span>' => '/report'
];

// #########################################
// ##                                     ##
// ##   You edit the code below at your   ##
// ##   own risk                          ##
// ##                                     ##
// #########################################

// Load translation file
$qurlLang = require 'lang/' . $lang . '_qurl.php';

?>