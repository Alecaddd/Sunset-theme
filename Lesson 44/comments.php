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
				'avatar_size'		=> 32,
				'reverse_top_level' => null,
				'reverse_children'	=> '',
				'format'			=> 'html5',
				'short_ping'		=> false,
				'echo'				=> true
			);
			
			wp_list_comments( $args );
		?>
		
	</ol>
	
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