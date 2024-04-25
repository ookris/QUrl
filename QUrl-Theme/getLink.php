<?php 
if (empty($_POST['url'])) {
    header("Location: https://qurl.pl");
}
// Start YOURLS engine
require_once( dirname(__FILE__).'/includes/load-yourls.php' );
// load translations
// yourls_load_custom_textdomain( 'qurl_lang', 'qurl/lang' );

// Load config file 
include('qurl/config.php'); 

// Load transalte file
$qurlLang = require 'qurl/lang/' . $lang . '_qurl.php';

// load header template 
require_once ('qurl/header.php'); 

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

?>

<!-- index.php -->

<div class="container-fluid py-5">
     <h1 class="display-5 fw-bold"><i class="bi bi-dice-<?php echo rand(1,6) ?> bi-dice-color-<?php echo rand(1,6) ?>"></i> <span class="short-title-font"><?php echo $shorttitle; ?><span class="text-slogan"> <?php echo $sitetitle; ?></span></span></h1>
    <p class="col-md-8 fs-4"><?php echo $slogan; ?></p>
</div>

<div class="p-5 mb-4 rounded-3 main-gradient">

    <?php if( $status == 'success' ) { ?>

    <h2><?php echo $qurlLang['get_link_form_h2']; ?></h2>

	<form>
        <div class="mb-3">
            <label for="url" class="form-label"><?php echo $qurlLang['get_link_form_original_url']; ?></label>
            <input type="text" class="form-control" id="url" aria-describedby="urlHelp" name="url" value="<?php echo $url; ?>" readonly>
        </div>

        <div class="mb-3">
            <label for="shorturl" class="form-label"><?php echo $qurlLang['get_link_form_short_url']; ?></label>
            <input type="text" class="form-control" id="shorturl" aria-describedby="shorturlHelp" name="shorturl" value="<?php echo $shorturl; ?>" readonly>
        </div>

        <div class="mb-3">
            <label for="statistics" class="form-label"><?php echo $qurlLang['get_link_form_stats_url']; ?></label>
            <input type="text" class="form-control" id="statistics" aria-describedby="statisticsHelp" name="statistics" value="<?php echo $shorturl . '+'; ?>" readonly>
        </div>

    </form>

    <!-- QR code -->
	<h2><?php echo $qurlLang['get_link_form_qr_h2']; ?></h2>
	<p><?php echo $qurlLang['get_link_form_qr_info']; ?></p>
	<img src="<?php if (isset($return['qrcimg'])) echo $return['qrcimg']; ?>" alt="QRCode">
    <p class="mt-2"><i class="bi bi-info-circle"></i> <?php echo $qurlLang['get_link_form_qr_info2']; ?></p>

    <?php } else {
        echo '<div class="alert alert-danger" role="alert"><i class="bi bi-emoji-expressionless"></i> <strong>' . $qurlLang['get_link_form_qr_info2'] . '</strong> ' . $message . '</div>';
    }
    ?>

</div>

<!-- END container -->
<!-- /index body -->
<?php 
// load footer template 
require_once ('qurl/footer.php'); 
?>
</div>