<?php
/*
 * Template Name: Custom_Post
 */

get_header();
?>
<!-- Page Header -->


<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1">
            <div class="post-preview" style="color:<?php echo get_theme_mod('post_content_color'); ?>">


                <?php
                $custompost = new WP_Query(array(
                    'post_type' => 'custompost',
                ));

                while ($custompost->have_posts()): $custompost->the_post();
                    ?>

                    <h2 class="post-title"> 
                        <a href="<?php the_permalink(); ?>" style="color:<?php echo get_theme_mod('post_title_color'); ?>">
                            <?php the_title(); ?> 
                        </a>
                    </h2> 
                    <?php
                    $readmor = '<a href="' . get_permalink() . '"> ...Read More</a>';
                    echo wp_trim_words(get_the_content(), 15, $readmor);
                    ?>
                    <p>Catagori:
                        <?php
                        $catagori = get_the_terms(get_the_ID(), 'custom_catagori');
                        foreach ($catagori as $catagoris) {
                            $catagorilist = $catagoris->name;
                            $link = get_the_terms($catagoris, 'custom_catagori');

                            echo '<a href="' . $link . '">' . $catagorilist . '</a>, ';
                        }
                        ?>
                    </p>
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