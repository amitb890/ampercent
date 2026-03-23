	<!-- Footer Main -->
	<footer class="container-fluid no-left-padding no-right-padding footer-main footer-section1">
		<!--div class="container-fluid no-left-padding no-right-padding subscribe-block">
		
			<div class="container">
				<h3>Subscribe</h3>
				<p>Subscribe to a newsletter to receive latest post and updates</p>
				<form class="newsletter">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Enter your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email address'" />
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="button">subscribe for free</button>
						</span>
					</div>
				</form>
			</div>
		</div-->

		<!-- Trending Section -->
			<div class="container-fluid no-left-padding no-right-padding trending-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3><b>Trending Now</b></h3>
					</div><!-- Section Header /- -->
					<div class="trending-carousel">
						<?php
							$args=array(
							'tag_id' => 1315,
							'orderby' => rand,
							'post_type' => 'post',
							'post_status' => 'publish',
							'posts_per_page' => 8,
							'caller_get_posts'=> 1
							);
							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
								<div class="type-post">
									<div class="entry-cover">
										<a href="<?php the_permalink(); ?>">
											<div class="trending_thumbnail">
												<?php the_post_thumbnail();?>
											</div>
											
										</a>
									</div>
									<div class="entry-content">
										<div class="entry-header">
											<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										</div>
									</div>
								</div>
								<?php
									$name = get_post_meta($my_query->post->ID, 'WritersName', true);
									if ($name){
									echo 'Writers name: ' .$name;
									}
									endwhile;
									}
									wp_reset_query();
								?>
					</div>
				</div><!-- Container /- -->
			</div><!-- Trending Section /- -->

<!-- Container -->
		<div class="container">
			<div class="copyright">
				<p>© Copyright 2020. All rights reserved.</p>
			</div>
		</div><!-- Container /- -->
	</footer><!-- Footer Main /- -->
<script src="https://www.ampercent.com/wp/wp-content/themes/portland/assets/js/combined.js"></script>
<script src="https://www-ampercent-com.exactdn.com/wp/wp-content/plugins/ewww-image-optimizer-cloud/includes/lazysizes.min.js?ver=481.0"></script>
</body>
</html>