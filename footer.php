  <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted" style="color:<?php echo get_theme_mod('fotercolor'); ?>">Copyright &copy; <?php echo  get_theme_mod('copyright_text'); ?></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/clean-blog.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>
