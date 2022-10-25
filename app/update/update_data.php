<?php
    include('../../conf/config.php');
    $id = $_POST['id'];
    $nama =  $_POST['nama'];
    $nim =  $_POST['nim'];
    $smt =  $_POST['semester'];

    //Nama Foto
    $nama_file = $_FILES['foto']['name'];
    // echo $nama_file;

    //Lokasi Foto
    $file_tmp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp,'../foto/'.$nama_file);
    $query = mysqli_query($koneksi,"UPDATE tb_mahasiswa SET nama='$nama',nim='$nim',semester='$smt',foto ='$nama_file' WHERE id='$id'");
    header('Location: ../index.php?page=data-mahasiswa');
?>