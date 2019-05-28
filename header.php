
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
	
	<style type="text/css" media="screen">
		<?php echo cs_get_option('custom_code_editor'); ?>
</style>
</head>
<body <?php body_class(); ?>>
	<?php
		// Header top switcher for hide header top
		$header_top_switch = cs_get_option( 'header_top_switch' );
		// Header top left site
		$header_top_left = cs_get_option( 'header_top_left' );
		// Header top right side
		$header_top_socials = cs_get_option( 'header_top_social' );
	?>

	<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
	<header style="background-image: url('<?php header_image(); ?>');">
		<!-- start top bar -->
		<?php if($header_top_switch): ?>

			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 hidden-xs">
							<div class="contact">
								<?php 
								if(!empty($header_top_left)):
									foreach ($header_top_left as $header_top_left_key): ?>
									<p>
										<i class="<?php echo $header_top_left_key['header_top_icon']; ?>"></i>
										<?php echo $header_top_left_key['header_top_text']; ?>
								</p>
								<?php endforeach; endif; ?>
							</div><!-- /.contact -->
						</div><!-- /.col-sm-8 -->

						<div class="col-sm-4">
							<div class="social-icon">
								<ul>
									<?php
									if(!empty($header_top_socials)):
										foreach($header_top_socials as $header_top_social):
											?>
											<li>
												<a href="<?php echo $header_top_social['header_top_social_url']; ?>" target="_blank">
													<i class="<?php echo $header_top_social['header_top_social_icon']; ?>"></i>
												</a>
											</li>
										<?php endforeach; else: ?>
											<p>Plese select social icon from theme options</p>
									<?php endif; ?>
									</ul>
								</div><!-- /.social-icon -->
							</div><!-- /.col-sm-4 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- end top bar -->
			<?php endif; ?>

			<!-- Start Navigation -->
			<nav class="navbar navbar-default navbar-sticky bootsnav">
				<!-- Start Top Search -->
				<div class="top-search">
					<div class="container">
						<div class="input-group">
								<!-- <input type="text" class="form-control" placeholder="Search"> -->
								<span class="input-group-addon"><i class="fa fa-search"></i></span>
								<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <label>
                  <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Type keyword to search..', 'placeholder' ); ?>" value="<?php echo get_search_query() ?>" name="s"
                  title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                </label>
              </form>
							<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
						</div>
					</div>
				</div>
				<!-- End Top Search -->
				<div class="container">
					<!-- Start Atribute Navigation -->
					<div class="attr-nav">
						<ul>
							<li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
									<i class="fa fa-shopping-bag"></i>
									<span class="badge">2</span>
								</a>
								<ul class="dropdown-menu cart-list">
									<li>
										<a href="#" class="photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/cart-1.jpg" class="cart-thumb" alt="" /></a>
										<h2><a href="#">Denim SlimFit Shirt </a></h2>
										<p>2x - <span class="price">$19.99</span></p>
									</li>
									<li>
										<a href="#" class="photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/cart-3.jpg" class="cart-thumb" alt="" /></a>
										<h2><a href="#">Denim Polo Shirt</a></h2>
										<p>2x - <span class="price">$12.99</span></p>
									</li>
									<li class="total">
										<span class="pull-right"><strong>Total</strong>: $320.00</span>
										<a href="#" class="btn btn-primary btn-sm btn-cart">Cart</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- End Atribute Navigation -->

					<!-- Start Header Navigation -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
							<i class="fa fa-bars"></i>
						</button>
						<?php
						$logo_id = cs_get_option( 'neuron_logo' );
						$neuron_logo = wp_get_attachment_image_src( $logo_id, 'full' );
						if(!empty($logo_id)):
							?>
							<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
								<img src="<?php echo $neuron_logo[0]; ?>" alt="logo">
							</a>
							<?php else: ?>
								<a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('title-tag'); ?></a>
							<?php endif; ?>
						</div>
						<!-- End Header Navigation -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu-container" id="navbar-menu">
							<?php
							if(function_exists('wp_nav_menu')) {
								wp_nav_menu(
									array(
										'menu'            => 'header-menu',
										'menu_class'      => 'nav navbar-nav navbar-right',
										'menu_id'         => 'header-menu',
										'container'       => 'ul',
										'container_class' => 'menu-container',
										'container_id'    => 'navbar-menu',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'theme_location'  => 'header-menu'
									)
								);
							}
							?>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
				<!-- End Navigation -->
				<div class="clearfix"></div>
			</header> <!-- end header -->
