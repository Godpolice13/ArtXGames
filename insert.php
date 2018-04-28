
<html>
<a href="register.html">Vissza a Regisztrációhoz.</a><br>
</html>

<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');
if (!empty($username)){
if (!empty($password)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "forum";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO loginform (username, password, email)
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
