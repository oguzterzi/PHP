<?php
    $baglanti = mysqli_connect("localhost", "root", "gmyo1414") or die("Veri Tabanı Sunucusuna Bağlanamadı!");

    mysqli_set_charset($baglanti, "UTF8") or die("Karakter Seti Hata!!");

    mysqli_select_db($baglanti, 'terzi') or die("Veri Tabanına Bağlanamadı!");
?>