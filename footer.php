<?php
	/**
	 * footer.php
	 * Echos a footer containing author name and copyright date
	 * @author Spencer Haney
	 */
	
	echo 	'<footer>
				Spencer Haney &copy 2014 
				<span style="float:right; width: 30em;">'; 
					echo "Last edited ".date ("F d Y H:i:s", filemtime($_POST['page']));
	echo		'</span>
			</footer>';
?>