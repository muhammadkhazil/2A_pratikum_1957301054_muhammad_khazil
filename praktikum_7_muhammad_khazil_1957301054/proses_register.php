<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>

<body>
    <h1>Pendaftaran</h1>
    <?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $upassword = $_POST["upassword"];
    $nama = $_POST["nama"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];

    $conn = mysqli_connect("localhost", "root", "", "pratikum7") or die("Koneksi gagal");

    if ($password != $upassword) {
        echo "Password Tidak Sama";
    } else {
        echo "Username              : $username <br>";
        echo "Password              : $password <br>";
        echo "Ulangi Password       : $upassword <br>";
        echo "Nama                  : $nama <br>";
        echo "tempat_lahir          : $tempat_lahir <br>";
        echo "tanggal_lahir         : $tanggal_lahir <br>";
        echo "Alamat                : $alamat <br>";
        $id = 5;
        $sqlstr = "INSERT INTO mahsiswa(username, password, ulang_password, nama, tempat_lahir, tanggal_lahir, alamat) VALUES ('$username','$password','$upassword','$nama','$tempat_lahir','$tanggal_lahir','$alamat')";
        $hasil = mysqli_query($conn, $sqlstr);
        if ($hasil) {
            echo "Pendaftaran berhasil";
            $id++;
        }
    }
    ?>
</body>

</html>