<?php
/*
		Template Name: Portfolio Template
 */
		get_header(); ?>
		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<section class="page-title" <?php if(has_post_thumbnail()): ?> style="background-image: url('<?php the_post_thumbnail_url('large'); ?>');" <?php endif; ?>>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- breadcrumb content -->
						<div class="page-breadcrumbd">
							<?php the_title('<h2>', '</h2>') ?>
							<p><a href="<?php echo site_url();?>">Home</a> / <?php the_title(); ?></p>
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>
		</section><!-- end breadcrumb -->

		<!-- ::::::::::::::::::::: start portfolio section:::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
						<!-- portfolio title -->
						<div class="template-title text-center">
							<h2><?php echo cs_get_option('work_section_title'); ?></h2>
							<p><?php echo cs_get_option('work_section_content'); ?></p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<?php
					// Portfolio custom post query
					$work_args = array(
						// Type & Status Parameters
						'post_type'   => 'works',
						'post_status' => 'publish',
						// Order & Orderby Parameters
						'order'               => 'ASC',
						'orderby'             => 'menu_order',
						'ignore_sticky_posts' => false,
					);
					$work_query = new WP_Query( $work_args );
					?>
					<!-- portfolio item -->
					<?php
					while($work_query -> have_posts()):
						$work_query -> the_post();
						
							// Portfolio metabox
						$work_options = get_post_meta(get_the_ID(), 'neuron_works_options', true);
						if(array_key_exists('work_category', $work_options)) {
							$work_category = $work_options['work_category'];
						} else {
							$work_category = 'Default';
						}
						?>
						<div class="col-sm-6 col-md-4">
							<div class="portfolio-item">
								<?php the_post_thumbnail('large'); ?>
								<div class="portfolio-details">
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<span><?php echo $work_category; ?></span>
								</div><!-- /.portfolio-details -->
							</div><!-- /.portfolio-item -->
						</div>
					<?php endwhile;?>
				</div>
			</div>
		</section>
		
		<!-- ::::::::::::::::::::: testimonial section:::::::::::::::::::::::::: -->
		<section class="testimonial text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<h3><?php echo cs_get_option('testimonial_content'); ?></h3>
						<h4><?php echo cs_get_option('testimonial_title'); ?></h4>
						<span><?php echo cs_get_option('testimonial_sub_title'); ?></span>
					</div>
				</div>
			</div>
		</section><!-- ./end testimonial section -->
		<?php get_footer(); ?>