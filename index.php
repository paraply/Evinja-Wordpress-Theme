<?php get_header(); ?>
    
<div class="container">
    <div class="row">
            <?php if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?> <!-- loop through the posts -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="post-header">
                            <date><?php the_time('M j y'); ?></date>
                            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div> <!-- .post-header -->
                        
                        	<div class="entry clear">
					<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
					<?php wp_link_pages(); ?>
				</div><!--. entry-->
                        
                    </article> <!-- #post-ID -->
                <?php endwhile; ?> 
                
                <?php else : ?>
                    <h2>No content
                
                <?php endif; ?>
            
    </div> <!-- .row -->
</div> <!-- .container -->
            
<?php get_footer(); ?>


    