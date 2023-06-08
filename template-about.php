<?php
/**
* Template name: шаблон О нас
*/
get_header();
?>
<div class="contact_page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?php the_title(); ?></h2>
				<div class="breadcrumbs">
					<?php true_breadcrumbs(); ?>
				</div>
			</div>
		
		</div>
	</div>
</div>

<div class="about_page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="about_slider">
					<?php if ( have_rows( 'slider' ) ) : ?>
	<?php while ( have_rows( 'slider' ) ) : the_row(); ?>
			  <div><?php $slider_img = get_sub_field( 'slider_img' ); ?>
		<?php if ( $slider_img ) : ?>
			<img src="<?php echo esc_url( $slider_img['url'] ); ?>" alt="<?php echo esc_attr( $slider_img['alt'] ); ?>" /></div>
			  	<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // No rows found ?>
<?php endif; ?>
			 
			</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();