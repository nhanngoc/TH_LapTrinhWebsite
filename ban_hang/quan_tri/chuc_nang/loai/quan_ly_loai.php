<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$so_dong_tren_mot_trang=20;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	$sql="select count(*) from loai";
	$tam=$conn->query($sql);
	$data=$tam->fetch();
	$so_trang=ceil($data[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$sql="select * from loai order by id limit $vtbd,$so_dong_tren_mot_trang";
	$tam=$conn->query($sql);
?>
<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="550px" ><b>Tên</b></td>
		<td align="center" width="220px" ><b>Sửa</b></td>
		<td align="center" width="220px" ><b>Xóa</b></td>
	</tr>
	<?php 
		while($data=$tam->fetch())
		{
			$id=$data['id'];
			$ten=$data['ten'];
			$link_sua="?thamso=sua_loai&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoa_loai=co&id=".$id;
			?>
				<tr class="a_1" >
					<td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" ><?php echo $ten; ?></a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" class="lk_a1" >Sửa</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>" class="lk_a1" >Xóa</a>
					</td>
				</tr>
			<?php 
		}
	?>
	<tr>
		<td colspan="3" align="center" >
			<br>
			<?php 
				for($i=1;$i<=$so_trang;$i++)
				{
					$link_phan_trang="?thamso=quan_ly_loai&trang=".$i;
					echo "<a href='$link_phan_trang' class='phan_trang' >";
						echo $i;
					echo "</a> ";
				}
			?>
			<br><br>
		</td>
	</tr>
</table>