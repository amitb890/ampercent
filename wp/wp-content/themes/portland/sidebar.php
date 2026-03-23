						<!-- Widget Area -->
						<div class="col-lg-4 col-md-6 widget-area">
							<!-- Widget : Popular Post -->
							<aside class="widget widget_latestposts">
								<h3 class="widget-title">Popular Posts</h3>
							<?php
							   global $post;
							   $args = array( 'numberposts' => 5, 'offset'=> 1, 'category' => 485 );
							   $myposts = get_posts( $args );
							   foreach( $myposts as $post ) : setup_postdata($post); ?>
										
								<div class="latest-content">
									<a href="<?php the_permalink(); ?>"><i>
										<div class="popular_post_sidebar">
											<?php the_post_thumbnail();?>
										</div>
									</i></a>
									<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
								</div>
							   <?php endforeach; ?>	
							</aside>
							<!-- Widget : Popular Post /- -->

							

							<!-- Widget : Categories -->
							<aside class="widget widget_categories text-center">
								<h3 class="widget-title">Topics</h3>
								<ul>
									<li><a href="https://www.ampercent.com/tag/android/">Android</a></li>
									<li><a href="https://www.ampercent.com/tag/ios/">iOS</a></li>
									<li><a href="https://www.ampercent.com/tag/windows/">Windows</a></li>
									<li><a href="https://www.ampercent.com/tag/mac/">MAC</a></li>
									<li><a href="https://www.ampercent.com/tag/software/">Software</a></li>
									<li><a href="https://www.ampercent.com/tag/internet/">Internet</a></li>
									<li><a href="https://www.ampercent.com/tag/web-apps/">Web Apps</a></li>
									
								</ul>
							</aside><!-- Widget : Categories /- -->
							

							<?Php if( is_single() ) { ?>
								<!-- Widget : Latest Post -->
								<aside class="widget widget_latestposts">
									<h3 class="widget-title">Recently Published</h3>
									<?php $the_query = new WP_Query( 'posts_per_page=10' ); ?>
									<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
									<div class="latest-content">
										<a href="#">
											<i>
												<div class="sidebar_recent_post">
												<?php the_post_thumbnail();?>
												</div>
											</i>
										</a>
										<h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
									</div>
								<?php endwhile;
									wp_reset_postdata();
								?>
								</aside>
								<!-- Widget : Latest Post /- -->
							<?Php } ?>

							
							
							<!-- Widget : Follow Us -->
							<aside class="widget widget_social">
								<h3 class="widget-title">FOLLOW US</h3>
								<ul>
									<li><a rel="nofollow" href="https://www.facebook.com/ampercent" title=""><i class="ion-social-facebook" style="color: #3b5998;"></i></a></li>
									<li><a rel="nofollow" href="https://www.twitter.com/ampercent" title=""><i class="ion-social-twitter" style="color:#55acee;"></i></a></li>
									<li><a href="https://www.ampercent.com/feed/" title=""><i class="ion-social-rss" style="color:#ffbb52;"></i></a></li>
									
								</ul>
							</aside><!-- Widget : Follow Us /- -->
							<!-- Widget : Newsletter -->
							<aside class="widget widget_newsletter">
								<h3 class="widget-title">Newsletter</h3>
								<div class="newsletter-box">
									<i class="ion-ios-email-outline"></i>
									<h4>Get The Free Email Newsletter</h4>
									<p>Get the Latest posts and news in your Inbox </p>
									<form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=ampercent', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
										<input type="text" name="email" class="form-control" placeholder="Enter Your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your email address'"  />
										<input type="hidden" value="ampercent" name="uri"/>
		<input type="hidden" name="loc" value="en_US"/>
										<input type="submit" value="Subscribe For Free" />
									</form>
								</div>
							</aside><!-- Widget : Newsletter /- -->
							
						</div><!-- Widget Area /- -->