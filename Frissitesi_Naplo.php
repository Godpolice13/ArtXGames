<?php
// Initialize the session
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ArtXGames</title>
	<link rel="icon" href="files/images/Header_Logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="files/css/style.css">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/files/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<img class="header-logo-image" src="files/images/Logo.png" width="118" height="86" alt="Logo">
                        </h1>
                    </div>
                </div>
        </header>
<div class="mysql_rendszer">
<?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
?>
<a href="logout.php" <span style="color: rgb(175, 5, 5)">Kijelentkezés</span></a><br>
<?php }else{ ?>
<a href="register.php" <span style="color: rgb(175, 5, 5)">Regisztráció</span></a><br>
<a href="login.php" <span style="color: rgb(175, 5, 5)">Bejelentkezés</span></a>
<?php } ?>
</div>
        <main>
		<div class="header2">
		<h1 class="header__content-text">
		<ul>
		<li><a onclick="OtthonBetolt()">Otthon</a></li>
		<script>
		function OtthonBetolt() {
		location.assign("index.php");
		}
		</script>
		<li><a onclick="ElerhetosegBetolt()">Elérhetőség</a>
		<script>
		function ElerhetosegBetolt() {
		}
		</script>
		<ul>
		<li><a>Facebook</a></li>
		<li><a>E-mail</a></li>
		<li><a>Discord</a></li>
		<li><a>YouTube</a></li>
		</ul>
		</li>
		</ul>
		</h1>
		</div>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">The Robot Commando Battle</h1>
	                        <p class="hero-paragraph">Letölthető Windows, Linux, MacOS Operációs rendszerre</p>
	                        <div class="hero-cta"><a class="button button-primary" href="Játék" download>LEGÚJABB VERZIÓ LETÖLTÉSE</a><a class="button_disabled">LEGÚJABB VERZIÓ FRISSÍTÉSI NAPLÓJA</a></div>
						</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>
			<section class="cta section">
				<div class="frissitesi_naplo">
					<div class="cta-inner section-inner">
					</div>
						<div class="cta-cta">
							<a class="button button-primary button-wide-mobile" href="index.php">Vissza a Főoldalra</a>
						</div>
				</div>
				
			</section>
			<center><h3 class="frissitesi_naplo_szoveg">Frissítési Napló</h3></center>
			<center><p class="frissitesi_naplo_szoveg">HAMAROSAN</p></center>
        </main>
		<center>Tulajdonos: Godpolice13</center>
		<center>Tulajdonos Email címe: Rejtett</center>
			<ul class="list-reset">
			<center>
					<a href="Kapcsolat_Felvetel">Kapcsolat felvétel</a>
			</center>
			</ul>
		<center><div class="site-footer_copyright">&copy; 2019, minden jog fenntartva</div></center>
	<script src="files/js/main.min.js"></script>
</body>
</html>

