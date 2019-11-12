<?php

function send_mail($to, $sub, $msg){	
require_once "smtp.class.php";
									
	$From = 'mo.ok@qq.com';
	$Host = 'smtp.qq.com';
	$Port = 465;
	$SMTPAuth = 1;
	$Username = 'mo.ok@qq.com';
	$Password = 'mo13712344353';
	$Nickname = '放射力影视';
	$SSL = 465;
	$mail = new SMTP($Host, $Port, $SMTPAuth, $Username, $Password, $SSL);
	$mail->att = array();
	if ($mail->send($to, $From, $sub, $msg, $Nickname)) {
		return true;
	}
	return $mail->log;
}

	$SHOU = 'mo.ok@qq.com';
?>