<?php
include 'config/koneksi.php';
if($_POST)
{
	$orang=$_SESSION['nama'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `chat`(`username`, `message`) VALUES ('".$orang."', '".$msg."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		header('Location: beranda_admin.php');
	}
	else
	{
		echo "Ada yang salah";
	}
	
	}
?>