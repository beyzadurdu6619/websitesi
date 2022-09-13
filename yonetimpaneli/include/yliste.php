<meta charset="utf-8">
<?php 
require 'ayar.php';


if(isset($_GET['sil']))
{
    $sqlsi="DELETE FROM kullanicilar WHERE id=$kayit_id";
    $sorgusil=$db->prepare($sqlsil);
    $sorgusil->execute(array($_GET['sil']));
    header("location:http://localhost/yonetimpaneli/index.php?sayfa=yliste");
}

$sql="SELECT * FROM kullanicilar";
$sorgu=$db->prepare($sql);
$sorgu->execute();






?>

<?php
@$baglanti = new mysqli('localhost', 'root', '', 'yonetimpaneli'); // Veritabanı bağlantımızı yapıyoruz.
if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
{
    echo mysqli_connect_error();
    exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
}

$baglanti->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.

?>

    <STYLE TYPE="TEXT/CSS">
			table {border: 1px solid black;
                
                margin-top: 1px;
      margin-bottom: 100px;

      margin-left: 250px;
      margin-right: 200px;}
            
		</STYLE>



</div>
<!-- ############################################################## -->

<!-- Veritabanına eklenmiş verileri sıralamak için önce üst kısmı hazırlayalım. -->
<div class="col-md-7">
<table class="table" id="tablo">
    
    <tr>
        <th> ID</th>
        <th>Ad Soyad</th>
        <th>Kullanıcı Adı</th>
        <th>Şifre</th>
        <th>Son İşlem Tarihi</th>
        <th><a href="include/stsil.php" class="btn btn-success btn-block" ;">Tümünü Sil</a></th>
        <th></th>
    </tr>

<!-- Şimdi ise verileri sıralayarak çekmek için PHP kodlamamıza geçiyoruz. -->

<?php 

$sorgu = $baglanti->query("SELECT * FROM kullanicilar"); // Makale tablosundaki tüm verileri çekiyoruz.

while ($sonuc = $sorgu->fetch_assoc()) { 

$id = $sonuc['id']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
$adsoyad = $sonuc['adsoyad'];
$kullanici = $sonuc['kullanici'];
$sifre = $sonuc['sifre'];
$tarih = $sonuc['tarih'];

// While döngüsü ile verileri sıralayacağız. Burada PHP tagını kapatarak tırnaklarla uğraşmadan tekrarlatabiliriz. 
?>
    
    <tr>
        
        <td><?php echo $id; // Yukarıda tanıttığımız gibi alanları dolduruyoruz. ?></td>
        <td><?php echo $adsoyad; ?></td>
        <td><?php echo $kullanici; ?></td>
        <td><?php echo $sifre; ?></td>
        <td><?php echo $tarih; ?></td>
        <td><a href="include/yduzenle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
        <td><a href="include/ysil.php?id=<?php echo $id; ?>" class="btn btn-danger" name="sil">Sil</a></td>
    </tr>

<?php 
} 
// Tekrarlanacak kısım bittikten sonra PHP tagının içinde while döngüsünü süslü parantezi kapatarak sonlandırıyoruz. 



?>

</table>
</div>
</div>
</body>
</html>