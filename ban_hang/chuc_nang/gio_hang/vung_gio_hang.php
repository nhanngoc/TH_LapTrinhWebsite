<?php
$so_luong = 0;
if (isset($_SESSION['id_them_vao_gio'])) {
	for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {
		$so_luong = $so_luong + $_SESSION['sl_them_vao_gio'][$i];
	}
}
?>
<div class="shopping_cart">
	<div class="shopping">
		<span><a href="?thamso=gio_hang"><img src="images/shopping.png" alt="" title="View shopping cart" /></a></span>
		</a>
	</div>
	<div class="cart">
		<a href="?thamso=gio_hang">
			<span class="cart_title"><?php echo $so_luong;?></br><p class="san_pham">San pham</p></span>
		</a>
	</div>
</div>