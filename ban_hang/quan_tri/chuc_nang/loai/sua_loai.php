<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$sql="select * from loai where id='$id' ";
	$tam=$conn->query($sql);
	$data=$tam->fetch();
	$ten=$data['ten'];
	$link_dong="?thamso=quan_ly_loai&trang=".$_GET['trang'];
?>
<form action="" method="post">
	<table width="990px" >
		<tr>
			<td width="180px" ><b style="color:blue;font-size:20px" >Sửa loại</b><br><br> </td>
			<td width="810px" align="right" >
				<a href="<?php echo $link_dong; ?>" class="lk_a1" style="margin-right:30px" >Đóng</a>
			</td>
		</tr>
		<tr>
			<td >Tên : </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ten" value="<?php echo $ten; ?>" >
			</td>
		</tr>		
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_sua_loai" value="Sửa menu" style="width:200px;height:50px;font-size:24px" >
			</td>
		</tr>
	</table>
</form>