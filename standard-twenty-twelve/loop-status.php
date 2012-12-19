<?php
/**
 * The template for displaying status post formats.
 * 
 * @package Standard
 * @since 	3.0
 * @version	3.0
 */
?>
<?php /* Main Loop */ ?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'post format-status' ); ?>>

	<div class="post-header clearfix">
		<div class="row-fluid">
				<div class="post-avatar span2">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
				</div><!-- /.post-avatar -->
				<div class="span10 clearfix">
					<?php the_author_posts_link(); ?>
				</div>
				<div class="span10 clearfix">
					<a href="<?php the_permalink(); ?>"><span class="the-time updated"><?php the_time( get_option( 'date_format' ) ); ?></span></a>
				</div><!-- /.span10 -->
		</div><!-- /row-fluid -->
	</div> <!-- /.post-header -->
	
	<div class="entry-content clearfix">
		<?php if( ( is_category() || is_archive() || is_home() ) && has_excerpt() ) { ?>
			<?php the_excerpt( ); ?>
			<a href="<?php echo get_permalink(); ?>"><?php _e( 'Continue Reading...', 'standard' ); ?></a>
		<?php } else { ?>
			<?php the_content( __( 'Continue Reading <span class="meta-nav">→</span>', 'standard' ) ); ?>
		<?php } // end if/else ?>
	</div><!-- /.entry-content -->
					
	<div class="post-meta clearfix">

			<div class="meta-date-cat-tags pull-left">
				This entry was posted 
				<?php $category_list = get_the_category_list( __( ', ', 'standard' ) ); ?>
				<?php if( $category_list ) { ?>
					<?php printf( '<span class="the-category">' . __( 'in %1$s', 'standard' ) . '</span>', $category_list ); ?>
				<?php } // end if ?>
				<?php $tag_list = get_the_tag_list( '', __( ', ', 'standard' ) ); ?>
				<?php if( $tag_list ) { ?>
					<?php printf( '<span class="the-tags">' . __( '%1$s', 'standard' ) . '</span>', $tag_list ); ?>
				<?php } // end if ?>
				
			</div><!-- /meta-date-cat-tags -->
			
			<div class="meta-comment-link pull-right">
				<a class="pull-right post-link" href="<?php the_permalink(); ?>" title="<?php esc_attr_e( 'permalink ', 'standard' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/icn-permalink.png' ); ?>" alt="<?php esc_attr_e( 'permalink ', 'standard' ); ?>" /></a>
				<?php if ( '' != get_post_format() ) { ?>
					<span class="the-comment-link"><?php comments_popup_link( __( 'Leave a reply', 'standard' ), __( '1 Reply', 'standard' ), __( '% Replies', 'standard' ), '', ''); ?></span>
				<?php } // end if ?>
			</div><!-- /meta-comment-link -->

	</div><!-- /.post-meta -->
	
</div> <!-- /#post- -->