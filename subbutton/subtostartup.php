<? ob_start(); ?>

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
	<link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta http-equiv="refresh" content="500">
    <meta name="author" content="Kaan Sismanoglu">
	<meta name="description" content="StartupMEF Girişimcilik ve İnovasyon Kulübü hakkında bilgilerden haberdar olmak istiyorsan formu doldurarak aramıza katılabilirsin.">
	<title>StartupMEF Abone Ol</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="subtostartup.css" />
    <script type="text/javascript" src="assets/js/sweetalert2.all.min.js"></script>

</head>

<body>

    <div class="subscribe">
        <h2 class="subscribe__title">Bizimle iletişime geç!</h2>
        <p class="subscribe__copy">Güncel haberlerden haberdar olmak için abone ol. Gelecekte iptal etmek istersen iletişim formundan bize ulaşarak iptal edebilirsin.</p>
        <div class="form">
            <form method="post" action="subtostartup.php">
            <input name="email" type="email" class="form__email" placeholder="Enter your email address" />
            <button class="form__button">Gönder</button>
            </form>
        </div>
        <div class="notice">
            <input type="checkbox">
            <span class="notice__copy">E-posta adresimin saklanmasını ve aylık bülten almak için kullanılmasını kabul ediyorum.</span>
        </div>
    </div>
</body>

</html>

<?php

include("subhost.php");

if (isset($_POST["email"])) {

    $email = $_POST["email"];

    $ekle = "INSERT INTO abonelist (Mail) VALUES ('" . $email . "')";

    if ($baglan->query($ekle) === TRUE) {
        echo '<script>Swal.fire("Başarılı", "Kaydınız bize ulaştı", "success"); </script>';
        header("Refresh: 2; url= /index.php");
    } else {
        echo '<script>Swal.fire("Hata", "Tekrardan Formu Kontrol ediniz", "error"); </script>';
    }
}

?>

<? ob_flush(); ?>