<?php get_header();?>
<!-- experiment -->
      <div class="container-fluid no-left-padding no-right-padding slider-section slider-section2" style="padding-top:10px;">
        <!-- Container -->

        <div class="container">
          <div id="slider-section2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-lg-8 col-sm-12 post-block post-big">
<?php $i = 1;?>
<?php $catquery = new WP_Query( 'tag_id=1316&posts_per_page=6' ); ?> 
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
<?php if ($i == 1) { ?>
   <div class="post-box">
                      <div style="width:770px;height:500px;"><?php the_post_thumbnail('large');?>	  </div>
                      <div class="entry-content">
                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                        
                      </div>
                    </div>
                    </div>
                  <div class="col-lg-4 col-sm-12 post-block post-thumb">
<?php } elseif ($i == 2) { ?>

               <div class="post-box">
                      <div style="width:396px;height:248px;"><?php the_post_thumbnail('large');?>	  </div>
                      <div class="entry-content">
                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    
                      </div>
                    </div>
<?php } elseif ($i == 3) { ?>
                 <div class="post-box">
                     <div style="width:396px;height:248px;"><?php the_post_thumbnail('large');?>	  </div>
                      <div class="entry-content">
                        
                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                       
                      </div>
                    </div>
					  </div>
					</div>
				</div>
<?php } elseif ($i == 4) { ?>
					  <div class="carousel-item">
								<div class="row">
									<div class="col-lg-8 post-block post-big">
										<div class="post-box">
											 <div style="width:770px;height:500px;"><?php the_post_thumbnail('large');?>	  </div>
											<div class="entry-content">
												<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
												
											</div>
										</div>
									</div>
									<div class="col-lg-4 post-block post-thumb">
<?php } elseif ($i == 5) { ?>
<div class="post-box">
											<div style="width:396px;height:248px;"><?php the_post_thumbnail('large');?>	  </div>
											<div class="entry-content">
												
												<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
												
											</div>
										</div>									
<?php } else { ?>
	<div class="post-box"><div style="width:396px;height:248px;"><?php the_post_thumbnail('large');?>	  </div>
											<div class="entry-content">
												
												<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
												
											</div>
										</div>										
 </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- Container -->
      </div>
      <!-- Slider Section /- --> 									
<?php } ?>
    <?php $i++; ?>
<?php endwhile;
    wp_reset_postdata();
?>
<!-- end of experiment -->
     
      <!-- Page Content -->
      <div class="container-fluid no-left-padding no-right-padding page-content">
        <!-- Container -->
        <div class="container">
          <div class="row">
            <!-- Content Area -->
            <div class="col-lg-8 col-md-6 content-area">
              <!-- Row -->
              <div class="row">
                <?php if ( have_posts() ) : ?>
                  <?php while ( have_posts() ) : the_post(); ?>
                  <div class="col-lg-6 col-md-12 col-sm-6">
                    <div class="type-post">
                      <div class="entry-cover">
                        <div class="post-meta">
                          <span class="post-date"><a href="<?php the_permalink();?>"><?php the_time('l, F jS, Y') ?></a></span>
                        </div>
                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('large');?></a>
                      </div>
                      <div class="entry-content">
                        <div class="entry-header">  
                          <span class="post-category"><?php the_tags( '', ', ', '' ); ?></span>
                          <h3 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                        </div>
                        <?php the_excerpt();?>
                        <a href="<?php the_permalink();?>" title="Read More">Read more</a>
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
            <?php include 'sidebar.php';?>
          </div>
        </div><!-- Container /- -->
      </div><!-- Page Content /- -->
      
    </main>
    
  </div>
  

<?php get_footer();?>

