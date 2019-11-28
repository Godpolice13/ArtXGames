<?php
include 'db.php';
include 'action.php';

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

	<!-- <script type="text/javascript" src="jquery-3.1.1.min.js"></script> -->
	    <link rel="stylesheet" type="text/css" href="css/ScrollBar.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

<script>
$(document).ready(function(){
$("#send").click(function(){
$("#msg").val("");
}); 
});
</script>

	<style type="text/css">
		hr{
			height: 2px;
		}
		.btn{
			height: 24px;
			line-height: 12px;
		}

		
	</style>
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
	                        <div class="hero-cta"><a class="button button-primary" href="files/TheRobotCommandoBattle.zip" download>LEGÚJABB VERZIÓ LETÖLTÉSE</a><a class="button" href="Frissitesi_Naplo.php">LEGÚJABB VERZIÓ FRISSÍTÉSI NAPLÓJA</a></div>
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
			<br>
			<br>
			<br>
			<br>
			<br>
<center><h1><span style="color: rgb(175, 5, 5)">A Játék még kiadatlan, nem letölthető !</span></h1></center>
<?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
?>
	<div class="row">
		<div class="col-sm-9">
			<div class="panel panel-success">
				<div class="panel-heading" align="center">Csevegő</div>
				<div class="panel-body" style="max-height: 450px; overflow-y: scroll;" class="scrollbar" id="style-2">
					<div id="show"></div>
				</div>
				<div class="panel-footer" id="footer">
					<div class="row">
						<div class="col-sm-10"><input type="text" name="msg" id="msg" class="form-control" ></div>
						<div class="col-sm-2" style="padding-left: 17.5px">
						<input type="reset" name="send" id="send" value="Elküld" class="btn btn-primary " >
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
<?php } else{ ?>
<?php } ?>
<div class="GTASA_DOWNLOAD">
<h2>Csatlakozz Multi Theft Auto Játékszervereinkhez ezzel a 3 lépéssel !</h2>
<h3>1. Lépés</h3>
<div class="hero-cta">
<a class="button button-primary" href="https://www.winrar.hu">A WINRAR BESZERZÉSE</a>
</div>
<h3>2. Lépés</h3>
<div class="hero-cta">
<a class="button button-primary" href="https://www.google.com">A GTA SA 2020 LETÖLTÉSE</a>
</div>
<h3>3. Lépés</h3>
<div class="hero-cta">
<a class="button button-primary" href="https://www.mtasa.com">A MULTI THEFT AUTO LETÖLTÉSE</a>
</div>
</div>

            <section class="features section">
                <div class="container">
					<div class="features-inner section-inner has-bottom-divider">
					<center><h3>The Robot Commando Battle - Minimum Rendszer Követelmények</h3></center>
					<center><p>0 MB Tárhely</p></center>
					<center><p>Kép Memória Használat: 125 MB</p></center>
					<center><p>512 MB RAM</p></center>
					<center><p>Legújabb verziójú grafikai kártya illesztőprogramok</p></center><br><br>

					<center><iframe width="400" height="325" src="https://www.youtube.com/embed/VIDEOURL?autoplay=1"></iframe></center>

                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="hibakereses.png" width="128" height="128" alt="Icon">
                                    </div>
                                    <h2 class="feature-title mt-24">Segíts a hibakeresésben !</h2>
                                    <p class="text-sm mb-0">Ha hibát találsz a játékban, jelezd nekünk, és kilesz javítva a következő verzióban.</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="gametesting.png" width="128" height="128" alt="Icon">
                                    </div>
                                    <h2 class="feature-title mt-24">Tesztelj kiadatlan játékokat, alkalmazásokat !</h2>
                                    <p class="text-sm mb-0">Keresd fel e-mailben az oldal tulajdonosát, és beszélj vele Discrodon, hogyha úgy érzed, hogy megfelelsz a követelményeknek.</p>
									<h4 class="feature-title mt-24">Mik a követelmények ?</h6>
									<p class="text-sm mb-0">- Megkell bíznod bennünk.</p>
									<p class="text-sm mb-0">- 16 Életév betöltése.</p>
									<p class="text-sm mb-0">- Legyél aktív ! Ha inaktív vagy, kileszel véve a listából.</p>
									<h4 class="feature-title mt-24">Szívesen fogadjuk a felvételed !</h4>
									<p class="text-sm mb-0">Nem kell megijedned, a jelentkezés nem nehéz.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="mta.png" alt="Icon">
                                    </div>
                                    <h2 class="feature-title mt-24">Multi Theft Auto Játékszervereink</h2>
                                    <p class="text-sm mb-0">[HUN] Magyar ForizonPlay Szórakozó Szerver(mtasa://37.221.209.216:22017) - Max. 30 Férőhely</p>
									<a href="mtasa://37.221.209.216:22017"><button id="connectButton" type="button" class="button"><i class="fa fa-plug" ></i>Csatlakozás a Játékszerverre</button></a>
									<p class="text-sm mb-0">[HUN] Magyar Need For Speed Most Wanted MTA Játékszerver [Fejlesztes Alatt](mtasa://37.221.209.212:22078) - Max. 30 Férőhely</p>
									<a href="mtasa://37.221.209.212:22078"><button id="connectButton" type="button" class="button"><i class="fa fa-plug" ></i>Csatlakozás a Játékszerverre</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pricing section">
			<br><br>
                <div class="container">
                    <!--<div class="pricing-inner section-inner">-->
					<!--<div class="pricing-inner">-->
                        <!--<div class="pricing-header text-center">-->
							<!--<iframe style="background:none;" frameborder="0" scrolling="yes" src="https://webadmin.clans.hu/tamogat/index.php?code=133657" width="310" height="430"></iframe>
							<h2 class="section-title mt-0">Támogatás</h2>
                            <p class="section-paragraph mb-0">Támogatni Emelt Díjas SMS-el lehetséges.</p>
							<p class="section-paragraph mb-0"></p>
							<p class="section-paragraph mb-0">Magyarországról(T-Mobile, Telenor, Vodafon hálózatából):</p>
							<p class="section-paragraph mb-0">330Ft-os támogatásért: ,,06-90-642-030'' telefonszámra küldd el a ,,CLANSHU 133657'' szöveget.</p>
							<p class="section-paragraph mb-0">508Ft-os támogatásért: ,,06-90-643-646'' telefonszámra küldd el a ,,CLANSHU 133657'' szöveget.</p>
							<p class="section-paragraph mb-0">1016Ft-os támogatásért: ,,06-90-888-355'' telefonszámra küldd el a ,,CLANSHU 133657'' szöveget.</p>
							<p class="section-paragraph mb-0">2032Ft-os támogatásért: ,,06-90-888-466'' telefonszámra küldd el a ,,CLANSHU 133657'' szöveget.</p>
							<p class="section-paragraph mb-0">5080Ft-os támogatásért: ,,06-90-649-099'' telefonszámra küldd el a ,,CLANSHU 133657'' szöveget.</p>
							<p class="section-paragraph mb-0"></p>
							<p class="section-paragraph mb-0">A feltüntetett árak bruttó árak tartalmazzák az Általános Forgalmi Adót.</p>
							<p class="section-paragraph mb-0">Az elírt SMS-ek árát nem áll módunkban jóváírni, így figyelj oda, hogy mit küldesz el.</p>
							<p class="section-paragraph mb-0">A támogatás összege egyenesen a Clans.hu-hoz kerül, melyet a szerver tulajdonosa csak a játékszerverére költhet el.</p>
							<p class="section-paragraph mb-0">FONTOS, hogy tudd, azzal, hogy támogattad a játékszerverünk, még nem biztos, hogy tovább is fog tudni üzemelni,</p>
							<p class="section-paragraph mb-0">csak a támogatásod mértékével kell kevesebbet fizetnünk a következő hónapban! SMS-t Magyarországi T-Mobile,</p>
							<p class="section-paragraph mb-0">Vodafone, Telenor hálózatából tudunk csak fogadni!</p>
							<p class="section-paragraph mb-0">Az SMS Rendszert a Pannora Kft. biztosítja.</p>
							<p class="section-paragraph mb-0">A szolgáltatás csak a telefonszámlát fizető, felelős személy beleegyezésével használható.</p>
							<p class="section-paragraph mb-0">Hiba esetén az ügyfélszolgálat elérhető: +36-30-932-5843 (Nyitvatartás: Hétfő-Péntek: 9:00 - 16:30-ig), e-mail: info@pannora.hu"</p>-->
                        <!--</div>-->
						<div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
									<iframe style="background:none;" frameborder="0" scrolling="yes" src="https://webadmin.clans.hu/tamogat/index.php?code=133657" width="310" height="430"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
<br></br>
    <div class="col-md-9 col-md-offset-2">
        <form role="form" method="post" enctype="multipart/form-data" netlify>

            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="subject">Tárgy:</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Tárgy" value="" maxlength="50">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="name">Üzenet:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Üzenet" maxlength="6000" rows="4"></textarea>
                </div>
            </div>
             <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendmail" class="btn">Elküld</button>
                </div>
            </div>
        </form>
	<?php 
		if(isset($_POST['sendmail'])) {
			require 'PHPMailerAutoload.php';
			require 'credential.php';
			$mail = new PHPMailer;
			//$mail->SMTPDebug = 4;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = EMAIL;
			$mail->Password = PASS;
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;
			$mail->setFrom(EMAIL, 'TESZT');
			$mail->addAddress(EMAIL);
			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			//for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				//$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			//}
			$mail->isHTML(true);
			$mail->Subject = $_POST['subject'];
			$mail->Body    = $_POST['message'];
			$mail->AltBody = $_POST['message'];
			$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);
			if(!$mail->send()) {
			    echo 'Az Email nem lett elküldve !.';
			    echo 'Mailer Hiba: ' . $mail->ErrorInfo;
			} else {
			    echo 'Az Email sikeresen ellett küldve !';
			}
		}
	 ?>
	</div>
        </main>
		<br></br>
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
