<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<form action="" method="post" enctype="multipart/form-data" >
	<table width="990px" >
		<tr>
			<td colspan="2" ><b style="color:blue;font-size:20px" >Thêm sản phẩm</b><br><br> </td>
			
		</tr>
		<tr>
			<td width="150px" >Tên : </td>
			<td width="840px">
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ten" value="" >
			</td>
		</tr>
		<tr>
			<td>Danh mục : </td>
			<td>
				<?php
					if(!isset($_SESSION['danh_muc_menu']))
					{
						$_SESSION['danh_muc_menu']="";
					}
				?>
				<select name="danh_muc" style="margin-top:3px;margin-bottom:3px;" >
					<?php 
						$sql="select * from loai order by id ";
						$tam=$conn->query($sql);
						$a="";
						
						while($data=$tam->fetch())
						{
							$ten=$data['ten'];
							$id_menu=$data['id'];
							if($_SESSION['danh_muc_menu']==$id_menu)
							{
								$a="selected";
							}
							echo "<option value='$id_menu' $a >";
								echo $ten;
							echo "</option>";
							$a="";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td >Hình ảnh : </td>
			<td>
				<input type="file" name="hinh_anh" >
			</td>
		</tr>
		<tr>
			<td>Giá : </td>
			<td>
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="gia" value="" >
			</td>
		</tr>
		<tr>
			<td>Trang chủ : </td>
			<td>
				<?php
					$a_1="";
					$a_2="";
					if(isset($_SESSION['tuy_chon_trang_chu']))
					{
						if($_SESSION['tuy_chon_trang_chu']=="co")
						{
							$a_2="selected";
						}
					}
				?>
				<select name="trang_chu" style="margin-top:3px;margin-bottom:3px;" >
					<option value="" <?php echo $a_1; ?> >Không</option>
					<option value="co" <?php echo $a_2; ?> >Có</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nổi bật : </td>
			<td>
				<?php
					$a_1="";
					$a_2="";
					if(isset($_SESSION['tuy_chon_noi_bat']))
					{
						if($_SESSION['tuy_chon_noi_bat']=="co")
						{
							$a_2="selected";
						}
					}
				?>
				<select name="noi_bat" style="margin-top:3px;margin-bottom:3px;" >
					<option value="" <?php echo $a_1; ?> >Không</option>
					<option value="co" <?php echo $a_2; ?> >Có</option>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="top" >Nội dung : </td>
			<td>
				<script type="text/javascript">
				  tinymce.init({
					selector: '#noi_dung',
					theme: 'modern',
					width: 800,
					height: 400,
					plugins: [
					  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
					  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
					  'save table contextmenu directionality emoticons template paste textcolor jbimages'
					],
					toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons jbimages',
					relative_urls: false
				  });
				  
				  </script>
				  <textarea id="noi_dung" name="noi_dung" ></textarea>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_them_san_pham" value="Thêm sản phẩm" style="width:200px;height:50px;font-size:24px" >
			</td>
		</tr>
	</table>
</form>