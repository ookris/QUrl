<?php 
// QUrl Theme for YOURLS
// A simple theme for YOURLS built based on the Bootstrap framework.
// Author: ookris => https://github.com/ookris/QUrl

// Load functions file 
include('qurl/functions.php'); 

// Load config file 
include('qurl/config.php'); 

// Theme file
// load header template 
require_once ('qurl/header.php'); 

?>

<!-- index.php -->
<!-- Slogan  -->
<div class="container-fluid py-5">
     <h1 class="display-5 fw-bold"><i class="bi bi-dice-<?php echo rand(1,6) ?> bi-dice-color-<?php echo rand(1,6) ?>"></i> <span class="short-title-font"><?php echo $shorttitle; ?><span class="text-slogan"> <?php echo $sitetitle; ?></span></span></h1>
    <p class="col-md-8 fs-4"><?php echo $slogan; ?></p>
    <p class="text-secondary fw-light lh-sm"><i class="bi bi-info-circle" data-bs-toggle="tooltip" data-bs-title="<?php echo $qurlLang['total_urls_tooltip_before']; ?> <?php echo $total_urls; ?> <?php echo $qurlLang['total_urls_tooltip_after']; ?>"></i> <?php echo $qurlLang['total_urls_before']; ?> <span class="badge text-bg-light bg-warning-subtle fs-6 value" akhi="<?php echo $total_urls; ?>">0</span> <?php echo $qurlLang['total_urls_after']; ?> <span class="badge text-bg-light bg-warning-subtle fs-6 value" id="js-animate-click" akhi="<?php echo $total_clicks; ?>">0</span> <?php echo $qurlLang['total_urls_after_times']; ?></p>
</div>

<!-- //Slogan  -->

<div class="p-5 mb-4 rounded-3 main-gradient">

<?php

// Start YOURLS engine
require_once( dirname(__FILE__).'/includes/load-yourls.php' );

// Change this to match the URL of your public interface. Something like: http://domain.com/index.php
$page = YOURLS_SITE . '/index.php' ;

// Part to be executed if FORM has been submitted
if ( isset( $_REQUEST['url'] ) && $_REQUEST['url'] != 'https://' ) {

	// Get parameters -- they will all be sanitized in yourls_add_new_link()
	$url     = $_REQUEST['url'];
	$keyword = isset( $_REQUEST['keyword'] ) ? $_REQUEST['keyword'] : '' ;
	$title   = isset( $_REQUEST['title'] ) ?  $_REQUEST['title'] : '' ;
	$text    = isset( $_REQUEST['text'] ) ?  $_REQUEST['text'] : '' ;

	// Create short URL, receive array $return with various information
	$return  = yourls_add_new_link( $url, $keyword, $title );

	$shorturl = isset( $return['shorturl'] ) ? $return['shorturl'] : '';
	$message  = isset( $return['message'] ) ? $return['message'] : '';
	$title    = isset( $return['title'] ) ? $return['title'] : '';
	$status   = isset( $return['status'] ) ? $return['status'] : '';

	// Stop here if bookmarklet with a JSON callback function ("instant" bookmarklets)
	if( isset( $_GET['jsonp'] ) && $_GET['jsonp'] == 'yourls' ) {
		$short = $return['shorturl'] ? $return['shorturl'] : '';
		$message = "Short URL (Ctrl+C to copy)";
		header('Content-type: application/json');
		echo yourls_apply_filter( 'bookmarklet_jsonp', "yourls_callback({'short_url':'$short','message':'$message'});" );

		die();
	}
}
?>
	<form id="addLinkForm" method="post" action="getLink.php">
        <p class="d-inline-flex gap-2"><i class="bi bi-info-circle"></i> <?php echo $qurlLang['add_link_form_long_url']; ?></p>
        <div class="form-floating mb-2">
            <input type="url" class="form-control form-control-lg" id="floatingURL" name="url" placeholder="<?php echo $qurlLang['add_link_form_long_url_placeholder']; ?>" required>
            <label for="floatingURL"><i class="bi bi-link-45deg"></i> <?php echo $qurlLang['add_link_form_long_url_placeholder']; ?></label>
        </div>

        <p class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
        <button class="btn btn-dark btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSetting" aria-expanded="false" aria-controls="collapseSetting"><i class="bi bi-sliders2"></i> <?php echo $qurlLang['add_link_form_settings']; ?></button>
        </p>
        <div class="collapse" id="collapseSetting">
        <div class="card card-body bg-transparent border-dark-subtle">

        <div class="mb-3">
            <label for="keyword-url" class="form-label"><?php echo $qurlLang['add_link_form_keyword-url']; ?></label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon3" name="keyword">https://<?php echo $_SERVER['SERVER_NAME'] ?>/</span>
                <input type="text" class="form-control" id="keyword-url" aria-describedby="basic-addon3 basic-addon4" placeholder="<?php echo $qurlLang['add_link_form_long_url_placeholder_keyword']; ?>" maxlength="32">
            </div>
            <div class="form-text" id="basic-addon4"><i class="bi bi-info-circle"></i> <?php echo $qurlLang['add_link_form_keyword-url_info']; ?></div>
        </div>

        <div class="mb-3">
            <label for="title-url" class="form-label"><?php echo $qurlLang['add_link_form_title-url']; ?></label>
            <input type="text" class="form-control" id="title-url" aria-describedby="titleHelp" name="title" placeholder="<?php echo $qurlLang['add_link_form_title-url_placeholder']; ?>" maxlength="256">
            <div id="titleHelp" class="form-text"><i class="bi bi-info-circle"></i> <?php echo $qurlLang['add_link_form_title-url_info']; ?></div>
        </div>

        </div>
        </div>
        
        <div class="d-grid gap-2 col-6 mx-auto mt-3">
        <button type="submit" class="btn btn-danger btn-lg"><?php echo $qurlLang['add_link_form_button_submit']; ?></button>
        </div>	
    </form>

</div>
<!-- 
<div class="alert alert-light mt-5" role="alert">
    <p>QUrl.pl posiada możliwość szybkiego skracania linków. Wystarczy w tym celu dodać do zakładek jeden ze specjalnie przygotowanych skrótów tzw. <u>skryptozakładek</u>.</p>
</div>
-->

<!-- END container -->
<!-- /index body -->
<!-- http:BL spam protect --> 
<?php if( ( yourls_is_active_plugin( 'httpBL/plugin.php' ) && yourls_get_option('httpBL_honeypot' ) ) ) print httpbl_link() . "\n"; ?>

<?php 
// load footer template 
require_once ('qurl/footer.php'); 
?>