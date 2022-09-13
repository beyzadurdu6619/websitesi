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
            $sql="UPDATE sirketbilgileri SET lisansno= ?,sirketkodu= ?,sirketadi= ? WHERE id= ?";
            
            $dizi=[
                $_POST['lisansno'],
                $_POST['sirketkodu'],
                $_POST['sirketadi'],
                $_POST['id']

            ];
            

            $sorgu=$db->prepare($sql);
            $sorgu->execute($dizi);
            header("Location:http://localhost/yonetimpaneli/index.php?sayfa=sirketbilgileri");
            if($sorgu)
            {
                echo "güncelleme başarılı";
            }
            else
            {
                echo "güncelleme başarısız";
            }
            

        }
$sql="SELECT * FROM sirketbilgileri WHERE id= ?";
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
<form action="http://localhost/yonetimpaneli/index.php?sayfa=ysirketekle" method="post">
    
    <table class="table">
        <input type="hidden" name="id" value="<?=$satir['id']?>">
        
        <tr>
            <td>Lisans No</td>
            <td> <input type="text" name="lisansno" class="form-control"  value="<?=$satir['lisansno']?>"></td>
        </tr>

        <tr>
            <td>Şirket Kodu</td>
            <td><input type="text" name="sirketkodu" class="form-control" value="<?=$satir['sirketkodu']?>" ></td>
        </tr>
        <tr>
            <td>Şirket Adı</td>
            <td><input type="text" name="sirketadi" class="form-control" value="<?=$satir['sirketadi']?>" ></td>
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





