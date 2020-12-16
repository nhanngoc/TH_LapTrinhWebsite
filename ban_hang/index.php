<?php
session_start();
include("ket_noi.php");
include("chuc_nang/ham.php");
if (isset($_POST['thong_tin_khach_hang'])) {
	include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
}
if (isset($_POST['cap_nhat_gio_hang'])) {
	include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
	trang_truoc();
}
?>
<html>

<head>
	<title>Website Bán Đầm</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" type="image/png" href="images/favicon.ico" />
</head>

<body>
	<div id="container">
		<center>
			<table width="100%">
				<tr>
					<td colspan="3"><?php include("subpage/header.php"); ?>
					</td>
					<div id="templatemo_menu">
						<?php
						include "subpage/menu.php";
						?>
					</div> <!-- end of menu -->
				</tr>

				<tr>
					<td colspan="3" height="50px">
						<?php
						include("chuc_nang/menu_ngang.php");
						?>
					</td>
				</tr>
				
				<tr>
					<td width="150px" valign="top">
						<?php
						
						//include("chuc_nang/san_pham/moi.php"); 
						//include("chuc_nang/quang_cao/trai.php"); 
						?>
					</td>
					<td width="1000px" valign="top">
						<?php
						include("chuc_nang/dieu_huong.php");
						?>
					</td>
					<td width="150px" valign="top">

					</td>
				</tr>
				<tr>
					<td colspan="3" height="50px">
						<?php include("subpage/footer.php"); ?></td>
				</tr>
			</table>
		</center>
	</div>
</body>

</html>