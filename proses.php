<?php
    require "koneksi.php";
    
    $getIdProduk   = $_GET['id_produk'];
    $idProduk = $_POST['id_produk'];
    $namaProduk = $_POST['namaProduk'];
    $keterangan = $_POST['keterangan'];
    $harga =$_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $insert = "INSERT INTO `tb_produk` VALUES (NULL, '$namaProduk','$keterangan','$harga','$jumlah')";
    $update ="UPDATE `tb_produk` SET `nama_produk`='$namaProduk',`keterangan`='$keterangan',`harga`='$harga',`jumlah`='$jumlah' WHERE `tb_produk`.`id_produk` = '$idProduk'";
    $delete =  "DELETE FROM tb_produk WHERE `tb_produk`.`id_produk` = '$getIdProduk'";
    if(isset($_POST['save'])){
        if(mysqli_query($connect,$insert)){
            echo "sukses";
            header("location:index.php");
        }
    }else if(isset($_POST['update'])){
        if(mysqli_query($connect,$update)){
            echo "sukses";
            header("location:index.php");
        }
    }else if(isset($_GET['delete'])){
        if(mysqli_query($connect, $delete)){
            header("location:index.php");
        }else{
            echo "Error deleting record: " . mysqli_error($connect);
        }
    }
?>