<?php get_header();?>
			
			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<div class="row" style="width:100%;">
							<h3 class="tag_page_name"><?php single_tag_title(); ?></h3>
						</div>
						<!-- Content Area -->
						<div class="col-lg-12 col-md-12 content-area">
							<!-- Row -->
							<div class="row">
								
								<?php if ( have_posts() ) : ?>
									<?php while ( have_posts() ) : the_post(); ?>
								
								<div class="col-lg-4 col-md-6 col-sm-6">
									<div class="type-post">
										<div class="entry-cover">
											
											<a href="<?php the_permalink();?>">
											<div style="width:370px;height:247px;">
												<?php the_post_thumbnail();?>
												</div>
											</a>
										</div>
										<div class="entry-content">
											<div class="entry-header">	
												
												<h3 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
											</div>								
											<?php the_excerpt();?>
											<a href="<?php the_permalink();?>">Read More</a>
										</div>
									</div>
								</div>
								<?php endwhile; ?>
							<?php endif; ?>
							</div><!-- Row /- -->
							<!-- Pagination -->
							<?php wordpress_numeric_post_nav(); ?>
							<!-- Pagination /- -->
						</div><!-- Content Area /- -->
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Content /- -->
			
		</main>
		
	</div>

<?php get_footer();?>