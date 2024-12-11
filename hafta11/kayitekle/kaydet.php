<?php
    include "../baglan/baglan.php";

    $adi = $_POST['ad'];
    $soyadi = $_POST['soyad'];
    $tarih = $_POST['tarih'];
    $cinsiyet = $_POST['cins'];
    $bolum = $_POST['bolum'];

    $kayitekle = mysqli_query($baglanti, "INSERT INTO ogrenci(ad,soyad,dogumtarihi, cinsiyet, bolumu) VALUES('$adi', '$soyadi', '$tarih', '$cinsiyet', '$bolum')");

    if($kayitekle) {
        echo "Girilen Bilgiler Başarılı Bir Şekilde Kayıt Edildi!";
    } else {
        echo "Girilen Bilgiler Kayıt Edilemedi!";
    }
?>