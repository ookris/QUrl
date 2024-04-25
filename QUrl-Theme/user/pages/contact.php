<?php

// Make sure we're in YOURLS context
if( !defined( 'YOURLS_ABSPATH' ) ) {
	echo "Try using a URL without the /pages/ part";
	die();
}

// Load config file 
include('qurl/config.php'); 

// Page title 
$currentpagetitle = '- ' . $qurlLang['current_page_title_contact'];

// load header template 
require_once ('qurl/header.php'); 

?>
<!-- index.php -->

<h1><?php echo $qurlLang['pages_contact_h1']; ?></h1>
<ul class="list-unstyled mt-5">
<li><?php echo $qurlLang['pages_contact_description']; ?></li>
</ul>

<div class="container w-75">
<form action="sendEmail.php" method="POST">
  <div class="mb-3">
    <label for="email" class="form-label"><?php echo $qurlLang['pages_contact_form_email']; ?></label>
    <input type="email" class="form-control" name="email" id="email" id="email" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text"><?php echo $qurlLang['pages_contact_form_email_info']; ?></div>
  </div>
  <div class="mb-3">
  <label for="Textarea" class="form-label"><?php echo $qurlLang['pages_contact_form_message']; ?></label>
  <textarea class="form-control" name="Textarea" id="Textarea" id="Textarea" rows="3" maxlength="500" required></textarea>
  </div>
  <button type="submit" value="<?php echo $qurlLang['pages_contact_form_button_send']; ?>" class="btn btn-primary"><?php echo $qurlLang['pages_contact_form_button_send']; ?></button>
</form>
</div>

<?php 
// load footer template 
require_once ('qurl/footer.php'); 
?>