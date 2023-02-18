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
		<title>StartupMEF Sponsorluk Ekibi Kayıt Form</title>
		<meta charset="utf-8" />        
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
        <script type="text/javascript" src="Etkinlik/js/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="Etkinlik/css/formstyle.css"/>

	</head>
<body>
            <!-- multistep form -->
            <form id="msform" method="post" action="sponsorlukekibi.php">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">ADIM</li>
                <li>ADIM</li>
                <li>ADIM</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Sponsorluk Ekip Üyesi Kayıt</h2>
                <h3 class="fs-subtitle">1.Adım</h3>
                <input type="text" name="name" placeholder="Adınız" required/>
                <input type="text" name="surname" placeholder="Soyadınız" required />

                <SELECT type="text" NAME="class" required>
                    <OPTION value="" disabled selected>Sınıfınız?</option>
                    <OPTION> Hazırlık
                    <OPTION> 1.Sınıf
                    <OPTION> 2.Sınıf
                    <OPTION> 3.Sınıf
                    <OPTION> 4.Sınıf
                </SELECT>

                <input type="button" name="next" class="next action-button" value="Sonraki" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Sponsorluk Ekip Üyesi Kayıt</h2>
                <h3 class="fs-subtitle">2.Adım</h3>
                <input type="text" name="email" placeholder="Mail Adresiniz" required />
                <input type="text" name="telefon" placeholder="Telefon Numaranız" required/>

                <SELECT type="text" name="squad" required>
                    <OPTION value="" disabled selected>StartupMEF Squad Whatsapp grubunda var mısın?</option>
                    <OPTION> Evet
                    <OPTION> Hayır, katılmak istiyorum
                </SELECT>
                <textarea type="text" style="resize: both;" name="deneyim" placeholder="Daha önce kulüp üyeliği / yöneticiliği deneyimin oldu mu?" required></textarea>
                <input type="button" name="previous" class="previous action-button" value="Önceki" />
                <input type="button" name="next" class="next action-button" value="Sonraki" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Sponsorluk Ekip Üyesi Kayıt</h2>
                <h3 class="fs-subtitle">3.Adım</h3>
                <textarea type="text" name="kulup" placeholder="Deneyimin olduysa hangi kulüpte yer aldın ve görevin neydi? Bu deneyim sana neler kattı?(Olmadıysa 'olmadı' yazabilirsin.)" required></textarea>
                <textarea type="text" name="beklenti" placeholder="StartupMEF Girişimcilik ve İnovasyon Kulübünden beklentin neler? Neden kulübe katılmak istiyorsun?" required></textarea>
                <textarea type="text" name="isbirlik" placeholder="Girişimcilik alanında bir etkinlik düzenliyor olsanız hangi firmalarla iş birliği yapmak isterdin?" required></textarea>
                <textarea type="text" name="heyecan" placeholder="Seni en çok heyecanlandıran, beğendiğin ve iş birliği kurmak isteyeceğin girişimler nelerdir? Sebeplerini kısaca açıklar mısın?" required></textarea>
                <textarea type="text" name="fintech" placeholder="300 kişilik Fintech temalı bir zirve organize ediyor olsan kullanmak isteyeceğin 3 mekan nedir?" required></textarea>
                <textarea type="text" name="motivasyon" placeholder="Sponsorluk Ekibinde yer almak isteme motivasyonunuzu birkaç cümle ile açıklayabilir misin?" required></textarea>
                <textarea type="text" name="eklemek" placeholder="Eklemek istediğin bir şey var mı?" required></textarea>
            

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

if(isset($_POST["name"], $_POST["surname"], $_POST["class"], $_POST["email"], $_POST["telefon"], $_POST["squad"], $_POST["deneyim"], $_POST["kulup"], $_POST["beklenti"], $_POST["isbirlik"], $_POST["heyecan"], $_POST["fintech"], $_POST["motivasyon"], $_POST["eklemek"])){

    $ad = $_POST["name"];
    $soyad = $_POST["surname"];
    $sınıf = $_POST["class"];
    $email = $_POST["email"];
    $tel = $_POST["telefon"];
    $squad = $_POST["squad"];
    $deneyim = $_POST["deneyim"];
    $kulup = $_POST["kulup"];
    $beklenti = $_POST["beklenti"];
    $isbirlik = $_POST["isbirlik"];
    $heyecan = $_POST["heyecan"];
    $fintech = $_POST["fintech"];
    $motivasyon = $_POST["motivasyon"];
    $eklemek = $_POST["eklemek"];


    $ekle = "INSERT INTO Sponsorluk (Adin, Soyadin, Sinifin, Mail_Adresin, Telefon_Numaran, Squad, Daha_once_deneyim, Hangi_kulup, Beklenti, Isbirlik, Heyecan, Fintech, Ekibe_katilma_motivasyon, Eklemek) VALUES ('".addslashes($ad)."','".addslashes($soyad)."','".addslashes($sınıf)."','".addslashes($email)."','".addslashes($tel)."','".addslashes($squad)."','".addslashes($deneyim)."','".addslashes($kulup)."','".addslashes($beklenti)."','".addslashes($isbirlik)."','".addslashes($heyecan)."','".addslashes($fintech)."','".addslashes($motivasyon)."','".addslashes($eklemek)."')";

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
