<script>
function validateForm() {
    var x = document.forms["candy"]["candyType"].value;
	if (x == null || x == "") {
		alert("Form is not complete\nPlease fill all fields.");
	    return false;
	}
}
</script>

<?php
$_POST['page'] = "candy.php";

include 'head.php';

echo '<title>Candy Shop</title>';
include 'sidebar.php';

if(!isset($_POST['planet'])){
	echo '<section>
			<article>
				<h1>Candy Solutions Survey</h1>
				<form action="candy.php" name="candy" method="post">
					Here at Candy Solutions we would like to hear your opinion on our products.<br>
					<br>
					As you know our company has two main types of candy available:<br> 
					<ul>
						<li>Our natural candy grown straight from Xion the "Candy Planet"</li>
						<li>Our artificial candy produced straight from our laboratories on Deltoran</li>
					</ul>
					<fieldset>
						<legend>Candy Preference</legend>
						<table>
							<tr>
								<td>I prefer all natural candy</td>
								<td><input type="radio" name="candyType" value="n"></td>
							</tr>
							<tr>
								<td>I prefer artificial candy</td>
								<td><input type="radio" name="candyType" value="a"></td>
							</tr>
						</table>
					</fieldset>
					<fieldset>
						<legend>Favorite Gum Flavors</legend>
							<table>
								<tr>
									<td>Serpling bark</td>
									<td><input type="checkbox" name="gumType" value="serpling"></td>
								</tr>
								<tr>
									<td>Potana plant</td>
									<td><input type="checkbox" name="gumType" value="potana"></td>
								</tr>
								<tr>
									<td>Butterfly Galaxy</td>
									<td><input type="checkbox" name="gumType" value="butterfly"></td>
								</tr>
								<tr>
									<td>Space Exhaust</td>
									<td><input type="checkbox" name="gumType" value="exhaust"></td>
								</tr>
								<tr>
									<td>Deltoran Grass</td>
									<td><input type="checkbox" name="gumType" value="grass"></td>
								</tr>
							</table>
					</fieldset>
					What planet (or moon) do you currently report to for your governmental sessions?<br>
					<select name="planet">
						<optgroup>
							<option value="Deltoran">Deltoran</option>
							<option value="Xion">Xion</option>
							<option value="Titan">Titan</option>	
							<option value="Deltoran">Deltoran</option>
							<option value="Marannan">Marannan</option>
							<option value="Utilmatta">Utilmatta</option>
							<option value="Pelbrottan">Pelbrottan</option>
							<option value="Other">Other</option>
						</optgroup>
					</select>
					<br><br>
					Do you have any questions or concerns regarding our candy manufacturing?
					<textarea rows="5" cols="60" name="opinion"></textarea><br>
					<input type="submit" value="Submit">
				</form>
				<button onClick="validateForm()">Validate</button>
			</article>
		</section>';
}else{
	echo '<section>
			<article>
				<h1>Thank you!</h1>
				Thank you for participating in our survey here at Candy Solutions!<br>
			</article>
		</section>';
}
include 'footer.php';
?>