	<!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->
<?php 
$home_clients		= cs_get_option('home_clients');
if(!empty($home_clients)):
	?>
	<section class="client-logo">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="all-client-logo">
						<?php
						foreach($home_clients as $home_client):
							?>
							<a href="<?php echo $home_client['home_client_img_url']; ?>" target="_blank">
								<?php echo wp_get_attachment_image($home_client['home_client_img'], 'large'); ?>
							</a>
						<?php endforeach; ?>
					</div>
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- end client section -->
	<?php endif; ?>