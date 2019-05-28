<?php get_header(); ?>
<!-- ::::::::::::::::::::: Page Title:::::::::::::::::::::::::: -->
<section class="page-title" <?php if(has_post_thumbnail()): ?> style="background-image: url('<?php the_post_thumbnail_url('large'); ?>');" <?php endif; ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- breadcrumb content -->
				<div class="page-breadcrumbd">
					<?php esc_html__(the_title('<h2>', '</h2>')); ?>
					<p><a href="<?php  echo site_url(); ?>">Home</a>  / <?php the_title(); ?></p>
				</div><!-- end breadcrumb content -->
			</div>
		</div>
	</div>
</section><!-- end breadcrumb -->


<!-- start portfolio single -->
<section class="single-portfolio-wrapper section-padding">
	<div class="container">
		<div class="row">
			<?php
			if(have_posts()):
				while(have_posts()): the_post(); 
					$work_details = get_post_meta(get_the_ID(), 'neuron_works_options', true);

				// work category / subtitle
					if(array_key_exists('work_category', $work_details)) {
						$work_category = $work_details['work_category'];
					} else {
						$work_category = 'Default';
					}

				// work details big image
					if(array_key_exists('work_details_img', $work_details)) {
						$work_details_img = $work_details['work_details_img'];
					}

				// work options
					if(array_key_exists('work_options', $work_details)) {
						$work_options = $work_details['work_options'];
					} else {
						$work_options = array();
					}

				// work social icons
					if(array_key_exists('work_social_icon', $work_details)) {
						$work_socials = $work_details['work_social_icon'];
					} else {
						$work_socials = array();
					}

				// work button switch
					if(array_key_exists('work_btn_switch', $work_details)) {
						$work_btn_switch = $work_details['work_btn_switch'];
					} else {
						$work_btn_switch = ' ';
					}

				// work btn text
					if(array_key_exists('work_btn_text', $work_details)) {
						$work_btn_text = $work_details['work_btn_text'];
					} else {
						$work_btn_text = 'Visit Website';
					}

				// work button url
					if(array_key_exists('work_btn_url', $work_details)) {
						$work_btn_url = $work_details['work_btn_url'];
					} else {
						$work_btn_url = 'https://www.google.com';
					}

				// Work button url target
					if(array_key_exists('work_btn_url_target', $work_details)) {
						$work_btn_url_target = $work_details['work_btn_url_target'];
						if($work_btn_url_target) {
							$work_btn_url_target = '_blank';
						} else {
							$work_btn_url_target = '_self';
						}
					} else{
						$work_btn_url_target = '_self';
					}

					?>
					<div class="col-md-8">
						<!-- single portfolio images -->
						<div class="single-portfolio-images">
							<?php 
								if(!empty($work_details_img)) {
										echo $work_big_img = wp_get_attachment_image($work_details_img, 'large', array('class' => 'img-fluid', 'alt' => 'work-img'));
								} else {
									the_post_thumbnail('large', array('class' => 'img-fludi', 'alt' => 'work-img'));
								}
							?>
						</div>
					</div>
					<div class="col-md-4">
						<!-- single portfolio info -->
						<div class="single-portfolio-inner">
							<header class="single-portfolio-title">
								<span><?php echo $work_category; ?></span>
							</header>
							<div class="portfolio-details-panel">
								<?php the_content(); ?>

								<ul class="portfolio-meta">
									<?php foreach ($work_options as $work_option): ?>
										<li>
											<span> <?php echo $work_option['option_title'] ?> </span> <?php echo $work_option['option_value'] ?>
										</li>
									<?php endforeach; ?>
									<li>
										<?php if(!empty($work_socials)): ?>
											<span> Share </span>
											<?php foreach ($work_socials as $work_social): ?>
												<a href="<?php echo $work_social['social_url']; ?>" target="_blank">
													<i class="<?php echo $work_social['social_icon']; ?>"></i>
												</a>
											<?php endforeach; endif; ?>
										</li>
									</ul>
								</div>
								<?php if($work_btn_switch): ?>
									<a class="btn btn-primary" href="<?php echo $work_btn_url; ?>" target="<?php echo $work_btn_url_target; ?>">
										<?php echo $work_btn_text; ?>
									</a>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</section>
		<?php get_footer(); ?>