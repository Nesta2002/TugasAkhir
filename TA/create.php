<?php
    include '../connect.php';

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $telp = $_POST['telp'];

    $query = "INSERT INTO dosen (nama, kelas, telp) VALUES ('$nama', '$kelas', '$telp')";

    $result = mysqli_query($connect, $query);

    $num = mysqli_affected_rows($connect);

    if ($num > 0) {
        echo "Berhasil tambah data";
    } else {
        echo "Gagal tambah data";
    }
    echo "<a href='read.php'>Lihat Data</a>";
?>
