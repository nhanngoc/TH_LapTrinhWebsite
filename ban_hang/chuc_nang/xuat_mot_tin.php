<?php 
	$id=$_GET['id'];
	$sql="select * from menu_ngang where id='$id'";
	$tam=$conn->query($sql);
	$data=$tam->fetch();
	echo "<h1>";
		echo $data['ten'];
	echo "</h1>";
	echo $data['noi_dung'];
?>