<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$sql="DELETE FROM hoa_don WHERE id = $id ";
	$tam=$conn->query($sql);
?>
