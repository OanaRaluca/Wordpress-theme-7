<?php
defined('ABSPATH') or die("please don't runs scripts");

get_header(); ?>
  
<div class="wrap">
	<div class="container">
		<div class="col-md-8 blog">
				
			<?php if ( have_posts() ) :
				
				while ( have_posts() ) : the_post();
				
				get_template_part( 'content', 'page');
				
			// Previous/next post navigation.
			the_post_navigation( array(
				'screen_reader_text' => '' . __( 'Other Articles', 'social-magazine' ) . '',
				'next_text' => '<span class="post-title">'. __( '%title', 'social-magazine' ) .'</span>',
				'prev_text' => '<span class="post-title">'. __( '%title', 'social-magazine' ) .'</span>',
			) );				
				endwhile;
				
				else :
			
				get_template_part( 'content', 'none');
			
				endif; ?>
						
			</div><!-- /col-md-8 blog -->
		<?php get_sidebar(); ?>
		</div><!-- /container -->
<?php get_footer(); ?>
