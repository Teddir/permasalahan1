<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal"); 
    mysqli_select_db($conn, "percobaan6");
    $namamahasiswa = $_GET["nama"];
    $query = "SELECT `mahasiswa`.`NRP`, `mahasiswa`.`Nama`, `jurusan`.`Nama Jurusan` FROM `mahasiswa` 
    JOIN `jurusan` WHERE `jurusan`.`ID_Jur` = `mahasiswa`.`ID_Jur` AND `mahasiswa`.`Nama` like '%$namamahasiswa%'";
    $pencarian = mysqli_query($conn, $query);
    if ($pencarian) {
        while ($hasil = mysqli_fetch_row($pencarian)) {
            echo "NRP : ";
            echo $hasil[0];
            echo "<br>";
            echo "Nama : ";
            echo $hasil[1];
            echo "<br>";
            echo "Jurusan : ";
            echo $hasil[2];
            echo "<br>";
            echo "Foto : ";
            echo "<img src='\Databasefoto1'";
        }
    }
    ?>
</body>
</html>
