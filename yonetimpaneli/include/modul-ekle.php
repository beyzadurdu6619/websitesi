<?php

@$baglanti = new mysqli('localhost', 'root', '', 'yonetimpaneli'); // Veritabanı bağlantımızı yapıyoruz.
    if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
    {
        
        exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
    }

$baglanti->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.

?>

<?php 

if (isset($_GET["kaydet"])) { // Sayfada ge$_GET olup olmadığını kontrol ediyoruz.

    // Sayfa yenilendikten sonra ge$_GET edilen değerleri değişkenlere atıyoruz
    $aslisans = $_GET["aslisans"];
    $plisans = $_GET["plisans"];
    $baslangict = $_GET["baslangict"];
    $baslangict=(string) $baslangict;
    $bitist = $_GET["bitist"];
    $bitist=(string)$bitist;
    $firmaAd = $_GET["firmaAd"]; 
    $bayikodu = $_GET["bayikodu"];
    $il = $_GET["il"]; 
    $ilce = $_GET["ilce"];
    $adres = $_GET["adres"]; 
    $yetkiliadsoyad = $_GET["yetkiliadsoyad"];
    $scriptad = $_GET["scriptad"]; 
    $scriptno = $_GET["scriptno"]; 

    
    if(isset($aslisans) && isset($plisans) &&  isset($baslangict) && isset($bitist)&& isset($firmaAd) && isset($bayikodu) && isset($il) &&  isset($ilce) && isset($adres) &&  isset($yetkiliadsoyad) && isset($scriptad) && isset($scriptno)) { 
      // Veri alanlarının boş olmadığını kontrol ettiriyoruz. Başka kontrollerde yapabilirsiniz.
          
           // Veri ekleme sorgumuzu yazıyoruz.
        if (!empty($aslisans) && !empty($plisans) && !empty($baslangict) && !empty($bitist) && !empty($firmaAd) && !empty($bayikodu) && !empty($il) && !empty($ilce) && !empty($adres) && !empty($yetkiliadsoyad) && !empty($scriptad) && !empty($scriptno)) 
        {
            
            
            
            if ($baglanti->query("INSERT INTO musteribilgileri (aslisans,plisans,baslangict,bitist,firmaAd,bayikodu,il,ilce,adres,yetkiliadsoyad,scriptad,scriptno) VALUES ('$aslisans','$plisans','$baslangict','$bitist','$firmaAd','$bayikodu','$il','$ilce','$adres','$yetkiliadsoyad','$scriptad','$scriptno')")) 
            {
                echo '<div class="alert alert-success" role="alert">
                Kayıt Başarılı Bir Şekilde Gerçekleşti.
                </div>';   
                
            }
        }
        elseif (empty($aslisans) || empty($plisans) || empty($baslangict) ||empty($bitist) || empty($firmaAd) || empty($bayikodu) || empty($il) || empty($ilce) || empty($adres) ||empty($yetkiliadsoyad) || empty($scriptad) || empty($scriptno) )
        {
    
                            
                 echo '<div class="alert alert-danger" role="alert">
                Lütfen Boş Alan Bırakmayınız.
                </div>';
                            
                            
                            
                            
        }
               
               
               
        }
        

}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title>Uye Kayıt</title>
</head>

<body>
    <div class="container p-5">
        <div class="card p-5">
                <form action="http://localhost/yonetimpaneli/include/modul-ekle.php" method="GET">
                    <h2>Müşteri Ekleme</h2> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a type="button" class="btn btn-outline-primary"
                            href="http://localhost/yonetimpaneli/index.php?sayfa=mkayit">Müşteri Tablosu</a>
                            <a type="button" class="btn btn-outline-primary"
                            href="http://localhost/yonetimpaneli/">Anasayfa</a>
                   
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> As Lisans No</label>
                    <input type="text" class="form-control" id="examplekullanıcıadi" name="aslisans">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Planet Lisans No</label>
                    <input type="text" class="form-control 
                                " id="exampleInputEmail1" aria-describedby="emailHelp" name="plisans">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Lisans Başlangıç Tarihi</label>
                    <input type="date" class="form-control
                               
                                " id="exampleInputtext1" name="baslangict">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    </div>

                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Lisans Bitiş Tarihi</label>
                    <input type="date" class="form-control 
                                
                                " id="examplekullanıcıadi" name="bitist">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Firma Adı</label>
                    <input type="text" class="form-control 
                                " id="exampleInputEmail1" aria-describedby="emailHelp" name="firmaAd">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Satış Bayi Kodu</label>
                    <input type="text" class="form-control
                               
                                " id="exampleInputtext1" name="bayikodu">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    </div>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">İl</label>
                    <input type="text" class="form-control 
                                
                                " id="examplekullanıcıadi" name="il">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">İlçe</label>
                    <input type="text" class="form-control 
                                " id="exampleInputEmail1" aria-describedby="emailHelp" name="ilce">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Adres</label>
                    <input type="text" class="form-control
                               
                                " id="exampleInputtext1" name="adres">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Yetkili Ad Soyad</label>
                        <input type="text" class="form-control 
                                " id="exampleInputEmail1" aria-describedby="emailHelp" name="yetkiliadsoyad">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Script ADI</label>
                        <input type="text" class="form-control 
                                " id="exampleInputEmail1" aria-describedby="emailHelp" name="scriptad">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Script Kodu</label>
                        <input type="text" class="form-control
                               
                                " id="exampleInputtext1" name="scriptno">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        </div>

                    </div>

                    <button type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>
                </form>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    -->
</body>

</html>


<!-- Öncelikle HTML düzenimizi oluşturuyoruz. Daha sonra girdiğimiz verileri veritabanına eklemesi için PHP kodlarına geçiyoruz. -->

</div>