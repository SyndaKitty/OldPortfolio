<?php 
	/**
	 * animals.php
	 * 
	 * @author Spencer Haney
	 * @version 1.0
	 * Last edited: September 16, 2014
	 */

	$_POST['page'] = "animals.php";

	//Create three variables that name different animals
	$animalName1 = "Zebra";
	$animalName2 = "Yak";
	$animalName3 = "X-Ray Tetra";
	
	//Create three variables that describe those animals
	$animalDesc1 = "Stripe patterns are unique to each zebra.";
	$animalDesc2 = "There are only a few left in the wild.";
	$animalDesc3 = "Has yellow, black, and white striped fins.";
	
	//Output the appropriate animal with its description, using HTML formatting. 
	include 'head.php';
		echo '<title>Animal Lore</title>';
		
		include 'sidebar.php';
		
		echo	'<section>
					<article>
						<h1>Animal Lore</h1>';
	
	echo	'<table>
				<tr>
					<td>'.$animalName1.'</td>
					<td>'.$animalDesc1.'</td>
				</tr>
				<tr>
					<td>'.$animalName2.'</td>
					<td>'.$animalDesc2.'</td>
				</tr>
				<tr>
					<td>'.$animalName3.'</td>
					<td>'.$animalDesc3.'</td>
				</tr>
			</table>';
	
	$animalNames =	[	"Anaconda", "Buffalo", "Camel", "Dolphin",
						"Eagle", "Ferret", "Gecko", "Hedgehog",
						"Iguana", "Jellyfish", "Kangaroo", "Lobster",
						"Mule"	];
	
	$animalDescs = [	"It doesn't want any unless you have pretzel buns.",
						"Has no real natural predators.",
						"\"Mike, Mike. Guess what day it is?\"",
						"Have been known to assign names to each other!",
						"Has really sharp eyesight.",
						"Thought to be a sub-species of the polecat.",
						"There are thought to be over 2,000 species.",
						"Thought to be one of the oldest mammals on Earth.",
						"Uses visual signals to communicate.",
						"Has tentacles around its mouth.",
						"Females have a deep pouch on their front.",
						"Have been known to reach 100 years of age.",
						"A donkey/horse hybrid."];
	
	//Bad magic numbers!
	$animalWeights = [	"550lbs", "2000lbs", "660-2200lbs", "350lbs",
						"14lbs", "3lbs", "60 grams", "1.25lbs",
						"13lbs", ".001-440lbs", "200lbs", "1.25lbs",
						"120lbs"	];

	//Display each element in a table
	echo '<h1>More Animals!</h1>';
	echo '<table>';
	
	for($i = 0; $i < count($animalNames); $i++ ){
		echo '<tr>';
		echo '<td>'.$animalNames[$i].'</td>';
		echo '<td>'.$animalDescs[$i].'</td>';
		echo '<td>'.$animalWeights[$i].'</td>';
		echo '</tr>';
	}
	
	echo '</table>';
	
	
	//Good! Using define to create constants
	//Must serialize array to define a constant array
	define("ANIMAL_WEIGHTS", 	serialize (array ("550lbs", "2000lbs", "660-2200lbs", "350lbs",
								"14lbs", "3lbs", "60 grams", "1.25lbs",
								"13lbs", ".001-440lbs", "200lbs", "1.25lbs",
								"120lbs")));
	
	echo '<h1>Same Animals (Different Variables!)</h1>';
	echo '<table>';
	
	for($i = 0; $i < count($animalNames); $i++ ){
		echo '<tr>';
		echo '<td>'.$animalNames[$i].'</td>';
		echo '<td>'.$animalDescs[$i].'</td>';
		//Unserialize constant array for use
		echo '<td>'.unserialize(ANIMAL_WEIGHTS)[$i].'</td>';
		echo '</tr>';
	}
	
	echo '</table>';
	
	include 'footer.php';
?>