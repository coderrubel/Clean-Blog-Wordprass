
<?php get_header(); 
/*Template Name: Contact*/
?>
    <!--  -->
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>

                <?php while(have_posts()): the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
   <?php get_footer(); ?>