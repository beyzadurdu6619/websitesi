<meta charset="utf-8">
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

    if (isset($_POST['guncelle'])) { // Sayfada P$_POST$_POST olup olmadığını kontrol ediyoruz.

        // Sayfa yenilendikten sonra P$_POST$_POST edilen değerleri değişkenlere atıyoruz
        $sql = "UPDATE `musteribilgileri` 
        SET `aslisans` = ? ,
        `plisans` = ? ,
        `baslangict` = ?,
        `bitist` = ?,
        `firmaAd` = ?,
            `bayikodu` = ?,
            `il` = ?,
            `ilce` = ?,
            `adres` = ?,
                `yetkiliadsoyad` = ?,
                `scriptad` = ?,
                `scriptno` = ?
                WHERE `musteribilgileri`.`id` = ?";
        
        $dizi=[
            
            $_POST['aslisans'],
            $_POST['plisans'],
            $_POST['baslangict'],
            $_POST['bitist'],
            $_POST['firmaAd'],
            $_POST['bayikodu'],
            $_POST['il'],
            $_POST['ilce'],
            $_POST['adres'],
            $_POST['yetkiliadsoyad'],
            $_POST['scriptad'],
            $_POST['scriptno'],
            $_POST['id'] 


        ];
        $sorgu=$db->prepare($sql);
        $sorgu->execute($dizi);
        header("Location:http://localhost/yonetimpaneli/index.php?sayfa=mkayit");
    }
    else
    {
        
    }
$sql="SELECT * FROM musteribilgileri WHERE id = ?";
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
<div class="container">
<div class="col-md-6">
<form action="http://localhost/yonetimpaneli/index.php?sayfa=mguncelle" method="POST">
    
    <table class="table">
    <input type="hidden" name="id" value="<?=$satir['id']?>">
        
    
        
        
<tr>
    <td>As Lisans No</td>
    <td><input type="text" name="aslisans" class="form-control" value="<?=$satir['aslisans']?>"></td>
</tr>

<tr>
    <td>Planet Lisans No</td>
    <td><input type="text" name="plisans" class="form-control" value="<?=$satir['aslisans']?>"></td>
</tr>

<tr>
    <td>Lisans Başlangıç Tarihi</td>
    <td><input type="date" name="baslangict" class="form-control" value="<?=$satir['baslangict']?>" ></td>
</tr>
<tr>
    <td>Lisans Bitiş Tarihi</td>
    <td><input type="date" name="bitist" class="form-control" value="<?=$satir['bitist']?>"></td>
</tr>
<tr>
    <td>Firma Ad</td>
    <td><input type="text" name="firmaAd" class="form-control" value="<?=$satir['firmaAd']?>"></td>
</tr>

<tr>
    <td>Bayi Kodu</td>
    <td><input type="text" name="bayikodu" class="form-control" value="<?=$satir['bayikodu']?>" ></td>
</tr>
<tr>
    <td>İl</td>
    <td><input type="text" name="il" class="form-control" value="<?=$satir['il']?>" ></td>
</tr>
<tr>
    <td>İlçe</td>
    <td><input type="text" name="ilce" class="form-control" value="<?=$satir['ilce']?>"></td>
</tr>

<tr>
    <td>Adres</td>
    <td><input type="text" name="adres" class="form-control" value="<?=$satir['adres']?>"></td>
</tr>
<tr>
    <td>Yetkili Adı Soyadı</td>
    <td><input type="text" name="yetkiliadsoyad" class="form-control" value="<?=$satir['yetkiliadsoyad']?>" ></td>
</tr>
<tr>
    <td>Script Adı</td>
    <td><input type="text" name="scriptad" class="form-control" value="<?=$satir['scriptad']?>"></td>
</tr>

<tr>
    <td>Script Kodu</td>
    <td><input type="text" name="scriptno" class="form-control" value="<?=$satir['scriptno']?>"></td>
</tr>


<tr>
    <td></td>
    <td><button class="btn btn-primary" name="guncelle"  type="submit" >Güncelle</button>
</tr>


    

    </table>

</form>

<!-- Öncelikle HTML düzenimizi oluşturuyoruz. Daha sonra girdiğimiz verileri veritabanına eklemesi için PHP kodlarına geçiyoruz. -->

</div>



