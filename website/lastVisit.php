<?php 
 if(isset($_COOKIE['Admin'])) 
 { 
 $last = $_COOKIE['AboutVisit']; } 
 $year = 31536000 + time() ; 
 //this adds one year to the current time, for the cookie expiration 
 setcookie(AboutVisit, time (), $year) ; 
 if (isset ($last)) 
 { 
 $change = time () - $last; 
 if ( $change > 1) 
 { 
 echo "Welcome back! <br> You last visited at ". date("H",$last).":".date("m",$last) ; 
 // Tells the user when they last visited if it was over a day ago 
 } 
 else 
 { 
 echo time(); 
 //Gives the user a message if they are visiting again in the same day 
 } 
 } 
 else 
 { 
 echo "Welcome to our site!"; 
 //Greets a first time user 
 } 
 ?> 