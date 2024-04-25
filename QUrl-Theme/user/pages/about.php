<?php

// Make sure we're in YOURLS context
if( !defined( 'YOURLS_ABSPATH' ) ) {
	echo "Try using a URL without the /pages/ part";
	die();
}

// Load config file 
include('qurl/config.php');

// Page title 
$currentpagetitle = "- O stronie";

// load header template 
require_once ('qurl/header.php'); 

?>
<!-- index.php -->

<h1>O stronie</h1>

<p class="text-center mt-5">Na stronie QUrl.pl możesz szybko i całkowiecie za darmo skrócić wszystkie długie linki. Dzięki temu dużo łatwiej jest taki link udostepnić np. na Facebooku lub Twitterze/X lub w innym miejscu.</p>
<p class="text-center">Dzięki tej stronie zamienisz taki długi i nieczytelny link</p>
<p class="text-center" style="font-size: 2rem;"><i class="bi bi-arrow-down-short"></i><i class="bi bi-arrow-down-short"></i><i class="bi bi-arrow-down-short"></i></p>
<p class="text-center text-break"><u class="text-secondary font-monospace">https://www.google.pl/maps/dir/Szczecin/Kraków/@51.7603062,14.0263461,7z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x47aa093800d3a759:0xa95adc4e5f8ac4f3!2m2!1d14.5528116!2d53.4285438!1m5!1m1!1s0x471644c0354e18d1:0xb46bb6b576478abf!2m2!1d19.9449799!2d50.0646501!3e3?entry=ttu</u></p> 
<p class="text-center" style="font-size: 2rem;"><i class="bi bi-arrow-down-short"></i><i class="bi bi-arrow-down-short"></i><i class="bi bi-arrow-down-short"></i></p>
<p class="text-center">na taki, który łatwo można udoistępnić innym</p>
<p class="text-center"><u class="text-secondary font-monospace">https://qurl.pl/ytN60Ut06aW</u>. </p>
<p class="text-center">Dodatkowo QUrl wygeneruje kod QR, który tak samo można wykorzystać do udostępnienia linku.</p>
<p class="text-center"><img src="https://qurl.pl/cache/qr/qrc_7d819c8258dda9321db1e9ee40eeba8e.png"></p>
<p class="text-center">I to w zasadzie tyle. Miłego użytkowania :). </p>




<?php 
// load footer template 
require_once ('qurl/footer.php'); 
?>