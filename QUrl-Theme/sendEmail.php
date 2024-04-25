<?php 

if (empty($_POST['email'])) {
    exit('No access'); 
}

$reportDate = date('d.m.Y H:i');
$reportID = mt_rand(100000, 999999);

// Load qurl config file 
include('qurl/config.php'); 

//PHPMailer Library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'qurl/PHPMailer/src/Exception.php';
require 'qurl/PHPMailer/src/PHPMailer.php';
require 'qurl/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = $emailHost;
    $mail->SMTPAuth = $emailSMTPAuth;
    $mail->Username = $emailUsername;
    $mail->Password = $emailPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = $emailPort;
    //Recipients
    $mail->setFrom($emailFromAddress, $emailFromName);
    $mail->addAddress($emailFromAddress);

    //Content
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';    
    if (empty($_POST['email'])) {
        echo '';
    }
    else {
    $mail->addReplyTo($_POST['email']);
    }

    $mail->Subject = $qurlLang['send_email_message_subject'] . $reportID;
    $mail->Body    = <<<EOT
    <h2>{$qurlLang['send_email_message_body_h2']}</h2><br>
    <b>{$qurlLang['send_email_message_body_date']}</b> $reportDate<br>
    <b>{$qurlLang['send_email_message_body_email']}</b> {$_POST['email']}<br>
    <b>{$qurlLang['send_email_message_body_message']}</b> {$_POST['Textarea']}<br>
    <br><br>
    -----<br>
    #ID$reportID

    EOT;

    $mail->send();

    $message = '<div class="alert alert-success" role="alert">' . $qurlLang['send_email_message_success'] .'</div>';
} catch (Exception $e) {
    $message = '<div class="alert alert-danger" role="alert">' . $qurlLang['send_email_message_error'] .'<br>Error: ' . $mail->ErrorInfo .'</div>';
}
?>

<?php 
// Load config file 
include('qurl/config.php'); 

// Page title 
$currentpagetitle = '/ ' . $qurlLang['current_page_title_contact'] . '>' . $qurlLang['current_page_title_contact_send'];

// load header template 
require_once ('qurl/header.php'); 

?>

<!-- index.php -->

    <?php echo $message; ?>

<!-- END container -->
<!-- /index body -->
<?php 
// load footer template 
require_once ('qurl/footer.php'); 
?>