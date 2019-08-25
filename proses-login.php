<?php
	session_start();
	include ('koneksi.php');

	$username= $_POST['username'];
	$password= $_POST['password'];
	$level= $_POST['level'];
	$sql = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
	$data = mysql_fetch_array($sql);
	if($username==$data['username']&&$password==$data['password']&&$level==$data['level']&&$level==1)
	{
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = $level;
		header('location:index.php');
	}
	elseif($username==$data['username']&&$password==$data['password']&&$level==$data['level']&&$level==0)
	{
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = $level;
		header('location:indexkades.php');
	}
	elseif($level!=1)
	{
		echo "<script>alert('Maaf, username atau password yang anda masukan salah atau level user tidak sesuai')</script>";
		echo "<meta http-equiv='refresh' content='0; url=loginkades.php'>";
	}
	elseif($level!=0)
	{
		echo "<script>alert('Maaf, username atau password yang anda masukan salah atau level user tidak sesuai')</script>";
		echo "<meta http-equiv='refresh' content='0; url=login.php'>";
	}
?>