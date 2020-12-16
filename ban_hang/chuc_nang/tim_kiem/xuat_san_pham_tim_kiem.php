<?php 
	if(trim($_GET['tu_khoa'])!=""){ 
		$m=explode(" ",$_GET['tu_khoa']);    
		$chuoi_tim_sql="";
		for($i=0;$i<count($m);$i++)
		{
			$tu=trim($m[$i]);
			if($tu!="")
			{
				$chuoi_tim_sql=$chuoi_tim_sql." ten like '%".$tu."%' or";
			}
		}

		$m_2=explode(" ",$chuoi_tim_sql);    
		$chuoi_tim_sql_2="";
		for($i=0;$i<count($m_2)-1;$i++)
		{
			$chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
		} 
		$so_du_lieu=15;
		$sql="select count(*) from san_pham  where $chuoi_tim_sql_2";
		$tam=$conn->query($sql);
		$data=$tam->fetch();
		$so_trang=ceil($data[0]/$so_du_lieu);
		
		if(!isset($_GET['trang']))
		{$vtbd=0;}
		else
		{$vtbd=($_GET['trang']-1)*$so_du_lieu;} //$vtbd tính từ thứ tự
		$sql="select id,ten,gia,hinh_anh,thuoc_loai from san_pham where $chuoi_tim_sql_2 order by id desc limit $vtbd,$so_du_lieu";//so dong cam lay
		$tam=$conn->query($sql);

		echo "<table>";     
		//xuat ra san_pham
		$dem=0;
		$de=0;
		for($x=1;$x<=($data=$tam->fetch());$x++)
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
		echo "<tr>";
			echo "<td colspan='3' align='center' >";
				echo "<div class='phan_trang' >";
					for($i=1;$i<=$so_trang;$i++)
					{
						$link="?thamso=tim_kiem&tu_khoa=".$_GET['tu_khoa']."&trang=".$i;
						echo "<a href='$link' >";
							echo $i;echo " ";
						echo "</a>";
					}				
				echo "</div>";
			echo "</td>";
		echo "</tr>";
		echo "</table>";

		
		
	}
	
	else
	{
	echo "Bạn chưa nhập từ khóa";
	}
	//$soluong = count($data); //tương đương count($data,0)
   // echo 'Số lượng phần tử của mảng $data là: '.$soluong;
?>
