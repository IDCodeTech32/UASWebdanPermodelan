<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div>

        <form action = "" method="POST">
        <p>Nama:</p>
        <input type = "text" name = "Nama">
        <p>Umur:</p>
        <input type = "text" name = "Umur">
        <p>jenis kelamin:</p>
        <input type = "text" name = "Jenkel">
        <p>NIK:</p>
        <input type = "text" name = "NIK">

        <button value="simpan" name= "proses"> Submit </button>
</form>
</div>

<?php

include "koneksi.php";

if (isset ($_POST['proses'])){
    mysqli_query($koneksi, "insert into karyawan set
    Nama = '$_POST[Nama]',
    Umur = '$_POST[Umur]',
    Jenkel = '$_POST[Jenkel]',
    NIK = '$_POST[NIK]' ");
    
}
?>
 </body>
</html>

