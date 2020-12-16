
<?php 
	$sql="select * from loai order by id";
	$tam=$conn->query($sql);

	echo "<div class='loai' >";
	echo"<ul>";
	while($data=$tam->fetch())
	{
		$link="?thamso=xuat_san_pham_loai&id=".$data['id'];
		echo "<li><a href='$link'>";
			echo $data['ten'];
		echo "</a></li>";
	}
	echo"</ul>";
	echo "</div>";
?>