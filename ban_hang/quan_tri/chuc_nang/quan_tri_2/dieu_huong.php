<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	if(!isset($_GET['thamso'])){$thamso="";}else{$thamso=$_GET['thamso'];}
	
	switch($thamso)
	{
		
		case "loai":
			include("chuc_nang/loai/lien_ket_loai.php");
		break;
		case "them_loai":
			include("chuc_nang/loai/them_loai.php");
		break;
		case "quan_ly_loai":
			include("chuc_nang/loai/quan_ly_loai.php");
		break;
		case "sua_loai":
			include("chuc_nang/loai/sua_loai.php");
		break;
		case "san_pham":
			include("chuc_nang/san_pham/lien_ket_san_pham.php");
		break;
		case "them_san_pham":
			include("chuc_nang/san_pham/them_san_pham.php");
		break;
		case "quan_ly_san_pham":
			include("chuc_nang/san_pham/quan_ly_san_pham.php");
		break;
		case "sua_san_pham":
			include("chuc_nang/san_pham/sua_san_pham.php");
		break;
		case "hoa_don":
			include("chuc_nang/hoa_don/quan_ly_hoa_don.php");
		break;
		case "xem_hoa_don":
			include("chuc_nang/hoa_don/xem_hoa_don.php");
		break;
		case "san_pham_trang_chu":
			include("chuc_nang/san_pham_trang_chu/san_pham_trang_chu.php");
		break;
		
		case "sua_thong_tin_quan_tri":
			include("chuc_nang/quan_tri_2/sua_thong_tin_quan_tri.php");
		break;
		default: 
			include("chuc_nang/quan_tri_2/trang_chu_2.php");
	}
?>