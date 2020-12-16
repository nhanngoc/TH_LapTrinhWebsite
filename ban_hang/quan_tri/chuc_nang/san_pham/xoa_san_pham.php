<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	
	$sql="select * from san_pham where id='$id' ";
	$tam=$conn->query($sql);
	$data=$tam->fetch();

	$link_hinh="../hinh_anh/san_pham/".$data['hinh_anh'];
	if(is_file($link_hinh))	
	{
		unlink($link_hinh);
	}
	
	$sql="DELETE FROM san_pham WHERE id = $id ";
	$tam=$conn->query($sql);
?>