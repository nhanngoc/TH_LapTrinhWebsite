<?php 
	if(!isset($bien_bao_mat)){exit();}
?>

<?php 
	$so_dong_tren_mot_trang=10;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}	

	$sql="select count(id) from san_pham where trang_chu='co' ";

	$tam=$conn->query($sql);
	$data=$tam->fetch();
	$so_trang=ceil($data[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$sql="select id,ten,gia,hinh_anh,sap_xep_trang_chu from san_pham where trang_chu='co' order by sap_xep_trang_chu desc limit $vtbd,$so_dong_tren_mot_trang";

	$tam=$conn->query($sql);
?>

<form method="post" >
	<table width="990px" class="tb_a1" >
		<tr style="background:#CCFFFF;height:40px;" >
			<td width="120px" ><b>Hình ảnh</b></td>
			<td width="450px" ><b>Tên</b></td>
			<td align="center" width="140px" ><b>Giá</b></td>
			<td align="center" width="140px" ><b>Trang chủ</b></td>
			<td align="center" width="140px" ><b>Thứ tự</b></td>		
		</tr>
		<?php 
			$i=1;
			while($data=$tam->fetch())
			{
				$id=$data['id'];
				$ten=$data['ten'];
				$gia=$data['gia'];
				$gia=number_format($gia,0,",",".");
				$link_hinh="../hinh_anh/san_pham/".$data['hinh_anh'];
				$sap_xep_trang_chu=$data['sap_xep_trang_chu'];
				$ten_select="select_".$i;
				$ten_input="input_".$i;
				$ten_id="id_".$i;
				?>
					<tr class="a_1" >
						<td align="center" >
							<img src="<?php echo $link_hinh; ?>" style="width:100px;margin-top:10px;margin-bottom:10px;" border="0" >
						</td>
						<td>
							<?php echo $ten; ?>
						</td>
						<td align="center" >
							<?php echo $gia; ?>
						</td>
						<td align="center" >
							<select name="<?php echo $ten_select; ?>" >
								<option value="" >Không</option>
								<option value="co" selected >Có</option>
							</select>
						</td>
						<td align="center" >
							<input value="<?php echo $sap_xep_trang_chu; ?>" style="width:50px" name="<?php echo $ten_input; ?>" >
							<input  type="hidden" value="<?php echo $id; ?>" name="<?php echo $ten_id; ?>" >
						</td>					
					</tr>
				<?php				
				$i++;
			}
		?>
		<tr>
			<td colspan="3" align="center" >
				&nbsp;
			</td>
			<td colspan="2" align="center" >
				<br>
				<input type="submit" name="bieu_mau_san_pham_trang_chu" value="Cập nhật" style="width:180px;height:50px;font-size:24px" >
				<br><br>
			</td>			
		</tr>
		<tr>
			<td colspan="5" align="center" >
				<br>
				<?php 
					for($i=1;$i<=$so_trang;$i++)
					{
						$link_phan_trang="?thamso=san_pham_trang_chu&trang=".$i;
						echo "<a href='$link_phan_trang' class='phan_trang' >";
							echo $i;
						echo "</a> ";
					}
				?>
				<br><br>
			</td>
		</tr>
	</table>
</form>