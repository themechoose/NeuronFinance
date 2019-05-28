<?php get_header(); ?>
<!-- ::::::::::::::::::::: start breadcrumb:::::::::::::::::::::::::: -->
<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- breadcrumb content -->
				<div class="page-breadcrumbd">
					<h2>News &amp; Press</h2>
					<p><a href="<?php echo site_url();?>">Home</a> / <?php the_title(); ?></p>
				</div><!-- end breadcrumb content -->
			</div>
		</div>
	</div>
</section><!-- end breadcrumb -->

<!-- ::::::::::::::::::::: single-blog section:::::::::::::::::::::::::: -->
<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- post wrapper -->
				<div class="post-wrapper clearfix">
					<?php while(have_posts()): the_post(); ?>
						<!-- post thumbnail -->
						<div class="single-thumb">
							<?php the_post_thumbnail(); ?>
						</div>

						<!-- start single blog content -->
						<div class="blog-content">
							<!-- start single blog header -->
							<header class="single-header">
								<div class="single-post-title">
									<?php the_title('<h2>', '</h2>'); ?>
								</div>
								<!-- post meta -->
								<div class="post-meta">
									<ul>
										<li>
											<i class="fa fa-user"></i>
											<a href="<?php echo get_the_author_link(); ?> "> <?php the_author(); ?></a>
										</li>
										<li>
											<i class="fa fa-tag"></i>
											<?php the_tags(' ', ' | ', '<br/>'); ?>
										</li>
										<li>
											<i class="fa fa-calendar"></i>
											<?php the_time('d M Y'); ?>
										</li>
										<li>
											<i class="fa fa-comment"></i>
											<?php comments_popup_link( 'No comments', '1 comment', '% comments', 'comments-class', 'Comment is disabled'); ?>
										</li>
									</ul>
								</div>
							</header><!-- /.end single blog header -->

							<!-- start single blog entry content -->
							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- /.end single blog entry content -->

							<!-- start social link -->
							<div class="social-link">
								<ul>
									<li><a class="facebook" href="#">
										<i class="fa fa-facebook"></i>
										<span>1.6k</span>
									</a></li>
									<li><a class="twitter" href="#">
										<i class="fa fa-twitter"></i>
										<span>1.6k</span>
									</a></li>
									<li><a class="google" href="#">
										<i class="fa fa-google-plus"></i>
										<span>1.6k</span>
									</a></li>
									<li><a class="linkedin" href="#">
										<i class="fa fa-linkedin"></i>
										<span>1.6k</span>
									</a></li>
									<li><a class="pinterest" href="#">
										<i class="fa fa-pinterest-p"></i>
										<span>400</span>
									</a></li>
									<li><a class="reddit" href="#">
										<i class="fa fa-reddit-alien"></i>
										<span>400</span>
									</a></li>
									<li><a class="message" href="#">
										<i class="fa fa-envelope"></i>
										<span>400</span>
									</a></li>
								</ul>
							</div><!-- /.end social link -->

						</div><!-- /.end single blog content -->


						<div class="comments-responsed-wrapper">
							<!-- post comments -->
							<div class="comments-media">
									<?php
									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) {
										comments_template();
									}
									?>
							</div>
						</div>
						
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section><!-- ./end single-blog section -->

<?php get_footer(); ?>