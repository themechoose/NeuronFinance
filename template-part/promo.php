	<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
	<section class="section-padding darker-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
					<div class="intro-title text-center">
						<h2><?php echo cs_get_option('promo_section_titile'); ?></h2>
						<div class="hidden-xs">
							<p><?php echo cs_get_option('promo_section_content'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php 
				$promo_args = array(
						// Choose ^ 'any' or from below, since 'any' cannot be in an array
					'post_type' => 'promos',
					'posts_per_page'	=> 6,
					'post_status' => array(
						'publish',
						'future',
					),
						// Order & Orderby Parameters
					'order'               => 'ASC',
					'orderby'             => 'menu_order',
					'ignore_sticky_posts' => false,
				);
				
				$promo_query = new WP_Query( $promo_args );
				?>

				<?php
				if($promo_query -> have_posts()):
					while($promo_query -> have_posts()) :
						$promo_query -> the_post(); ?>

						<!-- single intro -->
						<div class="col-md-4">
							<div class="single-intro">
								<div class="intro-img" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>');"></div>
								<div class="intro-details text-center">
									<?php the_title('<h3>', '</h3>'); ?>
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					<?php endwhile; else: ?>
					<p>No promo post avale available</p>
				<?php endif; ?>
			</div>
		</div>
	</section><!-- intro area end -->