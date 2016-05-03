<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>


<section class="ba-main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post();
		$image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
		?>
		<div class="ba-notify text-left" style="background-image: url('<?php echo $image; ?>'); background-size:cover">
			<a class="ba-logo"></a>
			<?php the_content(); ?>
			<a href=" <?php the_field('baner_button_link')?>" class="button  text-center">
				<?php the_field('baner_button_text') ?>
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
		<?php endif;?>

	</section>

	<section class="ba-form row">
		<div class="columns">
			<div class="columns medium-6">

			</div>
			<div class="columns medium-6">

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
