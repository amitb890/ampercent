<?php get_header();?>

	<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content blog-single" style="padding-top:20px;">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<!-- Content Area -->
						<div class="col-xl-8 col-lg-8 col-md-6 col-12 content-area">
							<article class="type-post">
								<div class="entry-content" style="margin-top:0px;">
									<div class="entry-header">
										<?php if ( have_posts() ) : ?>
											<?php while ( have_posts() ) : the_post();?>
									<h3 class="entry-title" style="font-size:30px;">
										<?php the_title();?></h3>
									</div>
														
									<?php the_content(); ?>
									
									<div class="entry-footer">
										<div class="tags"><?php the_tags( '#', '#', '' ); ?>
										</div>
									<?php endwhile; ?>
								<?php endif;?>
										<ul class="social">
											<span class="share_article">Like the article? Share it!</span>
											<li><a target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><i class="fa fa-facebook" style="color:#3b5998;"></i></a></li>
											<li><a href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"><i class="fa fa-twitter" style="color:#55acee;"></i></a></li>
										</ul>
									</div>
								</div>
							</article>
							<!-- Related Post -->
							


<!-- Start related posts -->
<?php $orig_post = $post;
global $post;
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$tag_ids = array();
foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
$args=array(
'tag__in' => $tag_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=>4, // Number of related posts that will be shown.
'caller_get_posts'=>1
);
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {

echo '<div class="related-post" style="padding-top:5px;"><h3>Related articles</h3><div class="related-post-block">';

while( $my_query->have_posts() ) {
$my_query->the_post(); ?>

<div class="related-post-box"><a href="<? the_permalink()?>"><?php the_post_thumbnail(); ?></a>
<h3><a href="<? the_permalink()?>" rel="bookmark"><?php the_title(); ?></a></h3></div>
<? }
echo '</div></div>';
}
}
$post = $orig_post;
wp_reset_query(); ?>							
								
								
<!-- End related posts -->




<!-- Start comments -->							
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post();?>
							<?php if( comments_open() || get_comments_number() ) {
                    comments_template();
                }
							?>
							
								<?php endwhile; ?>
								<?php endif;?>
<!-- End Comments -->
						</div><!-- Content Area /- -->
							<?php include 'sidebar.php';?>
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Content /- -->
			
		</main>
		
	</div>	




<?php include 'footer.php';?>