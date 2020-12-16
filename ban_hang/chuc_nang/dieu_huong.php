<?php 
	if(isset($_GET['thamso'])){
		$tham_so=$_GET['thamso'];
	}else{
		$tham_so="";
	}
	switch($tham_so)
	{
		case "xuat_san_pham_loai":
			include("chuc_nang/san_pham/xuat_loai_san_pham.php");
		break;
		case "chi_tiet_san_pham":
			include("chuc_nang/san_pham/chi_tiet_san_pham.php");
		break;
		case "xuat_san_pham":
			include("chuc_nang/san_pham/xuat_toan_bo_san_pham.php");
		break;
		case "xuat_mot_tin":
			include("chuc_nang/xuat_mot_tin.php");
		break;
		case "tim_kiem":
			include("chuc_nang/tim_kiem/xuat_san_pham_tim_kiem.php");
		break;
		case "gio_hang":
			include("chuc_nang/gio_hang/gio_hang.php");
		break;
		default:
			include("subpage/slideshow.php");	
			include("chuc_nang/san_pham/san_pham_trang_chu.php");	
	}
?>