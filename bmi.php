<?php 
/**
 * Converts user's height and weight to BMI
 * @author Spencer Haney
 * @version 1.0
 * Last edited: 9-11-14 1pm
 */

$_POST['page'] = "bmi.php";

//DEFINITIONS
define('INCHESINMETER', 39.36);
define('POUNDSINKILO', 2.2);

//USER INPUT
if(isset($_POST['height']))
	$height = htmlspecialchars($_POST['height']);
if(isset($_POST['weight']))
	$weight = htmlspecialchars($_POST['weight']);

//PROCESS
if(isset($_POST['height']) && isset($_POST['weight'])){
	if(is_numeric($height) && is_numeric($weight)){
		$meters = $height / INCHESINMETER;
		$kilos = $weight / POUNDSINKILO;
		$bmi = $kilos/ ($meters * $meters);
	}
}
//OUTPUT
include 'head.php';
echo '<title>Projects - Spencer Haney</title>';
include 'sidebar.php';
echo 	'<section>
			<article>';
				if(isset($height) && isset($_POST['weight'])){
					if(isset($bmi)){
						echo "<p>Your BMI is " . $bmi . "</p>";
					}else{
						echo "<p>Please only enter numbers</p>";
					}
				}
				displayForm();
echo 		'</article>
		</section>';
		
include 'footer.php';

function displayForm(){
	echo 	'<h1>BMI</h1>
				<form action="bmi.php" method="post">
					<table>
						<tr>
							<td>Height (inches): </td>
							<td><input type="text" name="height"></td>
						</tr>
						<tr>
							<td>Weight (lbs): </td> 
							<td><input type="text" name="weight"></td>
						</tr>
					</table>
					<input type="submit" value="Submit">
				</form>';
}
?>