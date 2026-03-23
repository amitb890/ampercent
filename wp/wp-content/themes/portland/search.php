<?php get_header();?>
<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content blog-paralle-post-no-sidebar">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row justify-content-md-center">
						<!-- Content Area -->
						<div class="col-xl-10 col-lg-12 col-md-12 content-area">
							<!-- Row -->
							<div class="row">
								<div align="center" style="margin:0 auto;fontweoght:bold;margin-bottom:30px;">
									<h1 style="font-weight:bold;">Search Results</h1>						            
								</div>
								
								<?php while ( have_posts() ) : the_post(); ?>
								<div class="col-12 col-lg-12 col-md-6 col-sm-6 blog-paralle">
									<div class="type-post">
										<div class="entry-content" style="width:100%;">
											<div class="entry-header">	
												<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											</div>								
											<?php the_excerpt(); ?>
										</div>
									</div>
								</div>
								<?php endwhile; ?>
									
							</div><!-- Row /- -->
							
						</div><!-- Content Area -->
					</div><!-- Row /- -->
				</div><!-- Container /- -->
			</div><!-- Page Content /- -->
			
		</main>
		
	</div>

<?php get_footer();?>