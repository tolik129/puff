<?php
/**
* Template name: шаблон главная
*/
get_header();
?>

<div class="baner">
	<div class="container">
		<div class="col-lg-6">
			<h1><?php the_field( 'title_baner' ); ?></h1>
			<h4><?php the_field( 'descript_baner' ); ?></h4>
		</div>
		<div class="col-lg-6">
			<?php $baner_img = get_field( 'baner_img' ); ?>
			<?php if ( $baner_img ) : ?>
				<img src="<?php echo esc_url( $baner_img['url'] ); ?>" alt="<?php echo esc_attr( $baner_img['alt'] ); ?>" />
			<?php endif; ?>
		</div>
	</div>
</div>



<div class="popular_item">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3><?php the_field( 'title_tovar' ); ?></h3>
			</div>
		</div>
		<div class="row">
			<div class="product">
			  <div>your content</div>
			  <div>your content</div>
			  <div>your content</div>
			   <div>your content</div>
			  <div>your content</div>
			  <div>your content</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-lg-12">
				<?php $see_all = get_field( 'see_all' ); ?>
				<?php if ( $see_all ) : ?>
					<a href="<?php echo esc_url( $see_all['url'] ); ?>" target="<?php echo esc_attr( $see_all['target'] ); ?>"><?php echo esc_html( $see_all['title'] ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="baner_two">
	<div class="container-fluid">
		<div class="row">
			<div class="wraper">
				<div class="item item_ferst">
					<h2>
						<?php the_field( 'title_2' ); ?>
					</h2>
					<p><?php the_field( 'text' ); ?></p>
					<?php $shop = get_field( 'shop' ); ?>
					<?php if ( $shop ) : ?>
						<a href="<?php echo esc_url( $shop['url'] ); ?>" target="<?php echo esc_attr( $shop['target'] ); ?>"><?php echo esc_html( $shop['title'] ); ?></a>
					<?php endif; ?>
				</div>
				<div class="item item_second">
					<?php $img_ban_2 = get_field( 'img_ban_2' ); ?>
					<?php if ( $img_ban_2 ) : ?>
						<img src="<?php echo esc_url( $img_ban_2['url'] ); ?>" alt="<?php echo esc_attr( $img_ban_2['alt'] ); ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="popular_item">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3><?php the_field( 'title_nov' ); ?></h3>
			</div>
		</div>
		<div class="row">
			<div class="product_2">
			  <div>your content</div>
			  <div>your content</div>
			  <div>your content</div>
			   <div>your content</div>
			  <div>your content</div>
			  <div>your content</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-lg-12">
				<?php $see_all = get_field( 'see_all' ); ?>
				<?php if ( $see_all ) : ?>
					<a href="<?php echo esc_url( $see_all['url'] ); ?>" target="<?php echo esc_attr( $see_all['target'] ); ?>"><?php echo esc_html( $see_all['title'] ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>















<?php get_footer();