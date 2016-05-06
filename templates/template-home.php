<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post();
	$image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
	?>
	<section class="ba-main " style="background-image: url('<?php echo $image; ?>'); background-size:cover">

		<div class="ba-notify text-left row" >
			<a href="<?php bloginfo('url'); ?>" class="ba-logo"><img src="<?php echo get_header_image(); ?>" alt="<?php bloginfo('name'); ?>"/></a>
			<?php the_content(); ?>
			<a href=" <?php the_field('download_ios')?>" class="button  text-center ba-button_ios">
				<i class="fa fa-apple" aria-hidden="true"></i>
			</a>
			<a href=" <?php the_field('download_android')?>" class="button  text-center ba-button_ios">
				<i class="fa fa-android" aria-hidden="true"></i>
			</a>
			<a href=" <?php the_field('download_windows')?>" class="button  text-center ba-button_ios">
				<i class="fa fa-windows" aria-hidden="true"></i>
			</a>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
</section>

<?php

$serviceArgs = array(
	'post_type'=>'service',
	'posts_per_page'=>3
	);


	?>
	<section class="ba-services row">

		<?php $service = new WP_Query($serviceArgs);?>
		<?php if($service->have_posts()): ?>
			<?php while($service->have_posts()): $service->the_post() ?>
				<div class="columns medium-4 ba-service__item text-center">
					<div> <?php the_post_thumbnail();  ?></div>
					<h3><?php the_title( );  ?></h3>
					<?php the_content();  ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif;?>

	</section>

	<section class="ba-form">
		<div class="row">
			<div class="columns medium-6 text-left">
				<h3 class="ba-form_title">
					<?php echo get_field('form_title'); ?>
				</h3>
				<p>
					<?php the_field('form_text'); ?>
				</p>
				<?php echo do_shortcode( '[contact-form-7 id="29" title="notify-form"]' ); ?>
			</div>
			<div class="columns medium-6">
				<div class="ba-video">
					<?php the_field('form_video'); ?>
				</div>
			</div>
		</div>
	</section>

<section class="ba-reviews">
	<div class="row">
		<div class="columns">
			<?php echo home_slider_template(); ?>
		</div>
	</div>
</section>
	<div class="row">
		<div class="columns">

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<i class="fa fa-user"></i>
		</div>
	</div>

	<?php get_footer(); ?>
