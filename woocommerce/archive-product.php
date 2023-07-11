<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<?php

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<div class="contact_page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?php woocommerce_page_title(); ?></h2>
				<div class="breadcrumbs">
					<?php true_breadcrumbs(); ?>
				</div>
			</div>
		
		</div>
	</div>
</div>



<header class="woocommerce-products-header">
	

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>






<div class="market">
	<div class="container-fluid">
		<button id="showHideContent" class="filter_btn">Фильтры</button>
		<div id="content" style="display:none;" class=" ">
	
		<div class="categories">
				<div class="item">
					<h4 class="categories__title">Категория</h4>
					<ul>
						<li>
							<a href=""></a>
							<div class="st-content">
								<div class="log__group">
									<input id="term_33" type="checkbox" name="category" value="33">
									<label for="">Поды</label>
								</div>
								<div class="log__group">
									<input id="term_33" type="checkbox" name="category" value="33">
									<label for="">Поды</label>
								</div>
								<div class="log__group">
									<input id="term_33" type="checkbox" name="category" value="33">
									<label for="">Поды</label>
								</div>
								<div class="log__group">
									<input id="term_33" type="checkbox" name="category" value="33">
									<label for="">Поды</label>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="item">
					<h4 class="categories__title">Бренд</h4>
					<ul>
						<li>
							<a href=""></a>
							<div class="st-content">
								<div class="log__group">
									<input id="term_33" type="checkbox" name="category" value="33">
									<label for="">ElfBar</label>
								</div>
								<div class="log__group">
									<input id="term_33" type="checkbox" name="category" value="33">
									<label for="">Balmy</label>
								</div>
								<div class="log__group">
									<input id="term_33" type="checkbox" name="category" value="33">
									<label for="">G-rolls</label>
								</div>
								<div class="log__group">
									<input id="term_33" type="checkbox" name="category" value="33">
									<label for="">Smoking</label>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="item">
					<h4 class="categories__title">Количество затяжек</h4>
					<ul>
						<li>
							<a href=""></a>
							<div class="st-content">
								<div class="log__group">
									<input id="term_33" type="checkbox" name="category" value="33">
									<label for="">800</label>
								</div>
								<div class="log__group">
									<input id="term_33" type="checkbox" name="category" value="33">
									<label for="">500</label>
								</div>
								<div class="log__group">
									<input id="term_33" type="checkbox" name="category" value="33">
									<label for="">1000</label>
								</div>
								<div class="log__group">
									<input id="term_33" type="checkbox" name="category" value="33">
									<label for="">1500</label>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="item">
					<a href="clear_all">Сбросить все</a>
				</div>
		</div>
	
	
	
	
</div>

	
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>
   </div>
</div>

<? get_footer( 'shop' );
