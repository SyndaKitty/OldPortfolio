<?php 
	$filename = "test.txt";

	header('Content-Type: text');
	header('Content-Disposition: attatchment; filename="'.$filename.'"');
	
?>
Anything you want in the text file goes here :)