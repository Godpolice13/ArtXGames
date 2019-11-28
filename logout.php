
<?php
include 'db.php';

// Initialize the session
session_start();

$sql = "SELECT username from ArtXGames_Fioklista";
$result = $con-> query($sql);
if ($result-> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
$fioknev = $row["username"];
mysqli_query($con, "UPDATE ArtXGames_Fioklista SET status = '0' WHERE username = '$fioknev' ");
}
}

// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header('Location: login.php');
exit;
?>
