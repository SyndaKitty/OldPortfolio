<?php
echo "<html> <head> <title></title> </head><body>";

/*************************************
 * Check to see if form was submitted
 *************************************/
if(isset($_POST['city'])){
	
/*************************************
 * Form Handler
 *************************************/
	$yourname = htmlspecialchars($_POST['yourname']);
	$phone = htmlspecialchars($_POST['phone']);
	$city = htmlspecialchars($_POST['city']);
	
	echo "<h2>Hi ".$yourname."</h2>";
	echo "<p>".$phone;
	echo "<br>".$city."</p>";
}

else{
/*************************************
 * Present form and reload page
 *************************************/
       echo "
       <form method='post' action='practice.php'>
 
       <h2>What is your name?</h2>
 
       <input type='text' name='yourname'><br>
       <input type='text' name='phone'><br>
       <input type='text' name='city'><br>
 
       <input type='submit' value='Submit'>
 
       </form>'";
}
?>