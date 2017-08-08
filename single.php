<?php get_header(); ?>
   

<div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-1 col-md-10 col-md-offset-1">
                <div class="post-preview">
               
                    <?php while(have_posts()): the_post(); ?>
                
                        <h2 class="post-title" style="color:<?php echo get_post_meta(get_the_ID(),'cmd_post_title',TRUE) ?>">
                           <?php the_title(); ?>
                        </h2>
                    <div class="featured_img"><?php the_post_thumbnail(); ?></div>
                        <h3 class="post-subtitle">
                            <?php the_content(); ?>
                        </h3>
                    
                    <p class="post-meta">Posted by <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a> on <?php the_time('F m, Y'); ?></p>
                    <?php endwhile; ?>
                </div>
                <hr>
 
            </div>
        </div>
    </div>
<?php get_footer(); ?>


