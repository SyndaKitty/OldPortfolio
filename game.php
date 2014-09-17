<?php 
	/**
	 * game.php
	 * @author Spencer Haney
	 * @version 1.0
	 * Last modified September 16, 2014
	 */
	include 'functions.php';	
	
	session_start();
	
	//If they haven't played yet
	if(!isset($_SESSION['x'])){
		//Set their position to the starting position of the map
		$_SESSION['currentMap'] = loadMap("overworld");
		$_SESSION['x'] = startingPositionX($_SESSION['currentMap']);
		$_SESSION['y'] = startingPositionY($_SESSION['currentMap']);
	}
	
	//Input, Proccessing
	getInput();
	
	//Output
	$_POST['page'] = "game.php";
	
	include 'head.php';
	
	echo '<title>Game</title>';
	include 'sidebar.php';
	
	echo 	'<section>
				<article>
					<h1>Game</h1>';
	drawMap($_SESSION['currentMap']);
	echo 	'<form action="#" method="post">
				<input type="submit" name="left" value="Left">
				<input type="submit" name="right" value="Right">
				<input type="submit" name="up" value="Up">
				<input type="submit" name="down" value="Down">
				<input type="submit" name="reset" value="Reset">
			</form>';

	echo	'	</article>
			</section>';
	include 'footer.php';
	
	/**
	 * Purpose: get input from the user, using the buttons stored in post
	 */
	function getInput(){
		if(isset($_POST['reset'])){
			unset($_POST);
			$_POST['gameover'] = false;
			$_SESSION['x'] = startingPositionX($_SESSION['currentMap']);
			$_SESSION['y'] = startingPositionY($_SESSION['currentMap']);
			$_SESSION['currentMap'] = loadMap("overworld");
		}
		if(isset($_POST['up'])){
			if(checkSpot($_SESSION['y'] - 1, $_SESSION['x']))
				$_SESSION['y'] = $_SESSION['y'] - 1;
		}
		if(isset($_POST['down'])){
			if(checkSpot($_SESSION['y'] + 1, $_SESSION['x']))
				$_SESSION['y'] = $_SESSION['y'] + 1;
		}
		if(isset($_POST['left'])){
			if(checkSpot($_SESSION['y'], $_SESSION['x'] - 1))
				$_SESSION['x'] = $_SESSION['x'] - 1;
		}
		if(isset($_POST['right'])){
			if(checkSpot($_SESSION['y'], $_SESSION['x'] + 1))
				$_SESSION['x'] = $_SESSION['x'] + 1;
		}
	}
	
	function checkSpot($x, $y){
		switch($_SESSION['currentMap'][$x][$y]){
			case 'W':
				return false;
			default:
				return true;
		}
	} 
	
	/**
	 * Purpose: draw the passed map
	 * @param $map the map to draw. May be jagged
	 */
	function drawMap($map){
		echo '<table cellpadding=4 cellspacing4>';
		for($column=0; $column < count($map); $column++){
			echo '<tr>';
			for($row=0; $row < count($map[$column]); $row++){
				echo '<td style="padding-right:1em">';
				switch($map[$column][$row]){
					case 'W':
						echo '+';
						break;
				}
				if($row == $_SESSION['x'] && $column == $_SESSION['y']){
					echo 'O';
				}
				echo '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
?>