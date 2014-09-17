<?php
	
	include 'head.php';
	echo '<title>Home - Spencer Haney</title>';
	
	include 'sidebar.php';
	
	$_POST['page'] = "index.php";
	
	echo 	'<section>
				<article>
					<h1>Home</h1>
					<p>
						Welcome to my portfolio!	
					</p>
				</article>
			</section>';
	
	include 'footer.php';
?>