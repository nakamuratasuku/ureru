<?php
/*
Template Name: brand
*/
?>

<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if(have_posts()): while(have_posts()): the_post();?>

		<header class="page-header">
			<div class="page-header__txt">
				<h1><?php the_title(); ?>買取のことならウレルへ</h1>
				<p><?php the_field('brand_main-txt',$post_id); ?></p>
			</div>
			<div class="page-header__img">
				<?php
				$catimg = get_field('brand_main-img',$post_id);
				$img = wp_get_attachment_image_src($catimg, 'thumbnail');
				?>
				<img src="<?php echo $img[0]; ?>" alt="<?php single_cat_title(); ?>" />
			</div>
		</header><!-- .page-header -->


		<h2>買取実績</h2>
		<ul class="cat_kaitori-jisseki">
			<li class="kaitori-jisseki_list">
				<?php
				$catimg = get_field('brand_jisseki-img01',$post_id);
				$img = wp_get_attachment_image_src($catimg, 'thumbnail');
				?>
				<img src="<?php echo $img[0]; ?>" alt="<?php the_field('brand_jisseki-ttl01',$post_id); ?>" />
				<p><?php the_field('brand_jisseki-ttl01',$post_id); ?></p>
				<p><?php the_field('brand_jisseki-type01',$post_id); ?></p>
				<p><?php the_field('brand_jisseki-price01',$post_id); ?></p>
				<p><?php the_field('brand_jisseki-txt01',$post_id); ?></p>

				<?php if(get_field('brand_jisseki-ttl02',$post_id )): ?>
					<div><?php the_field('brand_jisseki-ttl02',$post_id); ?></div>
				<?php endif; ?>
			</li>
		</ul>

	<?php endwhile; endif; ?>
	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>