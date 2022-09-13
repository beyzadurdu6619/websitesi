<?php

$host="localhost";
$kullaniciadi="root";
$parola="";
$vt=""; //veri tabanı

$baglanti= mysqli_connect($host,$kullaniciadi,$parola,$vt);
mysqli_set_charset($baglanti,"UTF8");

if(!$baglanti)
{
    echo "baglanti basarısız".baglanti->$error();
}
if(!$baglanti)
{
    echo "baglanti basarili";
}




?>