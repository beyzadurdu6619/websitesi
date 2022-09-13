<?php 
try{
    $db=new PDO("mysql:host=localhost;dbname=yonetimpaneli;charset=utf8","root","");
    $db->query("SET CHARACTER SET UTF8");
    $db->query("SET NAMES UTF8");
}
catch(PDOException $hata)
{
    print $hata->getMessage();
}



?>