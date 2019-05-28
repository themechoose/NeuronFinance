	<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
	<section class="section-padding darker-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
					<div class="template-title text-center">
						<h2><?php echo cs_get_option('services_section_titile'); ?></h2>
						<p><?php echo cs_get_option('services_section_content'); ?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<!-- single service -->
				<?php
				$service_args = array(
						// Type & Status Parameters
					'post_type'   => 'services',
					'posts_per_page'	=> 9,
					'post_status' => 'any',
					'post_status' => array(
						'publish',
						'future',
					),
						// Order & Orderby Parameters
					'order'               => 'ASC',
					'orderby'             => 'menu_order',
					'ignore_sticky_posts' => false,
				);
				
				$service_query = new WP_Query( $service_args );
				?>
				<?php if($service_query -> have_posts()): while($service_query -> have_posts()): $service_query -> the_post(); ?>
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<?php
							the_post_thumbnail('large', array('class' => 'hvr-buzz-out'));
							the_title('<h3>', '</h3>');
							the_content();
							?>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section><!-- end services section -->