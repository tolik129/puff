<?php
/**
* Template name: шаблон доставка и оплата
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

<div class="oplata_page">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2><?php the_field( 'oplata_title' ); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer();