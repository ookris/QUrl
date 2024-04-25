<?php

// Make sure we're in YOURLS context
if( !defined( 'YOURLS_ABSPATH' ) ) {
	echo "Try using a URL without the /pages/ part";
	die();
}

// Load config file 
include('qurl/config.php'); 

// Page title 
$currentpagetitle = '- ' . $qurlLang['current_page_title_report'];

// load header template 
require_once ('qurl/header.php'); 

?>

<!-- index.php -->
<h1><?php echo $qurlLang['pages_report_h1']; ?></h1>
<ul class="list-unstyled mt-5">
<li><?php echo $qurlLang['pages_report_description']; ?></li>
</ul>

<div class="container w-75">
<form action="sendReport.php" method="POST">
  <div class="mb-3">
    <label for="link"class="form-label"><?php echo $qurlLang['pages_report_url']; ?></label>
    <input type="text" class="form-control" name="link" id="link" aria-describedby="linkHelp" required>
    <div id="linkHelp" class="form-text"><?php echo $qurlLang['pages_report_url_description']; ?></div>
  </div>

  <div class="mb-3">
  <label for="opislinka" class="form-label"><?php echo $qurlLang['pages_report_link']; ?></label>
  <textarea class="form-control" onkeyup="validate()" name="opislinka" id="opislinka" rows="3" maxlength="500" aria-describedby="TextareaHelp"></textarea>
  <div id="TextareaHelp" class="form-text"><?php echo $qurlLang['pages_report_link_description']; ?></div>
  <div class="d-flex justify-content-end"><span id="words_count"><span id="textcount"></span>/500</span></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label"><?php echo $qurlLang['pages_report_email']; ?></label>
    <input type="email" class="form-control" name="email" id="email" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"><?php echo $qurlLang['pages_report_email_description']; ?></div>
  </div>
  <button type="submit" value="<?php echo $qurlLang['pages_report_button_send']; ?>" class="btn btn-primary"><?php echo $qurlLang['pages_report_button_send']; ?></button>
</form>
</div>

<script>
function validate(){
    const areatextarea = document.querySelector("#opislinka");
    const areatext = document.querySelector("#opislinka").value.length;
    const textcount = document.querySelector("#textcount");
    const wordcount = document.querySelector("#words_count");
    textcount.innerHTML = areatext;
}
</script>

<?php 
// load footer template 
require_once ('qurl/footer.php'); 
?>