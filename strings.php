<?php
	$str="This";
	echo $str;
	echo "<br>";

	$len=strlen($str);
	echo "The length of string is" . $len ."<br> Than-you for your support<br>"; 
	echo "The numer  of word count  is : " . str_word_count($str) ;
	echo "<br>The reverse string  is : " . strrev($str) ;
	echo "<br>The search for is in the string is : " . strpos($str,"is") ;
	echo "<br>The replaced  string  is : " . str_replace("is","at",$str);

?>
