<?php
	
	$_POST['page'] = "math.php";
 					
	if(isset($_POST['secondnum'])){
		$firstnum = $_POST['firstnum'];
		$secondnum = $_POST['secondnum'];
		include 'head.php';
		echo '<title>Projects - Spencer Haney</title>';
		include 'sidebar.php';
		echo '<section>
				<article>
					<h1>Answers</h1>';
			if(is_numeric($firstnum) && is_numeric($secondnum)){
				echo $firstnum . " + " . $secondnum . " = " . ($firstnum + $secondnum) . "<br>";
				echo $firstnum . " - " . $secondnum . " = " . ($firstnum - $secondnum) . "<br>";
				echo $firstnum . " * " . $secondnum . " = " . ($firstnum * $secondnum) . "<br>";
				echo $firstnum . " / " . $secondnum . " = " . ($firstnum / $secondnum) . "<br>";
			}else{
				echo "Please only enter numbers into form";
			}
			displayForm();
		echo 	'</article>
			</section>';
			
		include 'footer.php';
		
	}else{
		include 'head.php';
		echo '<title>Projects - Spencer Haney</title>';
		include 'sidebar.php';
		echo 	'<section>
					<article>';
		displayForm();
		echo 		'</article>
				</section>';
		include 'footer.php';
	}
	
	function displayForm(){
		echo 	'<h1>Math</h1>
				<form name="math" action="math.php" method="post">
					<table>
						<tr>
							<td>First number: </td>
							<td><input type="text" name="firstnum"></td>
						</tr>
						<tr>
							<td>Second number: </td>
							<td><input type="text" name="secondnum"></td>
						</tr>
					</table>
					<input type="submit" value="Submit">
				</form>';
	}
?>