<?php
$_POST['page'] = "projects.php";
	include 'head.php';
	echo '<title>Projects - Spencer Haney</title>';
	include 'sidebar.php';
	
	echo 	'<section>
				<article>
					<h1>Projects</h1>
						<table class="projects">
							<tr>
								<td><a href="pirate.php">Pirate Memories</a></td>
								<td><a href="candy.php">Candy Solutions</a></td>
								<td><a href="math.php">Math</a></td>
								<td><a href="bmi.php">BMI Calculator</a></td>
							</tr>
							<tr>
								<td><a href="animals.php">Animal Lore</a></td>
								<td><a href="strings.php">Playing With Strings</a></td>
								<td><a href="game.php">Game</a></td>
								<td><a href="#"></a></td>
							</tr>
							<tr>
								<td><a href="#"></a></td>
								<td><a href="#"></a></td>
								<td><a href="#"></a></td>
								<td><a href="#"></a></td>
							</tr>
							<tr>
								<td><a href="#"></a></td>
								<td><a href="#"></a></td>
								<td><a href="#"></a></td>
								<td><a href="#"></a></td>
							</tr>
						</table>
				</article>
			</section>';
	include 'footer.php';
?>