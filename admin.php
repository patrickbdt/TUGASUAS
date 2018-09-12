<?php
include_once 'akses.php';
?>
<link rel="stylesheet" type="text/css" href="style1.css">
		<nav class="Container">    
			<h4>Menu Navigasi</h4>
			<img src="menu.png" width="100px">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="form_barang.php">Tambah Barang</a></li>
				<li><a href="barang1.php">Edit Barang</a></li>
				<li><a href="http://www.facebook.com/ocoths">AUTHOR</a></li>
			</ul>
			</nav>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.tombol').click(function(){
				$('.menu').toggleClass("slide-menu-tampil");
			});
		});
	</script>