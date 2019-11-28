
<html>
<head>
	<title>ArtXGames</title>
	<link rel="icon" href="files/images/Header_Logo.png"/>
	<link rel="stylesheet" type="text/css" href="style_insert.css">
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
</body>
<br><center><a href="register.php" <span style="color: #FFFFFF">Vissza a Regisztrációhoz</span></a><br>
</html>
<span style="color: #00aeef;">
<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');
if (!empty($username)){
if (!empty($password)){
if (!empty($email)){
$host = "mysqlweb.clans.hu";
$dbusername = "forizonplay143";
$dbpassword = "A6aBeLYHESuPEGY";
$dbname = "forizonplay143";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO ArtXGames_Fioklista (username, password, email)
  values ('$username','$password','$email')";
  if ($conn->query($sql)){
    echo "Sikeres regisztráció ! Az adatbázisunkba az Adataid felirva.";
  }
  else{
    echo "Hiba: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Kérlek töltsd ki az Email mezőt !";
  die();
}
 }
 else{
  echo "Kérlek töltsd ki a Jelszó mezőt !";
  die();
 }
 }
else{
echo "Kérlek töltsd ki a Felhasználónév mezőt !";
die();
}

?>
</span>
