<?php 
	$id=$_GET['id'];
	
	$so_du_lieu=15;
	$sql="select count(*) from san_pham where thuoc_loai='$id';";
	$tam=$conn->query($sql);
	$data=$tam->fetch();
	$so_trang=ceil($data[0]/$so_du_lieu);
	
	if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
	
	$sql="select id,ten,gia,hinh_anh,thuoc_loai from san_pham where thuoc_loai='$id' order by id desc limit $vtbd,$so_du_lieu";
	$tam=$conn->query($sql);
	echo "<table>";
	//San_pham
	while($data=$tam->fetch())
	{
		echo "<tr>";
			for($i=1;$i<=3;$i++)
			{
				echo "<td align='center' width='1215px' valign='top' >";
				echo "<div class='anh' >";
					if($data!=false)
					{
						$link_anh="hinh_anh/san_pham/".$data['hinh_anh'];
						$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$data['id'];
						$gia=$data['gia'];
						$gia=number_format($gia,0,",",".")." VND";
						echo "<a href='$link_chi_tiet' >";
							echo "<img src='$link_anh' width='220px' >";
						echo "</a>";
						echo "<br>";
						echo "<br>";
						echo "<a href='$link_chi_tiet' >";
							echo $data['ten'];
						echo "</a>";
						echo "<div style='margin-top:5px' >";						
						echo $gia;
						echo "</div>";
						echo "<br>";
					}
					else 
					{
						echo "&nbsp;";
					}
				echo "</td>";
				if($i!=3)
				{
					$data=$tam->fetch();
				}
			}
			echo"</div>";
		echo "</tr>";
	}
	//
	echo "<tr>";
		echo "<td colspan='3' align='center' >";
			echo "<div class='phan_trang' >";
				for($i=1;$i<=$so_trang;$i++)
				{
					$link="?thamso=xuat_san_pham&id=".$_GET['id']."&trang=".$i;//
					echo "<a href='$link' >";
						echo $i;echo " ";
					echo "</a>";
				}
			echo "</div>";
		echo "</td>";
	echo "</tr>";
	echo "</table>";
?>