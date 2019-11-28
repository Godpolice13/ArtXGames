
<!--<br><center><a href="login.php" <span style="color: #FFFFFF">Vissza a Bejelentkezéshez</span></a><br>-->
<span style="color: #00aeef;">
<?php

   define('DB_SERVER', 'mysqlweb.clans.hu');
   define('DB_USERNAME', 'forizonplay143');
   define('DB_PASSWORD', 'A6aBeLYHESuPEGY');
   define('DB_DATABASE', 'forizonplay143');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   //include("config.php");
   session_start();
   
	if (isset($_SESSION['username'])){
	header('Location: index.php');
	}
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }

//$LoginErtek = 0;

//if ($row["username"] == $username and $row["username"] != "" ) {
//	echo "Köszöntelek ".$row['Username']." a Forizon World Life Weboldalán !";
//	$LoginErtek = 1;
//}

//if ($LoginErtek == 0 and $row["username"] != $username or $row["password"] != $password or $row["email"] != $email or $row["username"] == "" or $row["password"] == "" or $row["email"] == "") {
//    echo "Ez a Fiók nem létezik.";
//	header('Location: login.php');
//}
?>
</span>

<!--DOCTYPE html-->

<html>
<head>
	<title>ArtXGames</title>
	<link rel="icon" href="files/images/Header_Logo.png"/>
	<link rel="stylesheet" type="text/css" href="style1.css"/>
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
	<form method="POST" action="try_register.php">
		<div class="register">
		<center>
			<img src="avatar.png" class="avatar"/>
			<input type="text" name="username" placeholder="Felhasználónév "/><br><br>
			<input type="password" name="password" placeholder="Jelszó" /><br><br>
			<input type="email" name="email" placeholder="Email" /><br><br>
			<input type="submit" name="Submit" value="Regisztráció" /><br><br>
			<br><br><br><br><br>
			<!--<button onclick="window.location.href='register.php'">Rólunk</button>-->
			<a href="index.php"<span style="color: #FFFFFF">Otthon</span></a>
			<br>
			<a href="login.php"<span style="color: #FFFFFF">Rendelkezel már Fiókkal ?</span></a>
		</div>
	</form>
</body>
</html>
