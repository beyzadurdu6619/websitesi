<?php 
if(isset($_GET['id']))
{
    include "ayar.php";


    $sqlsil="DELETE FROM sirketbilgileri WHERE `sirketbilgileri`.`id` = ?";
    $sorgusil=$db->prepare($sqlsil);
    $sorgusil->execute(array($_GET['id']));
    if($sorgusil)
    {
        header("location:http://localhost/yonetimpaneli/index.php?sayfa=sirketbilgileri");
        echo '<div class="alert alert-success" role="alert">
        Kayıt Başarılı Bir Şekilde Gerçekleşti.
    </div>';
    }
    else
    {
        echo '<div class="alert alert-danger" role="alert">
        Kayıt Eklenirken Bir Problem Oluştu.
    </div>';

    }

    
    


$sql="SELECT * FROM sirketbilgileri";
$sorgu=$db->prepare($sql);
$sorgu->execute();




}




?>