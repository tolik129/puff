<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vacacars
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W528M73');</script>
	<!-- End Google Tag Manager -->
	
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
	<link rel="icon" href="https://www.victorycars.com.ua//favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="https://www.victorycars.com.ua//favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W528M73"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
<?php wp_body_open(); ?>
<div class="heder_phone">
	<div class="container">
		<div class="wraper">
			<div class="items">
				<i class="fa fa-map-marker"></i> <?php the_field( 'adress' ); ?> 
			</div>
			<div class="items">
				
				<a href="tel:+380505373729">
					<i class="fa fa-phone"></i> <?php the_field( 'phone' ); ?>
				</a>
				</div>
			<div class="items">
				<!--<?php $insa = get_field( 'insa' ); ?>
				<?php if ( $insa ) : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inst.png" alt=""><a href="<?php echo esc_url( $insa['url'] ); ?>" target="<?php echo esc_attr( $insa['target'] ); ?>">
						<?php echo esc_html( $insa['title'] ); ?></a>
				<?php endif; ?> -->
			</div>
			<div class="items_mob">
			<?php
              if ( function_exists('pll_the_languages') ) {
                pll_the_languages(array('dropdown'=>1, 'show_flags'=>1, 'show_names'=>0));
              }
            ?>
			</div>
		</div>
	</div>
</div>

<nav>
	<div class="container">
		<div class="wraper">
			<div class="item">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php $logo = get_field( 'logo' ); ?>
					<?php if ( $logo ) : ?>
						<img class="logo_mob" src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
					<?php endif; ?>
				</a>
			</div>
			<div class="item">
                <a href="#" class="mnu">
                	<img class="car-form" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu.svg" alt="">
                </a>
                <div class="wrap_menu">
                	<?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id'=>'menu_slide', 'menu_class'=>'main')); ?>
			        <?php wp_nav_menu(array('theme_location' => 'menu-3',  'menu_class'=>'main')); ?>
                </div>
				

			</div>
			<div class="item item_mob">
				<a href="#contact" class="zapis"><?php the_field( 'zapis' ); ?></a>
			</div>
		</div>
	</div>
</nav>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WDQ8NK5QL4">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WDQ8NK5QL4');
</script>
