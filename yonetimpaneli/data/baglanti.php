<?php
include_once(SINIF."vt.php");
$VT=new VT();
$ayarlar=$VT->verigetir("ayarlar","WHERE ID=?",array(1),"ORDER BY ID ASC",1);
if($ayarlar != false)
{
    $sitebaslik=$ayarlar[0]["baslik"];
    $siteanahtar=$ayarlar[0]["anahtar"];
    $siteaciklama=$ayarlar[0]["aciklama"];
    $siteurl=$ayarlar[0]["url"];
}


?>