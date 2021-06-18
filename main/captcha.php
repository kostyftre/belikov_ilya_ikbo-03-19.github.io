<?php

	session_start();

	$rand = mt_rand(1000, 9999);
	$_SESSION["rand_captcha"] = $rand;

	$im = imagecreatetruecolor(175, 50);

	$color = imagecolorallocate($im, 115, 161, 240);


	$font = 'C:\openserver\domains\testsite.local\verdana.ttf' ;

	imagettftext($im, 20, 10, 50, 40, $color, $font, $rand);

	header("Content-Type: image/png");

	imagepng($im);

	imagedestroy($im);

?>