<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package spilka
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

<div class="news_page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?php the_title(); ?></h2>
				<?php the_post_thumbnail(); ?>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>	


<div class="interesting">
	<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h2>Вам также может быть интересно:</h2>
				</div>
			<div class="col-lg-12">
				<div class="interest_slider">
				 <?php
				         $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
				         $news = new WP_Query( array(
					         'post_type' => 'novosti',
					         'paged' => $paged
				         ));
				         if ( $news->have_posts() ) :
	         			while ( $news->have_posts() ) : $news->the_post(); ?>

			            <div>
			            	 <?php echo get_the_post_thumbnail(get_the_ID(), 'news-thumb'); ?>
			            	 <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
							<div class="exc">
								<?php
								$maxchar = 152;
								$text = strip_tags( get_the_content() );
								echo mb_substr( $text, 0, $maxchar );
								?>
							</div>
			             </div>
			  	  <?php endwhile;
				         wp_reset_postdata();
				         else :
				         echo "Нет постов";
				         endif; ?>
			 
			</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
