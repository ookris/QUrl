<?php

// Make sure we're in YOURLS context
if( !defined( 'YOURLS_ABSPATH' ) ) {
	echo "Try using a URL without the /pages/ part";
	die();
}

// Load config file 
include('qurl/config.php'); 

// Page title 
$currentpagetitle = "- Warunki korzystania z serwisu";

// load header template 
require_once ('qurl/header.php'); 

?>
<!-- index.php -->

<h1>Warunki korzystania z serwisu</h1>
<ul class="list mt-5">
<li>QUrl.pl to darmowy serwis skracający długie adresy internetowe na ich krótsze odpowiedniki.</li>
<li>Serwis dostarczany jest "tak jak jest" co oznacza, że mogą pojawaić się chwilowe problmy z jego funkcjnowaniem za co właściciel nie bierze odpowiedzialności.</li>
<li>Używanie serwisu w celach spamowania jest zabronione i może być zgłaszane do właściwego dostawcy usług internetowych, spamujące skróty będą usuwane a domeny blokowane. </li>
<li>Jeśli link prowadzi do strony, która w jakikolwiek sposób łamie obowiązujące przepisy prawa taki link zostanie bez jakiegokolwiek ostrzeżenia usunięty a domena zostanie zablokowana.</li>
<li>Twórcy serwisu nie biorą jakiejkolwiek odpowiedzialności za skutki używania serwisu.</li>
<li>Rezerwujemy sobie prawo usuwania linków, które wg własnego uznania zakwalifikujemy jako SPAM bez wcześniejszego powiadomienia jego właściciela o tym fakcie.</li>
<li>QUrl.pl używa mechanizmów Google Safe Browsing i innych sprawdzających linki pod kątem ich bezpieczeństwa. Jeśli link zostanie uznany za niebezpieczny lub podejrzany jego dodanie nie będzie możliwe. </li>
</ul>

<?php 
// load footer template 
require_once ('qurl/footer.php'); 
?>