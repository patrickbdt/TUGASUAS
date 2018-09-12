<?php
$title="Login";
$error=null;
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$user = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM user WHERE username='{$user}' AND password='{$password}'";
	$result = mysqli_query($conn, $sql);
	if ($result && $result->num_rows >0){
		session_start();
		$_SESSION['isLogin'] = 1;
		header('location: admin.php');

	} else
	$error = "Username atau password salah.";
	# code...
}
// / include_once 'header.php';
?>
<meta charset="utf-8">
<link href="style.css" type="text/css" rel="stylesheet" />
	<div class="daftar">
		<div class="main">
<div id="login">
	<h2>LoginForm</h2>
	<form action="login.php" method="post">
		<label>Username</label>
		<input id="name" name="username" type="text"></input>
		<label>Password</label>
		<input id="password" name="password" type="password"></input>
		<input type="submit" class="btn btn-alert" name="submit" value="login"></input>
		<span><?php echo  $error;?></span>
	</form>
</div>
</div>
</div>

