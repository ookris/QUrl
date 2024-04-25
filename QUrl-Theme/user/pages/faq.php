<?php

// Make sure we're in YOURLS context
if( !defined( 'YOURLS_ABSPATH' ) ) {
	echo "Try using a URL without the /pages/ part";
	die();
}

// Load config file 
include('qurl/config.php'); 

// Page title 
$currentpagetitle = "- FAQ czyli często zadawane pytania";

// load header template 
require_once ('qurl/header.php'); 

?>
<!-- index.php -->

<h1>FAQ czyli często zadawane pytania</h1>

<ol class="list-group list-group-numbered mt-5">

  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Czy korzystanie z QUrl jest płatne?</div>
      Nie! Nigdy tak nie było i nigdy tak nie będzie. Serwis jest całkowiecie darmowy.
    </div>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-start">
  <div class="ms-2 me-auto">
      <div class="fw-bold">Czy trzeba zakładać konto?</div>
      Nie. Aby móc korzystać ze strony nie jest wymagane posiadanie konta użytkownika. 
    </div>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-start">
  <div class="ms-2 me-auto">
      <div class="fw-bold">Czy rejestracja konta użytkownika jest możliwa?</div>
      Nie. W chwili obecnej nie ma takiej możliwości. Czy w przyszłości to się zmieni? Możliwe, ale nie wpłynie to w żaden sposób na funkcjonalność strony oraz na już skrócone linki. 
    </div>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Jak długo działa skrócony link?</div>
      Skrócone linki działają bez jakiegokolwiek limitu czasowego. No chyba, że otrzymam zgłoszenie i zgłoszony link okaże się podejrzany i/lub niezgodny z prawem. Wtedy taki link jest kasowany.
    </div>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Co możliwy jest dostęp do jakichkolwiek statystyk?</div>
      Tak, dla każdego linka wygenerowanego na stronie prowadzone są statystyki klikalności. Aby mieć do nich dostęp wystarczy na końcu aderu dodać znak "+" np. <a href="https://qurl.pl/ytN60Ut06aW+">qurl.pl/ytN60Ut06aW+</a>.
    </div>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Znalazłem link, który wygląda na podejrzany. Co robić?</div>
      Takie linki można śmiało zgłaszać poprzez specjalny formularz dostępny na stronie <a href="/report">Zgłoś link</a>. Po ich weryfikacji podjęta zostanie decyzja czy faktycznie zgłoszony link łamie zapisy regulaminu i czy należy go usunąc czy nie. 
    </div>
  </li>

</ol>

<?php 
// load footer template 
require_once ('qurl/footer.php'); 
?>