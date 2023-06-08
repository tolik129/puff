<?php
/**
* Template name: шаблон контакты
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

<div class="contact_content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?php the_field( 'shops' ); ?></h2>
				<?php $map = get_field( 'map' ); ?>
				<?php if ( $map ) : ?>
					<img src="<?php echo esc_url( $map['url'] ); ?>" alt="<?php echo esc_attr( $map['alt'] ); ?>" />
				<?php endif; ?>
			</div>
			<div class="col-lg-12">
				<h2><?php the_field( 'adress' ); ?></h2>
			</div>
		</div>
		<div class="wraper">
			<?php if ( have_rows( 'adresess' ) ) : ?>
	         <?php while ( have_rows( 'adresess' ) ) : the_row(); ?>
	         	<div class="item">
	         		<?php the_sub_field( 'content' ); ?>
	         	</div>
	         		<?php endwhile; ?>
				<?php else : ?>
					<?php // No rows found ?>
				<?php endif; ?>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<h3><?php the_field( 'title_contact' ); ?></h3>
				<div class="phone"><?php the_field( 'phone' ); ?></div>
				<?php $phone_link = get_field( 'phone_link' ); ?>
<?php if ( $phone_link ) : ?>
	<a href="<?php echo esc_url( $phone_link['url'] ); ?>" target="<?php echo esc_attr( $phone_link['target'] ); ?>"><?php echo esc_html( $phone_link['title'] ); ?></a>
<?php endif; ?>
				<div class="mail"><?php the_field( 'mail' ); ?></div>
				<?php $mail_link = get_field( 'mail_link' ); ?>
<?php if ( $mail_link ) : ?>
	<a href="<?php echo esc_url( $mail_link['url'] ); ?>" target="<?php echo esc_attr( $mail_link['target'] ); ?>"><?php echo esc_html( $mail_link['title'] ); ?></a>
<?php endif; ?>
				<div class="work"><?php the_field( 'work' ); ?></div>
				<span><?php the_field( 'work_2' ); ?></span>
			</div>
			<div class="col-lg-6">
				<?php the_field( 'form' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer();