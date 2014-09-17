<?php 
	/**
 	*	strings.php
 	*	Manipulate strings entered by the user
 	*	@author Spencer Haney
 	*	@version 1.0 
 	*/
	$_POST['page'] = "strings.php";
	
	include 'head.php';
	
	echo '<title>Strings</title>';
	include 'sidebar.php';

	echo 	'<section>
				<article>
					<h1>Playing With Strings</h1>';
	displayForm();
	//If form is filled
	if(isset($_POST['email'])){
		//Concatenate words
		$var = $_POST['fname']." ".
				$_POST['lname']." ".
				$_POST['address']." ".
				$_POST['city']." ".
				$_POST['state']." ".
				$_POST['zip']." ".
				$_POST['email'];
		
		echo $var."<br>";
		echo str_word_count($var)." words<br>";
		echo strtoupper($var)."<br>";
		echo strtolower($var)."<br>";
		echo ucfirst($var)."<br>";
		echo sentence_case($var)."<br>";
	}
	
	echo	'	</article>
			</section>';
	include 'footer.php';
	
	/**
	 * Display the form to the user
	 */
	function displayForm(){
		echo	'<form action="strings.php" method="post">
					<table>
						<tr>
							<td>First Name: </td><td><input type="Text" name="fname"></td>
						</tr>
						<tr>
							<td>Last Name: </td><td><input type="Text" name="lname"></td>
						</tr>
						<tr>
							<td>Address: </td><td><input type="Text" name="address"></td>
						</tr>
						<tr>
							<td>City: </td><td><input type="Text" name="city"></td>
						</tr>
						<tr>
							<td>State: </td><td><input type="Text" name="state" maxlength=2></td>
						</tr>
						<tr>
							<td>Zip: </td><td><input type="Text" name="zip"></td>
						</tr>
						<tr>
							<td>Email: </td><td><input type="Text" name="email"></td>
						</tr>
						<td><br></td>
						<tr>
							<td><input type="submit" value="Submit"></td>
						</tr>
					</table>
				</form>';
	}
	
	/**
	 * Convert the passed string so that the first word of each sentence is capitalized
	 */
	function sentence_case($string) {
		$sentences = preg_split('/([.?!]+)/', $string, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE);
		$new_string = '';
		foreach ($sentences as $key => $sentence) {
			$new_string .= ($key & 1) == 0?
			ucfirst(strtolower(trim($sentence))) :
			$sentence.' ';
		}
		return trim($new_string);
	}
?>