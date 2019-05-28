<?php 
/*
		Template Name: About Template
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

		<!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
		<section class="block about-us-block section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<!-- block text -->
						<div class="block-text">
							<h2><?php echo cs_get_option('about_content_title'); ?></h2>
							<p><?php echo cs_get_option('about_content_content'); ?></p>
						</div>
					</div>
					<div class="col-md-6">
						<!-- block image -->
						<div class="block-img">
							<?php echo wp_get_attachment_image(cs_get_option('about_content_img'),'large'); ?>
							<!-- <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about-us-block.jpg" alt="" /> -->
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
		
		<?php get_template_part( 'template-part/promo') ?>

		<!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
		<section class="accordian-section section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="accorian-item">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

								<?php
								$accordion_contents = cs_get_option('accordion_contents');
								if(!empty($accordion_contents)):
									$faq_num = 0;
									foreach($accordion_contents as $accordion_content): 
										$faq_num++;
										if($faq_num == 1) {
											$faq_in = 'in';
											$faq_expand = 'true';
										} else {
											$faq_in = ' ';
											$faq_expand = 'false';
										}
										?>
										<!-- accordian item-1 -->
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="heading-<?php echo $faq_num; ?>">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $faq_num; ?>" aria-expanded="<?php echo $faq_expand; ?>" aria-controls="collapse-<?php echo $faq_num; ?>">
														<?php echo $accordion_content['accordion_title']; ?>
													</a>
												</h4>
											</div>
											<div id="collapse-<?php echo $faq_num; ?>" class="panel-collapse collapse <?php echo $faq_in; ?>" role="tabpanel" aria-labelledby="heading-<?php echo $faq_num; ?>">
												<div class="panel-body">
													<?php echo $accordion_content['accordion_content']; ?>
												</div>
											</div>
										</div>
									<?php endforeach; else: ?>
										<p>Please insert content from theme option</p>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<!-- accordian right text block -->
							<div class="accordian-right-content">
								<h2><?php echo cs_get_option('accordian_right_title'); ?></h2>
								<p><?php echo cs_get_option('accordian_right_content'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</section><!-- end accordian section -->
			<?php 
				if(cs_get_option('about_client_hide')):
						get_template_part('template-part/client');
				endif;
			?>

			<?php get_footer(); ?>