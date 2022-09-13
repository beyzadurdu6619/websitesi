
<?php 
@$baglanti = new mysqli('localhost', 'root', '', 'yonetimpaneli'); // Veritabanı bağlantımızı yapıyoruz.
if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
{
    
    exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
}

$baglanti->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.



if(isset($_POST['guncelle']))
{
    
}
// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
$id=$_GET['id'];
$query=$baglanti->$mysqlquery("SELECT * FROM sirketbilgileri WHERE id=$id");
$bilgi=$query->fetchObject();

if($_POST)
{
    $lisansno = $_POST["lisansno"]; 
    $sirketkodu = $_POST["sirketkodu"];
    $sirketadi = $_POST["sirketadi"];
    $update=$baglanti->query("UPDATE sirketbilgileri SET lisansno='$lisansno',sirketkodu='$sirketkodu',sirketadi='$sirketadi' WHERE id=$id");
    if($update)
    {
        echo "BAŞARIYLA GÜNCELLENDİ";
    }
}



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
<form action="" method="post">
    
    <table class="table">
        
        <tr>
            <td>Lisans No</td>
            <td> <input type="text" name="lisansno" class="form-control"  value="<?php echo $bilgi->lisansno ?>"></td>
        </tr>

        <tr>
            <td>Şirket Kodu</td>
            <td><input type="text" name="sirketkodu" class="form-control" value="<?php echo $bilgi->sirketkodu ?>" ></td>
        </tr>
        <tr>
            <td>Şirket Adı</td>
            <td><input type="text" name="sirketadi" class="form-control" value="<?php echo $bilgi->sirketadi ?>" ></td>
        </tr>

        

        <tr>
            <td></td>
            <td><input class="btn btn-primary" type="submit" value="Güncelle" name="guncelle"></td>
        </tr>

    </table>


</form>

<?php


?>

<!-- Öncelikle HTML düzenimizi oluşturuyoruz. Daha sonra girdiğimiz verileri veritabanına eklemesi için PHP kodlarına geçiyoruz. -->





