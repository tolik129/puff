<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spilka
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container-fluid" id="contactu">
			<div class="wraper">
                <div class="item">
                    <h3><?php the_field( 'subscription', 'option' ); ?></h3>
                    <p><?php the_field( 'subscription_2', 'option' ); ?></p>
                </div>
                <div class="item">
                    <h3><?php the_field( 'info', 'option' ); ?></h3>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-2',
                                'menu_id'        => 'primary-footer',
                            )
                        );
                        ?>
                </div>
                <div class="item">
                    <h3><?php the_field( 'contact', 'option' ); ?></h3>
                    <ul class="contact">
                        <li>
                            <?php $mail = get_field( 'mail', 'option' ); ?>
                            <?php if ( $mail ) : ?>
                                <a href="<?php echo esc_url( $mail['url'] ); ?>" target="<?php echo esc_attr( $mail['target'] ); ?>"><?php echo esc_html( $mail['title'] ); ?></a>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php $phone = get_field( 'phone', 'option' ); ?>
                            <?php if ( $phone ) : ?>
                                <a href="<?php echo esc_url( $phone['url'] ); ?>" target="<?php echo esc_attr( $phone['target'] ); ?>"><?php echo esc_html( $phone['title'] ); ?></a>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php $inst = get_field( 'inst', 'option' ); ?>
                            <?php if ( $inst ) : ?>
                                <a href="<?php echo esc_url( $inst['url'] ); ?>" target="<?php echo esc_attr( $inst['target'] ); ?>"><?php echo esc_html( $inst['title'] ); ?></a>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php $fb = get_field( 'fb', 'option' ); ?>
                            <?php if ( $fb ) : ?>
                                <a href="<?php echo esc_url( $fb['url'] ); ?>" target="<?php echo esc_attr( $fb['target'] ); ?>"><?php echo esc_html( $fb['title'] ); ?></a>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php $telegram = get_field( 'telegram', 'option' ); ?>
                            <?php if ( $telegram ) : ?>
                                <a href="<?php echo esc_url( $telegram['url'] ); ?>" target="<?php echo esc_attr( $telegram['target'] ); ?>"><?php echo esc_html( $telegram['title'] ); ?></a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>         
            </div>
		</div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <script>
      $('.product').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>

    <script>
      $('.product_2').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>

   <script>
      $('.about_slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,

});
  </script>

   <script>
      $('.interest_slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,

});
  </script>
</body>
</html>
