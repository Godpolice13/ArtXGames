
<html>
<head>
	<title>ArtXGames</title>
	<link rel="icon" href="files/images/Header_Logo.png"/>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<img class="header-logo-image" src="files/images/Logo.png" width="118" height="38" alt="Logo">
                        </h1>
                    </div>
                </div>
        </header>
	<form method="POST">
		<div class="login" action="index.php">
		<center>
			<img src="avatar.png" class="avatar">
			<input type="text" name="username" class="form-control" placeholder="Felhasználónév" required><br><br>
			<!--<input type="password" name="pass" placeholder="Jelszó" /><br><br>-->
			<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Jelszó" required><br><br>
			<input type="email" name="email" placeholder="Email" required/><br><br>
			<input id="submit" type="submit" name="submit" value="Bejelentkezés"/><br><br>
			<br><br><br><br><br>
			<a href="index.php"<span style="color: #FFFFFF">Otthon</span></a>
			<br>
			<a href="register.php" <span style="color: #FFFFFF">Nincsen még Fiókod ?</span></a>
		</div>
	</form>
</body>
</html>

<?php  //Start the Session
session_start();
 require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `ArtXGames_Fioklista` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
$email = $_POST['email'];
$query = mysqli_query($connection, "UPDATE ArtXGames_Fioklista SET status = '1' WHERE email = '$email' ");
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
header('Location: index.php');
//$username = $_SESSION['username'];
//echo "Fiók Felhasználónév: ".$username." | FWL-RP";

//<br><center><a href="logout.php" <span style="color: #FFFFFF">Kijelentkezés</span></a><br>
//echo "<br><center><a href='logout.php'<span style="color: WHITE">>Kijelentkezés</span></a><br>";
//<a href="logout.php" style="color:#f9c539">Kijelentkezés</a>
//echo '<a href="logout.php" >Kijelentkezés</a></style>';
}
//3.2 When the user visits the page first time, simple login form will be displayed.
?>
