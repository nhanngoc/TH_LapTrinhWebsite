<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$sql="select count(*) from san_pham where thuoc_menu='$id' ";
	$tam=$conn->query($sql);
	$data=$tam->fetch();
	if($tv_2[0]==0)
	{
		$truy_van_xoa="DELETE FROM loai WHERE id = $id ";
		$tam=$conn->query($truy_van_xoa);
	}
	else 
	{
		thong_bao_html("Menu này vẫn còn dữ liệu nên không thể xóa");
	}
?>