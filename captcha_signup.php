<?php 
    session_start();
    $str=md5(microtime());
    $str=substr($str,0,6);
	$_SESSION['cap_code']=$str;
	$img=imagecreate(100,30);
	imagecolorallocate($img,250, 215, 160 );
	$txtcolor=imagecolorallocate($img,0,0,0);
	imagestring($img,20,5,5,$str,$txtcolor);
	header('content:image/jpeg');
	imagejpeg($img);
  
?>