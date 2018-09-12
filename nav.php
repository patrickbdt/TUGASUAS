<link rel="stylesheet" type="text/css" href="style1.css">
		<nav class="menu">    
			<button class="tombol">MENU</button>
			<h4>Menu Navigasi</h4>
			<img src="menu.png" width="100px">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="admin.php">Admin</a></li>
				<li><a href="barang.php">Barang</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			</nav>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.tombol').click(function(){
				$('.menu').toggleClass("slide-menu-tampil");
			});
		});
	</script>