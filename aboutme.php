<?php
	
	include 'head.php';
	echo '<title>About Me - Spencer Haney</title>';
	include 'sidebar.php';
	
	$_POST['page'] = "aboutme.php";
	
	echo 	"<section>
				<article>
				<h1>About Me</h1>
				<p>
					My name is Spencer Haney
				</p>
				</article>
			</section>";
	
	include 'footer.php';
?>