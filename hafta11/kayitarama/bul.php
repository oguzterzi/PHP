<?php
    include "../baglan/baglan.php";

    $numara = $_POST['id'];

    $veriseti = mysqli_query($baglanti, "SELECT * FROM ogrenci WHERE id='$numara'");

    $kayit = mysqli_fetch_row($veriseti);

    echo "<table border='1' align='center'>";
        echo "<tr>";
            echo "<td>İd</td>";
            echo "<td>Adı</td>";
            echo "<td>Soyadı</td>";
            echo "<td>Doğum Tarihi</td>";
            echo "<td>Cinsiyet</td>";
            echo "<td>Bölümü</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>". $kayit[0] ."</td>";
            echo "<td>". $kayit[1] ."</td>";
            echo "<td>". $kayit[2] ."</td>";
            echo "<td>". $kayit[3] ."</td>";
            echo "<td>". $kayit[4] ."</td>";
            echo "<td>". $kayit[5] ."</td>";
        echo "</tr>";
    echo "</table>";
?>