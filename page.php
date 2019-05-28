<?php get_header(); ?>
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
<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block-text">
					<?php
					if(have_posts()):
						while(have_posts()):
							the_post();
							the_title('<h2>', '</h2>');
							the_content();
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section><!-- block area end -->

<?php get_footer(); ?>