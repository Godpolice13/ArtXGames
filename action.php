<?php
$con = mysqli_connect('mysqlweb.clans.hu', 'forizonplay143', 'A6aBeLYHESuPEGY');

if(isset($_POST['submit']))
{
$msg = $_POST['userMsg'];

$sql = "SELECT username from ArtXGames_Fioklista";
$result = $con-> query($sql);
if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		$fioknev = $row["username"];
		$query = "INSERT INTO ArtXGames_Csevego SET name= '$fioknev', msg='$msg'";
		$run = mysqli_query($con, $query);
		 //if($run)
		 //{
		 	//echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
		 //}
	}
}
}
?>