<?php 
	if(!isset($bien_bao_mat)){exit();}
	for($i=1;$i<=10;$i++)
	{
		$ten_select="select_".$i;
		$ten_input="input_".$i;
		$ten_id="id_".$i;
		if(isset($_POST[$ten_id]))
		{
			$id=$_POST[$ten_id];
			$trang_chu=$_POST[$ten_select];
			$sap_xep_trang_chu=$_POST[$ten_input];
			$sql="update san_pham set 
					trang_chu='$trang_chu',
					sap_xep_trang_chu='$sap_xep_trang_chu' 
					where id='$id';
			";
			$tam=$conn->query($sql);
		}
	}
?>