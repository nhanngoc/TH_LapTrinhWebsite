<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$ten_menu=trim($_POST['ten']);
	$ten_menu=str_replace("'","&#39;",$ten_menu);
	if($ten_menu!="")
	{
		$sql="
		INSERT INTO loai (
		id ,
		ten 
		)
		VALUES (
		NULL ,
		'$ten_menu'
		);";
		$tam=$conn->query($sql);
	}
	else 
	{
		thong_bao_html("Tên menu chưa được điền vào");
	}
?>