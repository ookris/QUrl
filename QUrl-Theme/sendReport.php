<?php 
// QUrl Theme for YOURLS
// A simple theme for YOURLS built based on the Bootstrap framework.
// Author: ookris => https://github.com/ookris/QUrl

if (empty($_POST['link'])) {
    exit('No access'); 
}

$reportDate = date('d.m.Y H:i');
$reportID = mt_rand(100000, 999999);

// Load config file 
include('qurl/config.php'); 

//PHPMailer Library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'qurl/PHPMailer/src/Exception.php';
require 'qurl/PHPMailer/src/PHPMailer.php';
require 'qurl/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
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
    $mail->setFrom($emailFromAddress, $emailFromName . $qurlLang['send_report_message_subject2'] );
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

    $mail->Subject = $qurlLang['send_report_message_subject'] . $reportID;
    $mail->Body    = <<<EOT
    <h2>{$qurlLang['send_report_message_body_h2']}</h2>
    <table>
    <tbody>
    <tr>
        <td><u>{$qurlLang['send_report_message_link']}</u></td>
        <td>{$_POST['link']}</td>
    </tr>
    <tr>
        <td><u>{$qurlLang['send_report_message_description']}</u></td>
        <td>{$_POST['opislinka']}</td>
    </tr>
    <tr>
        <td><u>{$qurlLang['send_report_message_email']}</u></td>
        <td>{$_POST['email']}</td>
    </tr>
    <tr>
        <td> <u>{$qurlLang['send_report_message_date']}</u></td>
        <td>$reportDate</td>
    </tr>
    </tbody>
    </table>
    <br><br>
    ----<br>
    #ID$reportID

    EOT;

    $mail->send();

    $message = '<div class="alert alert-success" role="alert">' . $qurlLang['send_report_message_success'] . '</div>';
} catch (Exception $e) {
    $message = '<div class="alert alert-danger" role="alert">' . $qurlLang['send_report_message_error'] . '<br>Error: ' . $mail->ErrorInfo . '</div>';
}
?>

<?php 
// Load config file 
include('qurl/config.php'); 

// Page title 
$currentpagetitle = $qurlLang['current_page_title_report_send'];

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