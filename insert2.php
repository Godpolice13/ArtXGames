
<a href="register.html">Vissza a Bejelentkezéshez.</a><br>

<?php

$username = $_POST['user'];
$password = $_POST['pass'];
$email = $_POST['em'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$email = stripcslashes($email);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$email = mysql_real_escape_string($email);

mysql_connect("localhost", "root", "");
mysql_select_db("forum");

$result = mysql_query("select * from loginform where username = '$username' and password = '$password' and email = '$email'")
or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username);
if ($row['password'] == $password);
if ($row['email'] == $email) {
	echo "Köszöntelek ".$row['username']." a Forizon World Life Weboldalán !";
} else {
	echo "Ez a Fiók nem létezik.";
}
?>

<html>
	<br>
	<a href="mtasa://84.236.28.65:22003">
	<button id="connectButton" type="button" class="btn btn-danger btn-block"><i class="fa fa-plug" ></i>Csatlakozás a Szerverre</button>
	</a>
</html>
