<?php /*
	
@package sunsettheme

*/

get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div class="container">
				
				<?php 
					
					if( have_posts() ):
						
						while( have_posts() ): the_post();

							get_template_part( 'template-parts/content', 'page' );
						
						endwhile;
						
					endif;
                
				?>
				
			</div><!-- .container -->
			
		</main>
	</div><!-- #primary -->
	
<?php get_footer(); ?>