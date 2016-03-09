<!-- ▼header -->
<header>
	<div id="header" class="block-full">
		<?php if( is_home() || is_front_page() ) : ?>
		<h1 id="header-logo">ブランド品・宝石・ブランド腕時計の高価買取
			<img src="<?php echo get_template_directory_uri() ?>/common/images/common/img_logo.png" alt="URERU" title="ウレル ロゴ"></h1>
		<?php else : ?>
		<div id="header-logo">ブランド品・宝石・ブランド腕時計の高価買取
			<img src="<?php echo get_template_directory_uri() ?>/common/images/common/img_logo.png" alt="ウレル" title="ウレル ロゴ"></div>
		<?php endif; ?>
	</div>

	<ul id="gnavi" class="navi">
		<li><a href="<?php echo home_url(); ?>">サイトトップ</a></li>
		<li><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
		<li><a href="<?php echo home_url(); ?>/shop/omiya/">店舗紹介</a></li>
	</ul>
</header>
<!-- ▲header -->

