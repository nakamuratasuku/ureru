<div class="block-full widthyou">
	<img src="<?php echo get_template_directory_uri() ?>/common/images/top/txt_btm_widthyou.png" alt="あなたもウレルで笑っていってください！">
</div>

<!-- ▼footer -->
<footer>
	<div id="footer">
		<div class="pagetop"><a href="#pagetop"> <img src="<?php echo get_template_directory_uri() ?>/common/images/common/bt_pagetop.png" width="110" alt="ページトップへ"></a></div>
		<div class="header-logo">ブランド品・宝石・ブランド腕時計の高価買取
			<img src="<?php echo get_template_directory_uri() ?>/common/images/common/img_logo.png" alt="ウレル" title="ウレル ロゴ"></h1>
		</div>
		<ul class="bnavi navi">
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
		$(".gnavi").css("display","none");
		$(".bt-toggle").on("click", function() {
			$(".gnavi").slideToggle();
			$(".bt-toggle").toggleClass("active");
		});
	});
</script>


<!-- Facebook Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','//connect.facebook.net/en_US/fbevents.js');
	​
	fbq('init', '1526238470987986');
	fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
			   src="https://www.facebook.com/tr?id=1526238470987986&ev=PageView&noscript=1"
	/></noscript>
<!-- End Facebook Pixel Code -->
​
​
<!-- yahooリターゲティングタグ -->
<script type="text/javascript" language="javascript">
	/* <![CDATA[ */
	var yahoo_retargeting_id = 'FI8BH1R9E2';
	var yahoo_retargeting_label = '';
	/* ]]> */
</script>
<script type="text/javascript" language="javascript" src="//b92.yahoo.co.jp/js/s_retargeting.js"></script>
​
<!-- リマーケティング タグの Google コード -->
<!--------------------------------------------------
リマーケティング タグは、個人を特定できる情報と関連付けることも、デリケートなカテゴリに属するページに設置することも許可されません。タグの設定方法については、こちらのページをご覧ください。
http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 1004906011;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
	<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1004906011/?value=0&amp;guid=ON&amp;script=0"/>
	</div>
</noscript>

<?php wp_head(); ?>
</body>
</html>