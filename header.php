<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/clean-blog.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css" rel="stylesheet">
    

    <!-- Custom Fonts -->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
 

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top" style="margin-top: 30px;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('headerimge'); ?>" alt="headerimg" style="  width: 90px; height:30px; cursor: pointer; border-radius: 20px;" ></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               
                <?php wp_nav_menu('main_menu'); ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   
    
       <?php
    $headerimage = get_post_meta(get_the_ID(),'image',true);
    
    if($headerimage==""){
        ?>
    <header class="intro-header" style="background-image: url('<?php  header_image();?>')">
    <?php
    }
 else {
        ?>
        <header class="intro-header" style="background-image: url('<?php echo $headerimage; ?>')"> 
        <?php 
    }
    
    
    
    ?>
    
    
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading"><h1 style=color:<?php echo get_theme_mod('headertextcolor'); ?>>
                        <?php 
                     if(is_home()){
                         bloginfo('title');
                     }
                     echo get_post_meta($post->ID,'page_title',true) ;  
                                ?></h1>
                        <hr class="small">
                        <span class="subheading"> <?php
                        if (is_home()){
                            bloginfo('description');
                        }
                        echo get_post_meta($post->ID,'desc', true)
                                ?>  </span>
                    </div>
                </div>
            </div>
        </div>
    </header>