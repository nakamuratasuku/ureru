<!-- ▼footer -->
<footer>
	<div id="footer">
		<div class="pagetop"><a href="#pagetop"> <img src="<?php echo get_template_directory_uri() ?>/common/images/common/bt_pagetop.png" width="110" alt="ページトップへ"></a></div>
		<div id="header-logo">ブランド品・宝石・ブランド腕時計の高価買取
			<img src="<?php echo get_template_directory_uri() ?>/common/images/common/img_logo.png" alt="ウレル" title="ウレル ロゴ"></h1>
		</div>
		<ul id="bnavi" class="navi">
			<li><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
			<li><a href="<?php echo home_url(); ?>/shop/omiya/">店舗紹介</a></li>
		</ul>
		<small>Copyright 2016 &copy; ureru All Rights Reserved.</small>
	</div>
</footer>
<!-- ▲footer -->

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/common/js/jquery.heightLine.js"></script>
<script>
	$(function(){
		$(".soba-box li").heightLine();
		$("#gnavi").css("display","none");
		$("#bt-toggle").on("click", function() {
			$("#gnavi").slideToggle();
			$("#bt-toggle").toggleClass("active");
		});
	});
</script>

</body>
</html>