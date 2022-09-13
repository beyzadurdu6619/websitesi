
<?php




@$baglanti = new mysqli('localhost', 'root', '', 'yonetimpaneli'); // Veritabanı bağlantımızı yapıyoruz.
    if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
    {
        
        exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
    }

$baglanti->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.

if(isset($_GET['sil']))
{
    $sqlsi="DELETE FROM musteribilgileri WHERE `musteribilgileri`.`id` = ?";
    $sorgusil=$db->prepare($sqlsil);
    $sorgusil->execute(array($_GET['sil']));
    header("location:http://localhost/yonetimpaneli/index.php?sayfa=mkayit");
}
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
<table class="table">
    
    <tr>
        <th>ID</th>
        <th>As Lisans No</th>
        <th>Planet Lisans No</th>
        <th>Lisans Başlangıç Tarihi</th>
        <th>Lisans Bitiş Tarihi</th>
        <th>Firma Ad</th>
        <th>Satış Bayi Kodu</th>
        <th>İl</th>
        <th>İlçe</th>
        <th>Adres</th>
        <th>Yetkili Ad Soyad</th>
        <th>Script Adı</th>
        <th>Script No</th>
        <th><a href="include/mtsil.php" class="btn btn-success btn-block" ;">Tümünü Sil</a>
         
    </th>
        
        

    </tr>

<!-- Şimdi ise verileri sıralayarak çekmek için PHP kodlamamıza geçiyoruz. -->

<?php 

$sorgu = $baglanti->query("SELECT * FROM musteribilgileri"); // Makale tablosundaki tüm verileri çekiyoruz.

while ($sonuc = $sorgu->fetch_assoc()) { 

  $id = $sonuc['id']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
  $aslisans = $sonuc['aslisans'];
  $pslisans = $sonuc['plisans'];;
  $baslangict = $sonuc['baslangict'];
  $bitist = $sonuc['bitist'];
  $firmaAd = $sonuc['firmaAd']; 
  $bayikodu = $sonuc['bayikodu'];
  $il = $sonuc['il'];
  $ilce = $sonuc['ilce'];
  $adres = $sonuc['adres']; 
  $yetkiliadsoyad = $sonuc['yetkiliadsoyad'];
  $scriptad = $sonuc['scriptad']; 
  $scriptno = $sonuc['scriptno']; 
    

// While döngüsü ile verileri sıralayacağız. Burada PHP tagını kapatarak tırnaklarla uğraşmadan tekrarlatabiliriz. 
?>
    
    <tr>
        
        <td><?php echo $id; // Yukarıda tanıttığımız gibi alanları dolduruyoruz. ?></td>
        <td><?php echo $aslisans; ?></td>
        <td><?php echo $pslisans; ?></td>
        <td><?php echo $baslangict; ?></td>
        <td><?php echo $bitist; ?></td>
        <td><?php echo $firmaAd ?></td>
        <td><?php echo $bayikodu; ?></td>
        <td><?php echo $il; ?></td>
        <td><?php echo $ilce; ?></td>
        <td><?php echo $adres; ?></td>
        <td><?php echo $yetkiliadsoyad; ?></td>
        <td><?php echo $scriptad; ?></td>
        <td><?php echo $scriptno; ?></td>
        <td><a href=include/mguncelle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
        <td><a href="include/msil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
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
