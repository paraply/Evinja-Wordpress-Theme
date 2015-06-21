<?php get_header(); ?>
    
<div id="main">
            <?php if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?> <!-- loop through the posts -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="post-header">
                            <date><?php the_time('j F Y'); ?></date>
                            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div> <!-- .post-header -->
                        
					<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
					<?php wp_link_pages(); ?>
                        
                    </article> <!-- #post-ID -->
                <?php endwhile; ?> 
                
                <?php else : ?>
                    <article>
                    <h2><?php _e('No content found', 'evinja'); ?></h2>
                </article>
                <?php endif; ?>
            
</div> <!-- #main -->
            
<?php get_footer(); ?>


    