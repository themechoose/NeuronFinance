<?php 
/*
	Template Name: Home Front Page
 */
get_header(); ?>

<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
<section class="slider-area">
	<?php 
		$slider_args = array(
			'post_type'				=> 'sliders',
			'post_status' 		=> 'publish',
			'order'         	=> 'ASC',
			'orderby'       	=> 'menu_order',
			'posts_per_page'	=> 10
		);
		$slider_query = new WP_Query( $slider_args );
	?>

	<?php 
				if($slider_query -> have_posts()):
				while($slider_query -> have_posts()) :
					$slider_query -> the_post();

				// custom fields
				$slider_options = get_post_meta(get_the_ID(), 'neuron_slider_options', true);

				// Slider button text
				if(array_key_exists('slider_btn', $slider_options)) {
					$slider_btn_text = $slider_options['slider_btn'];
				} else {
					$slider_btn_text = 'Meet Experts';
				}
				
				// Slider button url
				if(array_key_exists('slider_btn_url', $slider_options)) {
					$slider_btn_url = $slider_options['slider_btn_url'];
				} else{
					$slider_btn_url = 'https://www.yourlink.com';
				}

				// Slider button url target
				if(array_key_exists('slider_btn_url_target', $slider_options)) {
					$slider_btn_url_target = $slider_options['slider_btn_url_target'];
					if($slider_btn_url_target) {
						$slider_btn_url_target = '_blank';
					} else {
						$slider_btn_url_target = '_self';
					}
				} else{
					$slider_btn_url_target = '_self';
				}
			?>
			<!-- slide item one -->
			<div class="homepage-slider" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>');">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-sm-7">
									<div class="slider-content">
										<?php the_title('<h1>','</h1>'); ?>
										<?php the_content(); ?>
										<a href="<?php echo $slider_btn_url; ?>" target="<?php echo $slider_btn_url_target; ?>">
											<?php echo $slider_btn_text; ?> <i class="fa fa-long-arrow-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; else: ?>
			<p><?php _e( 'Sorry, no slider matched your criteria.', 'neuron' ); ?></p>
		<?php endif; ?>
		
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