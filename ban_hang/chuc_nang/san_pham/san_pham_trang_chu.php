<br><br>
<h4>
Kho Github :
<br>
	<p><a href="https://github.com/nhanngoc/TH_LapTrinhWebsite.git">https://github.com/nhanngoc/TH_LapTrinhWebsite.git</a></p>
	<br>
Sản Phẩm Nổi Bật :
</h4>
<br><br>
<?php 
	
	$sql="select id,ten,gia,hinh_anh,thuoc_loai from san_pham where trang_chu='co' order by sap_xep_trang_chu desc limit 0,15";
	$tam=$conn->query($sql);
	echo "<table>";
	//San_pham
	while($data=$tam->fetch())
	{
		echo "<tr>";
			for($i=1;$i<=3;$i++)
			{
				
				echo "<td align='center' width='350px' valign='top' >";
				echo "<div class='anh' >";
					if($data!=false)
					{  	
						$link_anh="hinh_anh/san_pham/".$data['hinh_anh'];
						$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$data['id'];
						$gia=$data['gia'];
						$gia=number_format($gia,0,",",".")." VND";
						echo "<a href='$link_chi_tiet' >";
							echo "<img src='$link_anh' >";
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
					echo "</div>";
				echo "</td>";
				
				if($i!=3)
				{
					$data=$tam->fetch();
				}
			}
	
		echo "</tr>";
	}
	//
	echo "</table>";
?>