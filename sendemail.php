<?php


if(!isset($_POST)) exit;

function tommus_email_validate($email) { return filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email); }

$name = $_POST['name'];
$email = $_POST['email'];
$tel_number = $_POST['telefoonnummer'];
$comments = $_POST['comments'];


if(trim($name) == '') {
	exit('<div class="alert alert-danger">Attention! You must enter your name.</div>');
} elseif(trim($name) == 'Name') {
	exit('<div class="alert alert-danger">Attention! You must enter your name.</div>');

} elseif(trim($email) == '') {
	exit('<div class="alert alert-danger">Attention! Please enter a valid email address.</div>');
} elseif(!tommus_email_validate($email)) {
	exit('<div class="alert alert-danger">Attention! You have entered an invalid e-mail address.</div>');

} elseif(trim($tel_number) == '') {
	exit('<div class="alert alert-danger">Attention! Please enter your phonenumber.</div>');
} elseif(trim($comments) == 'Message') {
	exit('<div class="alert alert-danger">Attention! Please enter your message.</div>');
} elseif(trim($comments) == '') {
	exit('<div class="alert alert-danger">Attention! Please enter your message.</div>');
} elseif( strpos($comments, 'href') !== false ) {
	exit('<div class="alert alert-danger">Attention! Please leave links as plain text.</div>');
} elseif( strpos($comments, '[url') !== false ) {
	exit('<div class="alert alert-danger">Attention! Please leave links as plain text.</div>');
} if(get_magic_quotes_gpc()) { $comments = stripslashes($comments); }

$email_address = 'asyameubel@hotmail.com';

$e_subject = 'You\'ve been contacted by ' . $name . '.';
$e_body = "Je hebt een bericht ontvangen van: $name \r\nNummer: $tel_number " . "\r\n";
$e_content = "\r\n \"$comments\"" . "\r\n" . "\r\n";
$e_reply = "You can contact $name via email, $email";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/plain; charset=utf-8" . "\r\n";
$headers .= "Content-Transfer-Encoding: quoted-printable" . "\r\n";

if(mail($email_address, $e_subject, $msg, $headers)) { echo "<fieldset><div id='success_page'><h4 class='remove-bottom'>Uw bericht is succesvol verzonden!.</h4><p>Thank you <strong>$name</strong>, wij zullen zo spoedig mogelijk contact met u opnemen</p></div></fieldset>"; }
// \r\nAdres: $address
