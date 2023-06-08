<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package puff
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;500;700&display=swap" rel="stylesheet">


<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Unbounded:wght@300;400;500;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	

	<header id="masthead" class="site-header">
		<div class="container-fluid">
			<div class="row">
				<div class="wraper">
					<div class="item">
						<?php $logo = get_field( 'logo', 'option' ); ?>
						<?php if ( $logo ) : ?>
							<a href="/" class="logo"><img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" /></a>
						<?php endif; ?>
					</div>
					<div class="item">
						<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'puff' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
					</div>
					<div class="item">
						  <ul class="search_panel">
						   	<li><a href="">Поиск</a></li>
						   		<li><a href="">Корзина</a></li>
						   			<li><a href="">Ro</a></li>
						   </ul>
					</div>
				</div>
				
			
			</div>
		</div>
		
	</header><!-- #masthead -->
