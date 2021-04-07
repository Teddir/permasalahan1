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
    $nama=$_POST["nama"];
    $nrp=$_POST["nrp"];
    $alamat=$_POST["alamat"];
    $jurusan=$_POST["jurusan"];
    $fotomahasiswa=$_FILES["foto"];
    $namafoto=$_FILES['foto']['name'];
    $jenisfoto=$_FILES['foto']['type'];
    $tempfoto=$_FILES['foto']['tmp_name'];
    $target_dir="C:\Users\HP\Pictures\Database";
    if (is_uploaded_file($tempfoto)) {
        move_uploaded_file($tempfoto, $target_dir . $namafoto);
    }
    $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal"); 
    mysqli_select_db($conn, "percobaan6");
    echo "Nama Mahasiswa : $nama <br>";
    echo "NRP : $nrp <br>";
    $kodejurusan = 0;
    if ($jurusan == 'Telekomunikasi') {
        $kodejurusan = 111;
    }
    elseif ($jurusan == 'Elektronika') {
        $kodejurusan = 222;
    }
    elseif ($jurusan == 'Elektro Industri') {
        $kodejurusan = 333;
    }
    elseif ($jurusan == 'Informatika') {
        $kodejurusan = 444;
    }
    $inputdata = "insert into mahasiswa (NRP, Nama, Alamat, ID_Jur) values ('$nrp', '$nama', '$alamat', '$jurusan')";
    $hasil=mysqli_query($conn, $inputdata);
    echo "Nama mahasiswa berhasil disimpan ! ! !"
    ?>
</body>
</html>