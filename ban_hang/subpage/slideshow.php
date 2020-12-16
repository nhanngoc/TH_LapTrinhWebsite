<style type="text/css" >
	.slideshow img {
		width:100%;
		height:450px;
		
	
	}
</style>
<center>
<div class="slideshow" id="slideshow" >
	<?php 
		$sql="select hinh,lien_ket from slideshow order by id";
		$tam=$conn->query($sql);
		while($data= $tam->fetch())
		{
			$link_hinh="hinh_anh/slideshow/".$data['hinh'];
			echo "<a href='".$data['lien_ket']."'>";
				echo "<img src='".$link_hinh."'>";
			echo "</a>";
		}
	?>
</div>
</center>
<script type="text/javascript" >

	var i_img=0;
	var div_slideshow=document.getElementById("slideshow");
	var img_slideshow=div_slideshow.getElementsByTagName("img");
	for(var i=0;i<img_slideshow.length;i++)
	{
		img_slideshow[i].style.display="none";
	}
	img_slideshow[0].style.display="block";
	
	setInterval(function(){
		img_slideshow[i_img].style.display="none";
		i_img=i_img+1;
		if(i_img>=img_slideshow.length){i_img=0;}
		img_slideshow[i_img].style.display="block";		
	},5000);
</script>