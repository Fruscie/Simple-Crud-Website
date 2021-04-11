<?php
    require "koneksi.php";
    $namaProduk = $_POST['namaProduk'];
    $keterangan = $_POST['keterangan'];
    $harga =$_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $insert = "INSERT INTO `tb_produk` VALUES (NULL, '$namaProduk','$keterangan','$harga','$jumlah')";
    if(isset($_POST['save'])){
        if(mysqli_query($connect,$insert)){
            echo "sukses";
            header("location:index.php");
        }else{
            echo "gagal";
        }
    }
?>