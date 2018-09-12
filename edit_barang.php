<?php 
include 'koneksi.php';


error_reporting(E_ALL);
$title = 'data barang';
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];



  $sql = 'UPDATE barang SET ';
  $sql .= "nama_barang = '{$nama_barang}', id_kategori = '{$kategori}', deskripsi = '{$deskripsi}',  ";
  $sql .= "harga_jual = '{$harga_jual}', harga_beli = '{$harga_beli}', stock = '{$stock}'";

  $sql .= "WHERE id_barang = '{$id}' ";
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		die(mysqli_error($conn));
	}
	header('location:barang.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);
if (!$result) die ('Error : Data Tidak Tersedia');
$data = mysqli_fetch_array($result);

function is_select($var, $val) {
	if ($var == $val) return 'selected="selected"';
	return false;
}
include 'index.php'
?>

<link rel="stylesheet" type="text/css" href="style2.css">
 <div class="content_a">
  <div class="daftar">
  <div class="main">
     <h2>Edit Barang</h2>
     <form action="edit_barang.php" method="post" enctype="multipart/form-data" />
       <div class="input">
        <label>Nama Barang</label><br>
         <input type="text" name="nama_barang" value="<?php echo $data ['nama_barang']; ?>" />
       </div><br>
       <div class="input">
       <label>Kategori</label><br>
       <select name="kategori">
         <?php 
         include 'koneksi.php' ;
         $sql = 'SELECT * FROM kategori';
         $result = mysqli_query($conn, $sql);
          ?>
          <?php while ($row = mysqli_fetch_array($result)):?>
            <option value="<?php echo $row['id_kategori'];?>"><?php echo $row['nama_kategori'];?></option>
            <?php endwhile; ?>
       </select>
       </div> <br>
       <div class="input">
        <label>Harga Jual</label><br>
        <input type="text" name="harga_jual" value="<?php echo $data ['harga_jual']; ?>" />
        </div><br>
        <div class="input">
        <label>Harga Beli</label><br>
        <input type="text" name="harga_beli" value="<?php echo $data ['harga_beli']; ?>" />
        </div><br>
       <div class="input">
        <label>stock</label><br>
        <input type="text" name="stock" value="<?php echo $data ['stock']; ?>" />
        </div><br>
       <div class="input">
        <label>Deskripsi</label><br>
        <textarea type="text" name="deskripsi" value="<?php echo $data ['deskripsi']; ?>" ></textarea> 
        </div><br>
       <div class="submit">
       		<input type="hidden" name="id" value="<?php echo $data['id_barang'];?>" />
     		<input type="submit" class="btn btn-large" name="submit" value="Edit" />
         <a class="btn btn-primary" href="barang.php">Batal</a>
     	</div>

     </form>

  </div>
</div>
</div>