<?php /*
	
@package sunsettheme

*/

if( post_password_required() ){
	return;
}

?>

<div id="comments" class="comments-area">
	
	<?php 
		if( have_comments() ):
		//We have comments
	?>
	
	<h2 class="comment-title">
		<?php
			
			printf(
				esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sunsettheme' ) ),
				number_format_i18n( get_comments_number() ),
				'<span>' . get_the_title() . '</span>'
			);
				
		?>
	</h2>
	
	<?php if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ): ?>
		
		<nav id="comment-nav-top" class="comment-navigation" role="navigation">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="post-link-nav">
						<span class="sunset-icon sunset-chevron-left" aria-hidden="true"></span> 
						<?php previous_comments_link( esc_html__( 'Older Comments', 'sunsettheme' ) ) ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 text-right">
					<div class="post-link-nav">
						<?php next_comments_link( esc_html__( 'Newer Comments', 'sunsettheme' ) ) ?>
						<span class="sunset-icon sunset-chevron-right" aria-hidden="true"></span>
					</div>
				</div>
			</div><!-- .row -->
		</nav>
		
	<?php endif; ?>
	
	<ol class="comment-list">
		
		<?php 
			
			$args = array(
				'walker'			=> null,
				'max_depth' 		=> '',
				'style'				=> 'ol',
				'callback'			=> null,
				'end-callback'		=> null,
				'type'				=> 'all',
				'reply_text'		=> 'Reply',
				'page'				=> '',
				'per_page'			=> '',
				'avatar_size'		=> 64,
				'reverse_top_level' => null,
				'reverse_children'	=> '',
				'format'			=> 'html5',
				'short_ping'		=> false,
				'echo'				=> true
			);
			
			wp_list_comments( $args );
		?>
		
	</ol>
	
	<?php if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ): ?>
		
		<nav id="comment-nav-bottom" class="comment-navigation" role="navigation">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="post-link-nav">
						<span class="sunset-icon sunset-chevron-left" aria-hidden="true"></span> 
						<?php previous_comments_link( esc_html__( 'Older Comments', 'sunsettheme' ) ) ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 text-right">
					<div class="post-link-nav">
						<?php next_comments_link( esc_html__( 'Newer Comments', 'sunsettheme' ) ) ?>
						<span class="sunset-icon sunset-chevron-right" aria-hidden="true"></span>
					</div>
				</div>
			</div><!-- .row -->
		</nav>
		
	<?php endif; ?>
	
	<?php 
		if( !comments_open() && get_comments_number() ):
	?>
		 
		 <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sunsettheme' ); ?></p>
		 
	<?php
		endif;
	?>
		
	<?php	
		endif;
	?>
	
	<?php comment_form(); ?>
	
</div><!-- .comments-area -->