<?php

@$baglanti = new mysqli('localhost', 'root', '', 'yonetimpaneli'); // Veritabanı bağlantımızı yapıyoruz.
    if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
    {
        
        exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
    }

$baglanti->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.

?>

<?php 

if (isset($_GET["kaydet"])) { // Sayfada GET$_GET[""] olup olmadığını kontrol ediyoruz.

    
    
    // Sayfa yenilendikten sonra GET$_GET[""] edilen değerleri değişkenlere atıyoruz
    $lisansno = $_GET["lisansno"]; 
    $sirketkodu = $_GET["sirketkodu"];
    $sirketadi = $_GET["sirketadi"];
    
    
    

    
    if(isset($lisansno) && isset($sirketkodu) && isset($sirketadi))
    {

        

                
                if (!empty($sirketkodu) && !empty($lisansno) && !empty($sirketadi) )
                {

                        if($baglanti->query("INSERT INTO sirketbilgileri (lisansno,sirketkodu,sirketadi) VALUES ('$lisansno','$sirketkodu','$sirketadi')")) 
                        {
                            echo '<div class="alert alert-success" role="alert">
                            Kayıt Başarılı Bir Şekilde Gerçekleşti.
                        </div>';
                        
                        }
                }
                elseif (empty($sirketkodu) || empty($lisansno) || empty($sirketadi) )
                {

                        
                            echo '<div class="alert alert-danger" role="alert">
                            Lütfen Boş Alan Bırakmayınız.
                        </div>';
                        
                        
                        
                        
                }
                
                

    }
    

   
}

    




?>
</div>

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
            <form action="http://localhost/yonetimpaneli/include/sekle.php" method="GET">
                <div>
                    <label>
                    <h2>Şirket Ekleme</h2> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a type="button" class="btn btn-outline-primary"
                            href="http://localhost/yonetimpaneli/index.php?sayfa=sirketbilgileri">Şirket Bilgileri Tablosu</a>
                            <a type="button" class="btn btn-outline-primary"
                            href="http://localhost/yonetimpaneli/">Anasayfa</a>

                    </label>
                </div>
                <div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Lisans No</label>
                    <input type="text" class="form-control" id="examplekullanıcıadi" name="lisansno">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Şirket Kodu</label>
                    <input type="text" class="form-control 
                                " id="exampleInputEmail1" aria-describedby="emailHelp" name="sirketkodu">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Şirket Adı</label>
                    <input type="text" class="form-control
                               
                                " id="exampleInputPassword1" name="sirketadi">
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