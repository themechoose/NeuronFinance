<?php 
/*
		Template Name: Contact Template
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

		<!-- ::::::::::::::::::::: start contant section :::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
						<!-- contact title -->
						<div class="template-title text-center">
							<h2><?php echo cs_get_option('contact_section_title'); ?></h2>
							<p><?php echo cs_get_option('contact_section_content'); ?></p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-8">
						<?php
							if(!empty(cs_get_option('contact_form_short_code'))):
								echo do_shortcode( cs_get_option('contact_form_short_code') );
							endif;
						?>
					</div>

					<div class="col-md-4">
						<!-- company address -->
						<div class="company-address">
							<ul>
								<?php
									$contact_address = cs_get_option('contact_address');
									if(!empty($contact_address)):
									foreach($contact_address as $contact_addres):
								?>
								<li>
									<i class="<?php echo $contact_addres['contact_icon']; ?>"></i>
									<p><?php echo $contact_addres['contact_text']; ?></p>

								</li>
							<?php endforeach; endif; ?>
								</ul>
							</div><!-- ./end company address -->
						</div>
					</div>
				</div>
			</section>
			<?php get_footer(); ?>