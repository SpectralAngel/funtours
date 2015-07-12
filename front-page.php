<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
	<style type="text/css">
		html {
			margin-top: 0 !important;
		}
	</style>
</head>
<body>
<div class="page">
	<header>
		<div class="header_panel">
			<div class="container">
				<div class="brand col-md-6" data-equal-group="5">
					<h1 class="brand_name">
						<a href="<?php home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
					</h1>
					<p class="brand_slogan">Guide</p>
				</div>
				<div class="booking_wr">
					<?php
					if(is_active_sidebar('front-page-form')){ ?>
					<div class="booking-form">
						<?php dynamic_sidebar('front-page-form'); ?>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="camera_container">
			<div id="camera" class="camera_wrap">
				<div
					data-src="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_slide01.jpg">
					<div class="camera_caption fadeIn"></div>
				</div>
				<div
					data-src="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_slide02.jpg">
					<div class="camera_caption fadeIn"></div>
				</div>
				<div
					data-src="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_slide03.jpg">
					<div class="camera_caption fadeIn"></div>
				</div>
			</div>
		</div>
	</header>
	<main>
		<section class="well bg-color1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php
						if(is_active_sidebar('front-page-first-text')){ ?>
							<div id="front-page-first-text" class="text-center">
								<?php dynamic_sidebar('front-page-first-text'); ?>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="product-list">
						<?php $posts = get_posts(array(
							'posts_per_page' => 3,
							'category_name' => 'destacados'
						));
						foreach ( $posts as $post ) : setup_postdata( $post ); ?>
							<div class="col-md-4">
								<div class="col-md-12 wow product fadeInLeft">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
									<div class="description">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<p class="text-center"><?php the_excerpt(); ?></p>
									</div>
								</div>
							</div>
						<?php endforeach;
						wp_reset_postdata();?>
					</div>
				</div>
				<div class="row">
					<?php
					if(is_active_sidebar('front-page-second-text')){ ?>
						<div>
							<?php dynamic_sidebar('front-page-second-text'); ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<section class="well2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="text-center">News & events</h2>
						<p class="txt1 text-center">Penepre henderitui in ea
							voluptate velit
							eslertase quam nihil molestiae consequatur.</p>
					</div>
				</div>
				<div class="row off2">
					<?php $posts = get_posts(array(
						'posts_per_page' => 2,
						'category_name' => 'linea-1'
					));
					foreach ( $posts as $post ) : setup_postdata( $post ); ?>
					<article class="col-md-6 wow fadeInRight">
						<div class="row">
							<div class="col-md-6">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class' => 'mg-add')); ?></a>
							</div>
							<div class="col-md-6">
								<div class="time"></div>
								<h5 class="primary">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h5>

								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
					</article>
					<?php endforeach;
					wp_reset_postdata();?>
				</div>
				<div class="row">
					<?php $posts = get_posts(array(
						'posts_per_page' => 2,
						'category_name' => 'linea-2'
					));
					foreach ( $posts as $post ) : setup_postdata( $post ); ?>
						<article data-wow-delay=".4s" class="col-md-6 wow fadeInRight">
							<div class="row">
								<div class="col-md-6">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class' => 'mg-add')); ?></a>
								</div>
								<div class="col-md-6">
									<div class="time"></div>
									<h5 class="primary">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h5>

									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						</article>
					<?php endforeach;
					wp_reset_postdata();?>
				</div>
				<div class="row">
					<?php $posts = get_posts(array(
						'posts_per_page' => 2,
						'category_name' => 'linea-3'
					));
					foreach ( $posts as $post ) : setup_postdata( $post ); ?>
						<article data-wow-delay=".4s" class="col-md-6 wow fadeInRight">
							<div class="row">
								<div class="col-md-6">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class' => 'mg-add')); ?></a>
								</div>
								<div class="col-md-6">
									<div class="time"></div>
									<h5 class="primary">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h5>

									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						</article>
					<?php endforeach;
					wp_reset_postdata();?>
				</div>
			</div>
		</section>
		<section class="gallery">
			<a href="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_img08_original.jpg"
			   data-fancybox-group="1" class="thumb">
				<img
					src="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_img08.jpg"
					alt="">
				<span class="thumb_overlay"></span>
				<span class="thumb_overlay_cnt">sauntmagni dolores</span>
			</a>
			<a href="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_img09_original.jpg"
			   data-fancybox-group="1" class="thumb">
				<img
					src="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_img09.jpg"
					alt="">
				<span class="thumb_overlay"></span>
				<span class="thumb_overlay_cnt">lement velursu</span>
			</a>
			<a href="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_img10_original.jpg"
			   data-fancybox-group="1" class="thumb">
				<img
					src="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_img10.jpg"
					alt="">
				<span class="thumb_overlay"></span>
				<span class="thumb_overlay_cnt">edaty fenanec</span>
			</a>
			<a href="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_img11_original.jpg"
			   data-fancybox-group="1" class="thumb">
				<img
					src="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_img11.jpg"
					alt="">
				<span class="thumb_overlay"></span>
				<span class="thumb_overlay_cnt">sauntmagni dolores</span>
			</a>
			<a href="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_img12_original.jpg"
			   data-fancybox-group="1" class="thumb">
				<img
					src="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_img12.jpg"
					alt="">
				<span class="thumb_overlay"></span>
				<span class="thumb_overlay_cnt">lement velursu</span>
			</a>
			<a href="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_img13_original.jpg"
			   data-fancybox-group="1" class="thumb">
				<img
					src="<?php bloginfo( 'template_directory' ); ?>/template/images/page-1_img13.jpg"
					alt="">
				<span class="thumb_overlay"> </span>
				<span class="thumb_overlay_cnt">sauntmagni dolores</span>
			</a>
		</section>
		<section class="well ins1">
			<div class="container">
				<h2 class="text-center">Top Destinations</h2>
				<p class="txt1 text-center">Selum quidolorem eum fugiatuo
					voluptas
					nulla parenim admin sciporiosam nasaerasi.</p>
				<ul class="pricing-table row">
					<?php $posts = get_posts(array(
						'posts_per_page' => 4,
						'category_name' => 'top'
					));
					foreach ( $posts as $post ) : setup_postdata( $post ); ?>
					<li data-equal-group="1" data-wow-delay=".3s"
					    class="col-md-3 wow fadeInLeft">
						<div class="inner-price">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<div class="price"><?php the_title(); ?></div>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="link">More</a>
						</div>
					</li>
					<?php endforeach;
					wp_reset_postdata();?>
				</ul>
			</div>
		</section>
		<div class="row">
			<section
				data-url="<?php bloginfo( 'template_directory' ); ?>/template/images/parallax1.jpg"
				data-mobile="true" class="well3 text-center parallax col-md-12">
				<h2>Luxury travel</h2>

				<h3>Just got a little bit cheaper</h3>
				<a href="#" class="btn">More</a>
			</section>
		</div>
	</main>
	<footer class="mobile-center">
		<div class="container">
			<div class="row">
				<div class="col-md-4 middle-align">
					<ul class="inline-list">
						<li><a href="#" class="fa-twitter"></a></li>
						<li><a href="#" class="fa-google-plus"></a></li>
						<li><a href="#" class="fa-facebook"></a></li>
						<li><a href="#" class="fa-rss"></a></li>
					</ul>
				</div>
				<div class="col-md-3 middle-align">
					<address>28 Jackson Blvd Ste 1020 Chicago<br/> IL 60604-2340
					</address>
				</div>
				<div class="col-md-5 middle-align">
					<a href="mailto:#" class="fa-envelope">info@demolink.org</a>

					<div class="copyright"> © <span id="copyright-year"></span>
						| All rights reserved
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<script
	src="<?php bloginfo( 'template_directory' ); ?>/template/js/script.js"></script>
</body>
</html>
