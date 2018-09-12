<?php
include_once 'koneksi.php';
//include('login_session.php');
error_reporting(E_ALL);
$title = 'data kategori';
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];

  $sql = 'iNSERT INTO kategori (nama_kategori)';
  $sql .="VALUE ('{$nama}')";
  $result = mysqli_query($conn, $sql);
	if (!$result) {
		die(mysqli_error($conn));
	}
	header('location:kategori.php');
  // code...
}

include('index.php');
 ?>
<link rel="stylesheet" type="text/css" href="style2.css">
<div class="content_a">
  <div class="daftar">
  <div class="main">
     <h2>Tambah Kategori</h2>
     <form action="form_kategori.php" method="post" enctype="multipart/form-data">
       <div class="input">
         <label for="nama">Nama Kategori</label>
         <input type="text" name="nama">
       </div>
       <div class="submit">
     		<input type="submit" class="btn btn-large" name="submit" value="Simpan" />
     	</div>

     </form>

  </div>
</div>
</div>
<?php
 ?>
