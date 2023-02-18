<? ob_start(); ?> 
<!DOCTYPE HTML>
<html>
	<head>
        <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
        <link rel="manifest" href="images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
		<title>StartupMEF Üye Kayıt Form</title>
		<meta charset="utf-8" />        
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
        <script type="text/javascript" src="Etkinlik/js/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="Etkinlik/css/formstyle.css"/>

	</head>
<body>
            <!-- multistep form -->
            <form id="msform" method="post" action="uyekayitform.php">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">ADIM</li>
                <li>ADIM</li>
                <li>ADIM</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Üye Kayıt</h2>
                <h3 class="fs-subtitle">1.Adım</h3>
                <input type="text" name="name" placeholder="Adınız" required/>
                <input type="text" name="surname" placeholder="Soyadınız" required />
                <input type="text" name="email" placeholder="Mail Adresiniz" required />
                <input type="button" name="next" class="next action-button" value="Sonraki" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Üye Kayıt</h2>
                <h3 class="fs-subtitle">2.Adım</h3>
                <input type="text" name="telefon" placeholder="Telefon Numaranız" required/>
                <input type="text" name="school" placeholder="Okulunuz" required/>
                <input type="text" name="departmant" placeholder="Bölümünüz (Lise Öğrencileri bu soruyu atlayabilir)" />
                <SELECT type="text" NAME="class" >
                    <OPTION value="" disabled selected>Sınıfınız (Lise Öğrencileri bu soruyu atlayabilir)</option>
                    <OPTION> Hazırlık
                    <OPTION> 1.Sınıf
                    <OPTION> 2.Sınıf
                    <OPTION> 3.Sınıf
                    <OPTION> 4.Sınıf
                </SELECT>
                <input type="button" name="previous" class="previous action-button" value="Önceki" />
                <input type="button" name="next" class="next action-button" value="Sonraki" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Üye Kayıt</h2>
                <h3 class="fs-subtitle">3.Adım</h3>
                <SELECT type="text" NAME="heard" required >
                    <OPTION SELECTED id="colorfortitle">Bizi nereden duydunuz?
                    <OPTION> Instagram
                    <OPTION> Mail
                    <OPTION> Twitter
                    <OPTION> Linkedin
                    <OPTION> Discord
                    <OPTION> Whatsapp
                    <OPTION> Diğer
                </SELECT>
                <SELECT type="chosing" name="squad" required >
                    <OPTION SELECTED> StartupMEF Squad'a katılmak ister misin?
                    <OPTION> Evet
                    <OPTION> Hayır
                </SELECT>
                <input type="checkbox" name="KVKK" required>
                <label href="" for="KVKK ONAYLANDI"><a>StartupMEF'in <a href="metin/StartupMEF Aydinlatma Metni.html" target="blank">Aydınlatma Metni'ni okudum onaylıyorum.</a></a></label><br>	
                <input type="button" name="previous" class="previous action-button" value="Önceki" />
                <input style="background-color: green ; color:white;" type="submit" class="primary" value="Gönder" />
                                
            </fieldset>
            </form>

            <script src='Etkinlik/js/js1.js'></script>
            <script src='Etkinlik/js/js2.js'></script>
            <script type="text/javascript" src="Etkinlik_Kayit_Sayfalari/Etkinlik/js/sweetalert2.all.min.js"></script>
            <script src="Etkinlik/js/index.js"></script>

</body>

</html>


<?php

include("Etkinlik/formhosting.php");

if(isset($_POST["name"], $_POST["surname"],$_POST["email"], $_POST["telefon"], $_POST["school"],$_POST["squad"],$_POST["heard"])){

    $ad = $_POST["name"];
    $soyad = $_POST["surname"];
    $email = $_POST["email"];
    $tel = $_POST["telefon"];
    $okul = $_POST["school"];
    $bölüm = $_POST["departmant"];
    $sınıf = $_POST["class"];
    $katılım = $_POST["squad"];
    $duyduğuyer = $_POST["heard"];



    $ekle = "INSERT INTO UyeAlimList (Ad, Soyad, Mail, Telefon, Okul, Bolum, Sinif, Squad, Duydugu_yer) VALUES ('".$ad."','".$soyad."','".$email."','".$tel."','".$okul."','".$bölüm."','".$sınıf."','".$katılım."','".$duyduğuyer."')";

    if($baglan->query($ekle)===TRUE){
        echo '<script>Swal.fire("Başarılı", "Kaydınız bize ulaştı", "success"); </script>';
        header("Refresh: 3; url= /kayitformlari.php");

        
    }
    else{
        echo '<script>Swal.fire("Hata", "Tekrardan Formu Kontrol ediniz", "error"); </script>';
    }
}

?>


<? ob_flush(); ?> 
