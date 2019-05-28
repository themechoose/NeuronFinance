	<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
	<footer>
		<div class="primary-footer">
			<div class="container">
				<div class="row">
					<!-- start single footer widget -->
					<div class="col-sm-6 col-md-4">
						<?php if ( is_active_sidebar( 'footer_widget_about' ) ) : ?>
							<?php dynamic_sidebar( 'footer_widget_about' ); ?>
							<?php else : ?>
								<p>Please add a footer widget</p>
							<?php endif; ?>
						</div><!-- end single footer widget -->

						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-2">
							<?php if ( is_active_sidebar( 'footer_widget_link' ) ) : ?>
								<?php dynamic_sidebar( 'footer_widget_link' ); ?>
								<?php else : ?>
									<p>Please add a footer widget</p>
								<?php endif; ?>
							</div><!-- end single footer widget -->

							<!-- start single footer widget -->
							<div class="col-sm-6 col-md-3">
								<?php if ( is_active_sidebar( 'footer_widget_post' ) ) : ?>
								<?php dynamic_sidebar( 'footer_widget_post' ); ?>
								<?php else : ?>
									<p>Please add a footer widget</p>
								<?php endif; ?>
							</div><!-- end single footer widget -->

							<!-- start single footer widget -->
							<div class="col-sm-6 col-md-3">
								<?php if ( is_active_sidebar( 'footer_widget_subscribe' ) ) : ?>
								<?php dynamic_sidebar( 'footer_widget_subscribe' ); ?>
								<?php else : ?>
									<p>Please add a footer widget</p>
								<?php endif; ?>
							</div><!-- end single footer widget -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.primary-footer -->

				<!-- footer copyright area -->
				<div class="copyright-wrapper text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<?php 
									// $footer_copyright = cs_get_option( 'footer_copyright' );
								?>
								<p> <?php echo cs_get_option( 'footer_copyright' ); ?>
								<?php if(cs_get_option('footer_copyright_woner_switch')): ?>
									<a href="<?php echo cs_get_option('footer_copyright_woner_link'); ?>" target="_blank">
										<?php echo cs_get_option('footer_copyright_woner'); ?>
									</a>
								<?php endif; ?>
								</p>
							</div>
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- ./end copyright-wrapper -->
			</footer>

			<!-- preloader -->
			<div id="loading">
				<div id="loading-center">
					<div id="loading-center-absolute">
						<div class="object" id="object_four"></div>
						<div class="object" id="object_three"></div>
						<div class="object" id="object_two"></div>
						<div class="object" id="object_one"></div>
					</div>
				</div>
			</div>

			<?php wp_footer(); ?>
		</body>
		</html>