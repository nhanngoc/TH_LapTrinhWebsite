<?php 
	if(!isset($bien_bao_mat)){exit();}
	$conn = new PDO("mysql:host=localhost; dbname=ban_hang" ,'root'  ,'');
	$conn->query('set names utf8');
?>
<?php 
	$so_dong_tren_mot_trang=20;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	$sql="select count(*) from hoa_don";
	$tam=$conn->query($sql);
	$data=$tam->fetch();
	$so_trang=ceil($data[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$sql="select * from hoa_don order by id desc limit $vtbd,$so_dong_tren_mot_trang";
	$tam=$conn->query($sql);
?>
<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="370px" ><b>Tên</b></td>
		<td width="300px" ><b>Email</b></td>
		<td width="120px" ><b>Điện thoại</b></td>
		<td align="center" width="100px" ><b>Sửa</b></td>
		<td align="center" width="100px" ><b>Xóa</b></td>
	</tr>
	<?php 
		while($data=$tam->fetch())
		{
			$id=$data['id'];
			$ten=$data['ten_nguoi_mua'];
			$email=$data['email'];
			$dien_thoai=$data['dien_thoai'];
			$link_xem="?thamso=xem_hoa_don&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoa_hoa_don=co&id=".$id;
			?>
				<tr class="a_1" >
					<td>
						<a href="<?php echo $link_xem; ?>" class="lk_a1" ><?php echo $ten; ?></a>
					</td>
					<td>
						<?php echo $email; ?>
					</td>
					<td>
						<?php echo $dien_thoai; ?>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xem; ?>" class="lk_a1" >Xem</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>" class="lk_a1" >Xóa</a>
					</td>
				</tr>
			<?php 
		}
	?>
	<tr>
		<td colspan="5" align="center" >
			<br>
			<?php 
				for($i=1;$i<=$so_trang;$i++)
				{
					$link_phan_trang="?thamso=hoa_don&trang=".$i;
					echo "<a href='$link_phan_trang' class='phan_trang' >";
						echo $i;
					echo "</a> ";
				}
			?>
			<br><br>
		</td>
	</tr>
</table>