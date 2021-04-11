<?php
    require 'koneksi.php';
    $idProduk = $_GET['id_produk'];
    // $data  = mysqli_query($connect, "SELECT * from tb_produk where id_produk='$idProduk'");
    $dataArr       = mysqli_fetch_array(mysqli_query($connect, "SELECT * from tb_produk where id_produk='$idProduk'"));
   
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Fazztrack CRUD</title>
  </head>
  <body>
    <h1>Fazztrack CRUD</h1>
    <form method="post" action="proses.php">
      <table>
      <input type="hidden" value="<?php echo $dataArr['id_produk'];?>" name="id_produk">
        <tr><td> <label name="namaProduk" class="col-sm">Nama Produk </label></td>
            <td> <input class="col-sm" type="text" name="namaProduk" value="<?php echo $dataArr['nama_produk']; ?>"></td></tr>
        <tr><td><label name="keterangan" class="col-sm">Keterangan </label></td>
            <td><input class="col-sm" type="text" name="keterangan"value="<?php echo $dataArr['keterangan']; ?>"></td></tr>
        <tr><td><label name="harga" class="col-sm">Harga </label></td>
            <td><input class="col-sm" type="text" name="harga" value="<?php echo $dataArr['harga']; ?>"></td></tr>  
        <tr><td> <label name="jumlah" class="col-sm">Jumlah </label></td>
            <td> <input class="col-sm" type="text" name="jumlah"value="<?php echo $dataArr['jumlah']; ?>"></td></tr>
        <td><br></td>
        <tr><td><button type="submit" name="update">Simpan</button></td>
            <td><a href="index.php">kembali</a></td>
        </tr>
        
      </table>
      <br>
    </form>
  </body>
</html>