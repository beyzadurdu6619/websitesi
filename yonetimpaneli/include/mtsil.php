<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=yonetimpaneli", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}

$delete = $db->exec("DELETE FROM musteribilgileri");
echo '<div class="alert alert-danger" role="alert">
                    Toplam'.$delete.'Kayıt Silindi.
                </div>';
                header("location:http://localhost/yonetimpaneli/index.php?sayfa=mkayit");
?>
