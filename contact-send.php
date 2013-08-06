<?php

$YourEmailAddress = "rui_xavier@persistent.co.in";	


error_reporting (E_ALL ^ E_NOTICE);
$post = (!empty($_POST)) ? true : false;
if($post) {

	$name = stripslashes($_POST['ContactName']);
	$to = $YourEmailAddress; //trim($_POST['to']);
	$email = trim($_POST['ContactEmail']);
	$subject = 'Registration Entry for PSL beach football 2013';
	$message = stripslashes($_POST['ContactComment']);
	$tt_mens = $_POST['tt_singles_men'];
	$tt_womens = $_POST['tt_singles_women'];
	$error = '';
	$Reply=$to;
	$from=$to;

	
/********************/
require_once("Mail.php");
$from = $email;
$to = 'amar_paifondekar@persistent.co.in';
$subject = 'Registration Entry for PSL table tennis championship 2013 --'.$name;
$mes="
------------(Team event) Team Name/ Team Members-----------

$message

---------------- TT mens - $name ----------------

$tt_mens 

---------------- TT womens - $name ----------------

$tt_womens

";
$body = $mes;
$host = "gamail.persistent.co.in";
$headers = array('From' => $from, 'To' => $to, 'Subject' => $subject);
$smtp = Mail::factory('smtp', array ('host' => $host));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail) ) {
    echo("<p>Error sending mail:<br/>" . $mail->getMessage() . "</p>");
} else {
    echo("<p>Message sent.</p>");
	$from = 'noreply@pslbeachfootball.com';
	$to = $email;
	$subject = 'Registration PSL Table Tennis Championship 2013!';
	$body = "Hi $name,
	
You have successfully registered for PSL Table Tennis Championship.

For more updates you can visit our website at http://goa.persistent.co.in/Fish-4-news/football/

Please do let us know if you have any questions.

Thanks,
PSL sports committe";
	$host = "gamail.persistent.co.in";
	$headers = array('From' => $from, 'To' => $to, 'Subject' => $subject);
	$smtp = Mail::factory('smtp', array ('host' => $host));
	$mail = $smtp->send($to, $headers, $body);
}
/*******************/



		$my_file = '/var/www/html/intranet/Fish-4-news/tabletennis/registration.txt';
		$handle = fopen($my_file, 'a');
		$data = $mes;
		$numberNewline = $data . "\n";
		fwrite($handle, $numberNewline);

}
?>