
<?php 
	$sql="select id,ten,loai_menu from menu_ngang order by id";
	$tam=$conn->query($sql); //ket noi
	echo "<div class='menu_ngang' >";
	echo"<ul>";
	
		echo "<li><a href='index.php'>Trang chủ</a></li>";
		
		while($data=$tam->fetch())
		{
			if($data['loai_menu']==""){$link_menu="?thamso=xuat_mot_tin&id=".$data['id'];}
			if($data['loai_menu']=="san_pham"){$link_menu="?thamso=xuat_san_pham";}
			echo "<li><a href='$link_menu'>";
				echo $data['ten'];
			echo "</a></li>";
		}
		echo "<li><a href='#'>Loại Sản Phẩm</a>";
			echo '<ul class="sub-menu">';
				echo'<li>';
					echo"<?php";
					include("loai.php");			
				echo'</li>';
			echo"</ul>";
		echo"</li>";
	echo"</ul>";
	echo "</div>";
?>


