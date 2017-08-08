<?php get_header(); ?>
<!-- Page Header -->


<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1">
            <div class="post-preview" style="color:<?php echo get_theme_mod('post_content_color'); ?>">


                <?php while (have_posts()): the_post(); ?>

                    <h2 class="post-title"> 
                        <a href="<?php the_permalink(); ?>" style="color:<?php echo get_theme_mod('post_title_color'); ?>">
                            <?php the_title(); ?> 
                        </a>
                    </h2> 
                    <?php the_content(); ?>
                    <?php the_category(); ?>
                    <p class="post-meta">Posted by <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a> on <?php the_time('F m, Y'); ?> </p>

                <?php endwhile; ?>


            </div>

            <!-- Pager -->

            <ul class="pager">
                <?php
                the_posts_pagination(array(
                    //'show_all' => true,
                    'prev_text' => 'Prev',
                    'next_text' => 'Next',
                    'screen_reader_text' => ' ',
                    'before_page_number' => '<b>',
                    'after_page_number' => '</b>'
                ));
                ?>
            </ul>
        </div>
        <!-- right sidebar -->
        <div class="col-lg-3  col-md-3">
            <?php dynamic_sidebar('rightsidebar') ?>
        </div>
        
    </div>
</div>

<hr>

<?php get_footer(); ?>