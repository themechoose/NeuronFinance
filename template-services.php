<?php
/*
		Template Name: Services Template
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

		<?php get_template_part('template-part/services'); ?>

		<!-- ::::::::::::::::::::: Block Content :::::::::::::::::::::::::: -->
		<section class="block block2">
			<div class="container">
				<div class="row">
					<!-- block image -->
					<div class="col-md-6">
						<div class="block-img">
							<?php
								$services_promo_img = cs_get_option('services_promo_img');
								if(!empty($services_promo_img)):
							?>
							<img src="<?php echo wp_get_attachment_url($services_promo_img, 'large'); ?>" alt="services-promo-img">
						<?php endif; ?>
						</div>
					</div>
					<!-- block content -->
					<div class="col-md-6">
						<div class="block-text">
							<h2><?php echo cs_get_option('services_promo_title'); ?></h2>
							<p><?php echo cs_get_option('services_promo_content'); ?></p>
						</div>
					</div>
					
				</div>
			</div>
		</section><!-- block area end -->
		<?php get_footer(); ?>