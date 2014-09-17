<?php
	echo 	'<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutme.php">About Me</a></li>
					<li><a href="projects.php">Projects</a></li>
					<aside>
						<script>
							quotes = [
							"We know what we are, but know not what we may be.<br>- William Shakespeare", 
							"It is during our darkest moments that we must focus to see the light.<br>- Aristotle Onassis",
							"The will to win, the desire to succeed, the urge to reach your full potential. These are the keys that will unlock the door to personal excellence.<br>- Confucius",
							"I\'ve failed over and over again, and that is why I succeed<br>- Michael Jordan",
							"Your time is limited, so don\'t waste it living someone else\'s life.<br>- Steve Jobs",
							"Don\'t let the noise of others\' opinions drown out your own inner voice<br>- Steve Jobs",
							];
							index = Math.floor(Math.random() * quotes.length);
							document.write(quotes[index])
						</script>
					</aside>
				</ul>
			</nav>';
?>