<?php
	$to1 = 'info@firstcondo.ca';
	
	if ( !isset($_POST['to'])
		|| !isset($_POST['fromName'])
		|| !isset($_POST['fromPhone'])
		|| !isset($_POST['fromEmail'])
		|| !isset($_POST['subject'])
		|| !isset($_POST['message'])
	) {
		header('HTTP/1.1 400 Bad Request');
		return;
	}

	$M['to']        = trim($_POST['to']);	
	$M['fromName']  = trim($_POST['fromName']);	
	$M['fromPhone'] = trim($_POST['fromPhone']);	
	$M['fromEmail'] = trim($_POST['fromEmail']);	
	$M['subject']   = trim(stripslashes($_POST['subject']));	
	$M['message']   = trim(stripslashes($_POST['message']));	

	if ( $M['to']=='' ) $M['to'] = 'First Condo Group: More Info';
	if ( $M['fromName']=='' ) $M['fromName'] = '???';
	if ( $M['fromEmail']=='' ) $M['fromEmail'] = 'not-provided@nowhere.com';
	if ( $M['subject']=='' ) $M['subject'] = '???';
	if ( $M['message']=='' ) $M['message'] = '???';
	
	$subject = "FCG: " . $M['subject'];
	$message = ( $M['fromPhone']=='' ? '' : 'My Phone: '.$M['fromPhone']."\n\n" )
		. $M['message'];
	$headers = "MIME-Version: 1.0\r\n"
		. "Content-type: text/plain; charset=iso-8859-1\r\n"
		. "Date: " . date('r') . " \r\n"
		. "To: $to1\r\n"
		. "From: " . $M['fromName'] . " <" . $M['fromEmail'] . ">\r\n"
		. "Sender: " . $M['fromEmail'] . "\r\n"
		. "Organization: FirstCondo.ca\r\n"
//		. "Bcc: $bcc1\r\n"
		. "X-Sender: " . $M['fromEmail'] . "\r\n"
//		. "X-Priority: 3\r\n"
		. "X-Mailer: PHP/" . phpversion() . "\r\n"
		;

	G::$M['mail'] = $M;
	G::$M['sentOkay'] = mail('',$subject,$message,$headers);

	require PHP_ROOT . '/V/emailsent.php';
