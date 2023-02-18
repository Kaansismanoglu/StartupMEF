<?php

$vt_sunucu="localhost";
$vt_kullanici="kaansismanoglu";
$vt_sifre="startupciyiz";
$vt_adi="iletisimform";

$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi );
mysqli_set_charset($baglan,"utf8");

if(!$baglan){
    die("Veritabanı bağlantı işlemi başarısız.".mysqli_connect_error());

}


 ?>


