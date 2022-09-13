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




        if(isset($_POST['guncelle']))
        {
            $sql="UPDATE kullanicilar SET adsoyad= ?,kullanici= ?,sifre= ? ,tarih= ? WHERE id= ?";
            
            $dizi=[
                $_POST['adsoyad'],
                $_POST['kullanici'],
                $_POST['sifre'],
                $_POST['tarih'],
                $_POST['id']

            ];
            

            $sorgu=$db->prepare($sql);
            $sorgu->execute($dizi);
            header("Location:http://localhost/yonetimpaneli/index.php?sayfa=yliste");
            if($sorgu)
            {
                echo "güncelleme başarılı";
            }
            else
            {
                echo "güncelleme başarısız";
            }
            

        }
$sql="SELECT * FROM kullanicilar WHERE id= ?";
$sorgu=$db->prepare($sql);
$sorgu->execute([$_GET['id']]);
$satir=$sorgu->fetch(PDO::FETCH_ASSOC);





?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Veritabanı İşlemleri</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<?php

  
?>
<div class="container">
<div class="col-md-6">
<form action="http://localhost/yonetimpaneli/index.php?sayfa=yduzenle" method="post">
    
    <table class="table">
       <input type="hidden" name="id" value="<?=$satir['id']?>">
        
        
        <tr>
            <td>Ad Soyad</td>
            <td> <input type="text" name="adsoyad" class="form-control"  value="<?=$satir['adsoyad']?>"></td>
        </tr>

        <tr>
            <td>Kullanıcı Ad</td>
            <td><input type="text" name="kullanici" class="form-control" value="<?=$satir['kullanici']?>" ></td>
        </tr>
        <tr>
            <td> Şifre</td>
            <td><input type="text" name="sifre" class="form-control" value="<?=$satir['sifre']?>" ></td>
        </tr>
        <tr>
            <td>Son İşlem Tarihi</td>
            <td><input type="date" name="tarih" class="form-control" value="<?=$satir['tarih']?>" ></td>
        </tr>
        

        

        <tr>
            <td></td>
            <td><button class="btn btn-primary" type="submit" name="guncelle">Güncelle</button>
        </tr>

    </table>


</form>

<?php


?>

<!-- Öncelikle HTML düzenimizi oluşturuyoruz. Daha sonra girdiğimiz verileri veritabanına eklemesi için PHP kodlarına geçiyoruz. -->





