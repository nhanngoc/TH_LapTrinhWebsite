<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<form action="" method="post">
	<table width="990px" >
		<tr>
			<td colspan="2" ><b style="color:blue;font-size:20px" >Thêm loại</b><br><br> </td>
			
		</tr>
		<tr>
			<td width="150px" >Tên : </td>
			<td width="840px">
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ten" value="" >
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_them_loai" value="Thêm menu" style="width:200px;height:50px;font-size:24px" >
			</td>
		</tr>
	</table>
</form>