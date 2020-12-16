<?php 
	for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
	{
		if($name_sl="sl_".$i>=0){	
			$name_id="id_".$i;
			$name_sl="sl_".$i;
			
			if(isset($_POST[$name_id]))
			{
			$_SESSION['id_them_vao_gio'][$i]=$_POST[$name_id];
			$_SESSION['sl_them_vao_gio'][$i]=$_POST[$name_sl];
			}
		}
		else if($name_sl="sl_".$i<0){
				$_SESSION['sl_them_vao_gio'][$i]=$_POST[$name_sl=0];
			}

	}
?>