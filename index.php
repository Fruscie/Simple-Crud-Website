<!DOCTYPE html>
<html>
  <head>
    <title>Fazztrack CRUD</title>
  </head>
  <body>
    <h1>Fazztrack CRUD</h1>
    <form method="post" action="proses.php">
      <table>
        <tr><td> <label name="namaProduk" class="col-sm">Nama Produk </label></td>
            <td> <input class="col-sm" type="text" name="namaProduk"></td></tr>
        <tr><td><label name="keterangan" class="col-sm">Keterangan </label></td>
            <td><input class="col-sm" type="text" name="keterangan"></td></tr>
        <tr><td><label name="harga" class="col-sm">Harga </label></td>
            <td><input class="col-sm" type="text" name="harga"></td></tr>  
        <tr><td> <label name="jumlah" class="col-sm">Jumlah </label></td>
            <td> <input class="col-sm" type="text" name="jumlah"></td></tr>
        <td><br></td>
        <tr><td><button type="submit" name="save">Simpan</button></td></tr>
      </table>
      <br>
      <table border="2">
      <tr><th>NO</th><th>Nama Produk</th><th>Keterangan</th><th>Harga</th><th>Jumlah</th><th>Edit/Delete</th></tr>
     
      <?php
      require 'koneksi.php';
      $datas = mysqli_query($connect, "SELECT * from tb_produk");
      foreach($datas as $data ){
           echo "<tr>
          <td>".$data['id_produk']."</td>
          <td>".$data['nama_produk']."</td>
          <td>".$data['keterangan']."</td>
          <td>".$data['harga']."</td>
          <td>".$data['jumlah']."</td>
          <td><a href='edit.php?id_produk=$data[id_produk]'>Edit</a>
          <a href='proses.php?id_produk=$data[id_produk]&delete=delete'>Delete</a>
          </td>
          ";
      }
      ?>

      </table>
    </form>
  </body>
</html>