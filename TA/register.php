<?php
  session_start();

  $connect=mysqli_connect("localhost", "root", "", "db_register");

  $nama=$_POST['nama'];
  $sekolah=$_POST['sekolah'];
  $kelas=$_POST['kelas'];
  $telp=$_POST['telp'];
  $email=$_POST['email'];

  $input="INSERT INTO daftar (nama, sekolah, kelas, telp, email)
          VALUES ('$nama', '$sekolah', '$kelas', '$telp', '$email')";
  $hasil=mysqli_query($connect, $input);
  if (!$hasil) {
      echo "Gagal tambah data";
  } else {
    header("Location: result.php");
  }
 ?>
