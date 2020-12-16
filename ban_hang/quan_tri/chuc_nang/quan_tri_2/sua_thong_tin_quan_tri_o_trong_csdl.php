<?php 
	if(!isset($bien_bao_mat)){exit();}
?>

<?php 
	$sql="select * from thong_tin_quan_tri where id='1' ";
	$tam=$conn->query($sql);
	$data=$tam->fetch();
	$ky_danh=$_POST['ky_danh'];
	$mat_khau=$data['mat_khau'];

	$mat_khau_tu_form=trim($_POST['mat_khau']);
	if($mat_khau_tu_form!="khong_doi")
	{
		$mat_khau=md5($mat_khau_tu_form);
		$mat_khau=md5($mat_khau);
	}

	$sql="
	UPDATE thong_tin_quan_tri SET 
	ky_danh = '$ky_danh',
	mat_khau = '$mat_khau' 
	WHERE id =1;
	";
	$tam=$conn->query($sql);
	
	$_SESSION['ky_danh']=$ky_danh;
	$_SESSION['mat_khau']=$mat_khau;
	
	thong_bao_html("Đã cập nhật lại thông tin quản trị");			
	
?>