<?php
session_start();
unset($_session['islogin']);
session_destroy();
header("location:index.php");
?>