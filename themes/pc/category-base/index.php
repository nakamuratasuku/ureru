<?php
/*
Template Name: category-base
*/
?>

<?php get_header('ureru'); ?>

<body>

<?php get_template_part('nav'); ?>

<div class="l-cat">
		<?php if(have_posts()): while(have_posts()): the_post();?>


			<?php get_template_part('category-template/first-box', get_post_format() ); ?>


		<header class="page-header">
			<div class="page-header__txt">
				<h1><?php the_title(); ?>買取のことならウレルへ</h1>
				<p><?php the_field('jewel_main-txt',$post_id); ?></p>
			</div>
			<div class="page-header__img">
				<?php
				$catimg = get_field('jewel_main-img',$post_id);
				$img = wp_get_attachment_image_src($catimg, 'thumbnail');
				?>
				<img src="<?php echo $img[0]; ?>" alt="<?php single_cat_title(); ?>" />
			</div>
		</header><!-- .page-header -->

		<h2>買取実績</h2>
		<ul class="cat_kaitori-jisseki">
			<li class="kaitori-jisseki_list">
				<?php
				$catimg = get_field('jewel_jisseki-img01',$post_id);
				$img = wp_get_attachment_image_src($catimg, 'thumbnail');
				?>
				<img src="<?php echo $img[0]; ?>" alt="<?php the_field('jewel_jisseki-ttl01',$post_id); ?>" />
				<p><?php the_field('jewel_jisseki-ttl01',$post_id); ?></p>
				<p><?php the_field('jewel_jisseki-type01',$post_id); ?></p>
				<p><?php the_field('jewel_jisseki-price01',$post_id); ?></p>
				<p><?php the_field('jewel_jisseki-txt01',$post_id); ?></p>

				<?php if(get_field('jewel_jisseki-ttl02',$post_id )): ?>
					<div><?php the_field('jewel_jisseki-ttl02',$post_id); ?></div>
				<?php endif; ?>
			</li>
		</ul>

			<div class="cat_txt">
				<?php the_content(); ?>
			</div>


	<?php endwhile; endif; ?>
</div>

<?php get_footer('ureru'); ?>