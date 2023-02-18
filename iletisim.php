<? ob_start(); ?>
<?php

// //require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

// use PHPMailer\PHPMailer\PHPMailer;

// $mail = new PHPMailer();

// $mail->Host = 'smtpout.secureserver.net';
// $mail->Username = 'info@startupmef.club';
// $mail->Password = 'startupciyiz';
// $mail->Port = 465;
// $mail->SMTPSecure = 'ssl';

// $mail->isSMTP();
// $mail->SMTPAuth = true;

// $mail->isHTML(true);

// $mail->CharSet = "UTF-8";

// $mail->setLanguage('tr', 'language/');

// $mail->setFrom('info@startupmef.club', 'StartupMEF Destek');

// $mail->addAddress('startupmefit@gmail.com', 'StartupMEF IT');

// if (isset($_POST["name"], $_POST["telefon"], $_POST["email"], $_POST["konu"], $_POST["message"])) {

//     $mail->Subject = $_POST["konu"] . ' hakkında ' . $_POST["name"] . ' kişisinden mesajınız var.';
//     $mail->Body =
//         '
// 	<html>
// 		<head>
// 		</head>
// 		<body>
// 			<h2>Konu: ' . $_POST["konu"] . '</h2>
//             <p>Ad ve Soyad : ' . $_POST["name"] . '</p>
//             <p>Telefon: ' . $_POST["telefon"] . '</p>
//             <p>Mail: ' . $_POST["email"] . '</p>
//             <br>
// 			<p>Mesaj: ' . $_POST["message"] . '</p>
// 		</body>
// 	</html>
// ';



//     $mail_gonder = $mail->send(); //Maili gönder ve sonucu değişkene aktar

//     if ($mail_gonder) { //Mail gönderildi mi
//         echo 'Mail başarıyla gönderildi';
//         header("Refresh: 1; url= arasayfa/arasayfa1.php");
//     } else {
//         echo 'Mail gönderilemedi. Mail hata mesajı: ' . $mail->ErrorInfo; //Mail gönderilemezse sebebini belirten hata mesajını ekrana yazdır
//     }
// } else {
//     echo '';
//     $mail->SMTPDebug  = 1;
// }

