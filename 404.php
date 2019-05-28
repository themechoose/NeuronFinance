<?php 
/*
	Template Name: Home Front Page
 */
get_header(); ?>

<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
<section>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 search-result">
					<h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'neuron' ); ?></h1>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'neuron' ); ?></p>
					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					    <label>
					        <input type="search" class="search-field form-control"
					            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ); ?>"
					            value="<?php echo get_search_query() ?>" name="s"
					            title="<?php echo esc_attr_x( 'Search for:', 'label' ); ?>" />
					    </label>
					    <input type="submit" class="search-submit"
					        value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
					</form>
			</div>
		</div>
	</div>
		
	</section><!-- slider area end -->

<?php get_template_part( 'template-part/promo') ?>
	
	<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="block-text">
						<h2><?php echo cs_get_option('content_section_titile'); ?></h2>
						<p><?php echo cs_get_option('content_section_content'); ?></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="block-img">
						<?php
						$content_section_img_id = cs_get_option('content_section_img');
						$content_section_img = wp_get_attachment_image($content_section_img_id, 'large');
							echo $content_section_img;
						?>
					</div>
				</div>
			</div>
		</div>
	</section><!-- block area end -->
	
<?php get_template_part('template-part/services'); ?>
<?php get_template_part('template-part/client'); ?>

	<?php get_footer(); ?>