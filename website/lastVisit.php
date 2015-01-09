<?php 


$fp = fopen('/var/www/adminTime/adminTime.txt','w');

 // if(isset($_COOKIE('Admin')))
 // 	echo "hello";
 // 	// $visitTime = $%_COOKKIE['Admin']
 // 	// file_put_contents($adminTime, $visitTime)

if(isset($_COOKIE['Admin'])){
	date_default_timezone_set('Australia/Sydney');
	$time = date('m/d/y h:i:s a', time());
	echo $time;
	fwrite($fp,$time);	
}

 ?> 
