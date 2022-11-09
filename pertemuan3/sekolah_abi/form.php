<?php

include 'connection.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
echo $nama;

$query = "INSERT INTO siswa(NIS, NAMA_LENGKAP, ALAMAT, KELAS, JURUSAN) VALUES ('".$nis. "','". $nama . "', '" . $alamat . "', '" .$kelas . "', '" . $jurusan . "')";

$mysql = mysqli_query($connection, $query);

if($mysql){
    echo '<script>alert("Data berhasil masuk");
    window.location="form_page.php";
</script>';
}

mysqli_close($connection);