?>

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
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>StartupMEF İletişim</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1WJZGJQG0W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-1WJZGJQG0W');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1WJZGJQG0W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-1WJZGJQG0W');
    </script>
    <meta name="author" content="Kaan Sismanoglu">
    <meta name="description" content="StartupMEF Girişimcilik ve İnovasyon Kulübü, iletişim bilgilerimiz ve iletişim formumuz. Sormak istediğiniz soruları bizimle iletişime geçerek öğrenebilirsiniz. ">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel='stylesheet' href='assets/css/custombootstrap.css'>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/iletisim.css">
    <link rel="stylesheet" href="assets/css/iletisimmain.css" />
    <script type="text/javascript" src="assets/js/sweetalert2.all.min.js"></script>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1><img class="imglogo" src="images/startupmeflogo1.png"></h1>
            <nav id="nav">
                <ul>
                    <li class="special">
                        <a href="#menu" class="menuToggle"><span>MENU</span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="index.php">ANA SAYFA</a></li>
                                <li><a href="hakkimizda.php">HAKKIMIZDA</a></li>
                                <li><a href="sponsorlar.php">SPONSORLARIMIZ</a></li>
                                <li><a href="etkinliklerimiz.php">ETKİNLİKLERİMİZ</a></li>
                                <li><a href="iceriklerimiz.php">İÇERİKLERİMİZ</a></li>
                                <li><a href="kayitformlari.php">KAYIT FORMLARI</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <article id="main">
            <header>
                <h2><b>İLETİŞİM</b></h2>
                <p>STARTUPMEF GİRİŞİMCİLİK VE İNOVASYON KULÜBÜ</p>
            </header>
            <section class="wrapper style5">
                <div class="inner">

                    <section>
                        <h2>İLETİŞİM FORMU</h2>
                        <p>Etkinlik hakkında soru sormak ya da kulübümüz hakkında bilgi almak <br> istiyorsan aşağıdaki
                            formu doldurarak bize ulaşabilirsin.</p>
                        <hr />
                    </section>
                    <section>
                        <h4>Form</h4>
                        <form method="post" action="iletisim.php">
                            <div class="row gtr-uniform">
                                <div class="col-6 col-12-xsmall">
                                    <input type="text" name="name" id="demo-name" value="" placeholder="Ad ve Soyad" required />
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <input type="text" name="telefon" id="demo-number" value="" placeholder="Telefon Numaran" required />
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <input type="email" name="email" id="demo-email" value="" placeholder="Email" required />
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <input type="text" name="konu" id="demo-content" value="" placeholder="Konu" required />
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="demo-message" placeholder="" rows="8" required></textarea>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" name="islem" value="GÖNDER" class="primary" /></li>
                                        <li><input type="reset" value="SIFIRLA" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </section>
            </section>
        </article>
        <section>
            <div class="main">
                <div class="tableback">
                    <div class="back2">
                        <div>
                            <ul>
                                <li>
                                    <h3>İLETİŞİM BİLGİLERİ</h3>
                                    <hr>
                                </li>
                                <li>
                                    <p><i class="fa fa-map-marker" aria-hidden="true" style="margin-left:2px;"> </i> Adres: Huzur Mahallesi, Maslak Ayazağa Caddesi No:4, Sarıyer/İstanbul</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i>
                                        Teknik Destek İçin E-Posta: </p><a style="text-decoration: none;" href="mailto:startupmefit@gmail.com" target="_blank">startupmefit@gmail.com</a>
                                </li>
                                <li>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i>
                                        Sponsorluk İçin E-Posta: </p><a style="text-decoration: none;" href="mailto:startup@clubs.mef.edu.tr" target="_blank">startup@clubs.mef.edu.tr</a>
                                </li>
                                <li class="logoloca">
                                    <img src="images/startupmeflogo1.png" alt="startupmeflogo" style="max-width:300px;">
                                </li>
                            </ul>
                        </div>
                        <div style="overflow: hidden;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3006.175936797045!2d29.006407715339233!3d41.108848521179034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab5cfa9c562b1%3A0xd94f6327566e85d6!2sMEF%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1660999759265!5m2!1str!2str" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->

        <div id="page-wrapper">
            <footer id="footer">
                <ul class="icons">
                    <li><a href="https://twitter.com/startupmefcom" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.youtube.com/channel/UCPlrrLU0OwT6lzH4rNtp6Ng/featured" class="icon brands fa-youtube "><span class="label">Youtube</span></a></li>
                    <li><a href="https://www.instagram.com/startupmef/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="https://www.linkedin.com/company/startupmef/mycompany/" class="icon brands fa-linkedin"><span class="label">Linked in</span></a></li>
                    <li><a href="https://open.spotify.com/show/0wzMf8uaFyHyAfIOhtXZrt?si=ecbb85b67f6d42cc" class="icon brands fa-spotify"><span class="label">Spotify</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; StartupMEF</li>
                    </li>
                </ul>
            </footer>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>

<?php

include("iletisimhost/iletisimhost.php");

if (isset($_POST["name"], $_POST["email"], $_POST["telefon"], $_POST["konu"], $_POST["message"])) {

    $ad = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["telefon"];
    $content = $_POST["konu"];
    $message = $_POST["message"];



    $ekle = "INSERT INTO iletisim (AdveSoyad, Mail, Telefon, Konu, Mesaj) VALUES ('" . $ad . "','" . $email . "','" . $tel . "','" . $content . "','" . $message . "')";

    if ($baglan->query($ekle) === TRUE) {
        echo '<script>Swal.fire("Başarılı", "Kaydınız bize ulaştı", "success"); </script>';
        header("Refresh: 2; url= iletisim.php");
    } else {
        echo '<script>Swal.fire("Hata", "Tekrardan Formu Kontrol ediniz", "error"); </script>';
    }
}

?>

<? ob_flush(); ?>