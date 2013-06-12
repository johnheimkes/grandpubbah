<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

$blog_query = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => -1,
));

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php if ( $blog_query->have_posts() ) : ?>

				<?php toolbox_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    	<header class="entry-header">
                    		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

                    		<?php if ( 'post' == get_post_type() ) : ?>
                    		<div class="entry-meta">
                    			<?php toolbox_posted_on(); ?>
                    		</div><!-- .entry-meta -->
                    		<?php endif; ?>
                    	</header><!-- .entry-header -->

                    	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
                    	<div class="entry-summary">
                    		<?php the_excerpt(); ?>
                    	</div><!-- .entry-summary -->
                    	<?php else : ?>
                    	<div class="entry-content">
                    		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?>
                    		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
                    	</div><!-- .entry-content -->
                    	<?php endif; ?>

                    	<footer class="entry-meta">
                    		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                    			<?php
                    				/* translators: used between list items, there is a space after the comma */
                    				$categories_list = get_the_category_list( __( ', ', 'toolbox' ) );
                    				if ( $categories_list && toolbox_categorized_blog() ) :
                    			?>
                    			<span class="cat-links">
                    				<?php printf( __( 'Posted in %1$s', 'toolbox' ), $categories_list ); ?>
                    			</span>
                    			<span class="sep"> | </span>
                    			<?php endif; // End if categories ?>

                    			<?php
                    				/* translators: used between list items, there is a space after the comma */
                    				$tags_list = get_the_tag_list( '', __( ', ', 'toolbox' ) );
                    				if ( $tags_list ) :
                    			?>
                    			<span class="tag-links">
                    				<?php printf( __( 'Tagged %1$s', 'toolbox' ), $tags_list ); ?>
                    			</span>
                    			<span class="sep"> | </span>
                    			<?php endif; // End if $tags_list ?>
                    		<?php endif; // End if 'post' == get_post_type() ?>

                    		<?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
                    		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'toolbox' ), __( '1 Comment', 'toolbox' ), __( '% Comments', 'toolbox' ) ); ?></span>
                    		<span class="sep"> | </span>
                    		<?php endif; ?>

                    		<?php edit_post_link( __( 'Edit', 'toolbox' ), '<span class="edit-link">', '</span>' ); ?>
                    	</footer><!-- #entry-meta -->
                    </article><!-- #post-<?php the_ID(); ?> -->
					    

				<?php endwhile; ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
