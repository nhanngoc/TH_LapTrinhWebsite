<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	if(!isset($_GET['id_menu']))
	{
		$id_menu="toan_bo_san_pham";
	}
	else 
	{
		if($_GET['id_menu']!="" and $_GET['id_menu']!="toan_bo_san_pham")
		{
			$id_menu=$_GET['id_menu'];
		}
		else 
		{
			$id_menu="toan_bo_san_pham";
		}
	}
?>
<br>
<div style="width:990px;text-align:left" >
	Chọn : <select name="danh_muc" onchange="window.location='?thamso=quan_ly_san_pham&id_menu='+this.value" >
	<option value="" >Toàn bộ sản phẩm</option>
	<?php 
		$sql="select * from loai order by id ";
		$tam=$conn->query($sql);
		$a="";
		while($data=$tam->fetch())
		{
			$ten=$data['ten'];
			$id=$data['id'];
			if($id_menu==$id)
			{
				$a="selected";
			}
			echo "<option value='$id' $a >";
				echo $ten;
			echo "</option>";
			$a="";
		}
	?>
	</select>
</div>
<br>
<?php 
	$so_dong_tren_mot_trang=10;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	if($id_menu=="toan_bo_san_pham")
	{
		$sql="select count(*) from san_pham";
	}
	else 
	{
		$sql="select count(*) from san_pham where thuoc_menu='$id_menu' ";
	}
	$tam=$conn->query($sql);
	$data=$tam->fetch();
	$so_trang=ceil($data[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	if($id_menu=="toan_bo_san_pham")
	{
		$sql="select id,ten,gia,hinh_anh from san_pham order by id desc limit $vtbd,$so_dong_tren_mot_trang";
	}
	else 
	{
		$sql="select id,ten,gia,hinh_anh from san_pham where thuoc_menu='$id_menu' order by id desc limit $vtbd,$so_dong_tren_mot_trang";
	}
	$tam=$conn->query($sql);
?>

<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="120px" ><b>Hình ảnh</b></td>
		<td width="450px" ><b>Tên</b></td>
		<td align="center" width="140px" ><b>Giá</b></td>
		<td align="center" width="140px" ><b>Sửa</b></td>
		<td align="center" width="140px" ><b>Xóa</b></td>
	</tr>
	<?php 
		while($data=$tam->fetch())
		{
			$id=$data['id'];
			$ten=$data['ten'];
			$gia=$data['gia'];
			$gia=number_format($gia,0,",",".");
			$link_hinh="../hinh_anh/san_pham/".$data['hinh_anh'];
			$link_sua="?thamso=sua_san_pham&id_menu=".$id_menu."&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoa_san_pham=co&id=".$id;
			?>
				<tr class="a_1" >
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" >
							<img src="<?php echo $link_hinh; ?>" style="width:100px;margin-top:10px;margin-bottom:10px;" border="0" >
						</a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" style="margin-left:10px" ><?php echo $ten; ?></a>
					</td>
					<td align="center" >
						<?php echo $gia; ?>
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
		<td colspan="5" align="center" >
			<br>
			<?php 
				for($i=1;$i<=$so_trang;$i++)
				{
					$link_phan_trang="?thamso=quan_ly_san_pham&id_menu=".$id_menu."&trang=".$i;
					echo "<a href='$link_phan_trang' class='phan_trang' >";
						echo $i;
					echo "</a> ";
				}
			?>
			<br><br>
		</td>
	</tr>
</table>