<?php get_header();?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

			<div class="container-fluid no-left-padding no-right-padding page-content">

				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-md-8">
							<h1 style="font-weight:bold;margin-bottom:50px;">
								<?php the_title();?>
							</h1>
							<?php the_content();?>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Content /- -->
<?php endwhile;?>
<?php endif;?>
		</main>
	</div>

<?php get_footer();?>