<?php get_header(); ?>
<?php $options = get_option('inove_options'); ?>
<?php
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($author_name);
else :
$curauth = get_userdata(intval($author));
endif;
?>
<div class="box"><p align="center">
<?php if (is_category()) {printf( __('%1$s', 'inove'), single_cat_title('', false) );}
	 elseif(is_tag()) {
		printf( __('%1$s', 'inove'), single_tag_title('', false) );
	// If this is a daily archive
	} elseif (is_day()) {
		printf( __('Showing articles posted on %1$s', 'inove'), get_the_time(__('F jS, Y', 'inove')) );
	// If this is a monthly archive
	} elseif (is_month()) {
		printf( __('Showing articles posted in %1$s', 'inove'), get_the_time(__('F, Y', 'inove')) );
	// If this is a yearly archive
	} elseif (is_year()) {
		printf( __('Showing articles posted in %1$s', 'inove'), get_the_time(__('Y', 'inove')) );
	// If this is an author archive
	} elseif (is_author()) {
		_e('Author archive', 'inove');
	// If this is a paged archive
	} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
		_e('Blog Archives', 'inove');
	}
	?></p>
</div>

<?php if (is_category()) { ?>
<?php $description=category_description(); echo $description;  ?>
<?php } ?>
<?php if (is_author()) { ?>
<div class="box3">
<img class="alignleft" src="<?php echo $curauth->aim; ?>" width="70px" alt="" />
<p><?php echo $curauth->user_description; ?></p><br/>
<?php echo $curauth->first_name; ?> has posted the following articles in this site:
</div>
<?php } ?>



<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); update_post_caches($posts); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<div class="posthome">

	<div class="catauth">
	<ul class="caty">
		<li><a class="title" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
		<img src="<?php bloginfo('template_url'); ?>/phpthumb/phpThumb.php?src=<?php echo catch_that_image() ?>&w=200" alt=""/>

		</li>
	</ul>
	</div>
</div>
<div class="content">
<div class="fixed"></div>
</div>
</div>
<?php endwhile; ?>
<?php else : ?>
<div class="errorbox"><?php _e('Sorry, no posts matched your criteria.', 'inove'); ?></div>
<?php endif; ?>
	
<div id="pagenavi">
<?php if(function_exists('wp_pagenavi')) : ?><?php wp_pagenavi() ?>
<?php else : ?>
<span class="newer"><?php previous_posts_link(__('Newer Entries', 'inove')); ?></span>
<span class="older"><?php next_posts_link(__('Older Entries', 'inove')); ?></span>
<?php endif; ?>
<div class="fixed"></div>
</div>

<p>.</p>
<style type="text/css">
@import url(http://www.google.com/cse/api/branding.css);
</style>
<div class="cse-branding-right" style="background-color:#FFFFFF;color:#000000">
  <div class="cse-branding-form">
    <form action="http://www.ampercent.com/assets/search.htm" id="cse-search-box">
      <div>
        <input type="hidden" name="cx" value="partner-pub-9488645344700906:ig1yrt-1fai" />
        <input type="hidden" name="cof" value="FORID:10" />
        <input type="hidden" name="ie" value="ISO-8859-1" />
        <input type="text" name="q" size="31" />
        <input type="submit" name="sa" value="Search" />
      </div>
    </form>
  </div>
  <div class="cse-branding-logo">
    <img src="http://www.google.com/images/poweredby_transparent/poweredby_FFFFFF.gif" alt="Google" />
  </div>
  <div class="cse-branding-text">
    Custom Search
  </div>
</div>

<?php get_footer(); ?>