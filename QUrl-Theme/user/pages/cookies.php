<?php

// Make sure we're in YOURLS context
if( !defined( 'YOURLS_ABSPATH' ) ) {
	echo "Try using a URL without the /pages/ part";
	die();
}

// Load config file 
include('qurl/config.php'); 

// Page title 
$currentpagetitle = "- Cookies czyli ciasteczka";

// load header template 
require_once ('qurl/header.php'); 

?>
<!-- index.php -->

<h1>Cookies czyli ciasteczka</h1>
<p>
QUrl.pl jak każda strona używa ciasteczek. Są one nieodzownym elementem każdej strony. Nie inaczej jest w przypadku QUrl.pl.<br>
Nasza strona używa ciasteczek w celach statystycznych (statystyki odwiedzania strony).<br>
Każdy użytkownik ma możliwość wyłączenia zapisywania cookies w jego przeglądarce. Sprawdź jak wyłączyć cookies w <a href="https://support.google.com/accounts/answer/61416?hl=pl&co=GENIE.Platform%3DDesktop&oco=0" target="_blank">Chrome</a>, <a href="https://support.microsoft.com/pl-pl/topic/wy%C5%9Bwietlanie-plik%C3%B3w-cookie-w-przegl%C4%85darce-microsoft-edge-a7d95376-f2cd-8e4a-25dc-1de753474879" target="_blank">EDGE</a>, <a href="https://support.mozilla.org/pl/kb/blokowanie-ciasteczek" target="_blank">Firefox</a>, <a href="https://help.opera.com/pl/latest/web-preferences/" target="_blank">Operze</a> 
</p>

<?php 
// load footer template 
require_once ('qurl/footer.php'); 
?>