<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("167839410889-3v8a2dkhf853f6auhttaegnlg4h9foav.apps.googleusercontent.com");
	$gClient->setClientSecret("PUDMPrw5SyFJSBeSoTbwpuOG");
	$gClient->setApplicationName("CPI Login");
	$gClient->setRedirectUri("http://localhost/GoogleLogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
