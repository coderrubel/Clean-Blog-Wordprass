<?php
add_theme_support('title-tag');
add_theme_support('custom-header', array('default-image' => get_template_directory_uri() . '/img/home-bg.jpg'));
add_theme_support('custom-background');
add_theme_support('post-thumbnails');

register_nav_menu('main_menu', 'Main');


register_post_type('custom_post', array(
    'labels' => array(
        'name' => 'Custom Post',
        'description' => 'You can add your post here',
    ),
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),
));
//sidebar

function sidebar(){
    register_sidebar(array(
       'name'=>'Right Sidebar',
        'id'=>'rightsidebar',
        'before_widget'=>'',
        'after_widget'=>''
    ));
}
add_action('widgets_init','sidebar');

//custom meta box
function cd_meta_box_add() {
    add_meta_box('page_title', 'Header Text', 'cd_meta_box_title', 'page', 'normal', 'high');
    add_meta_box('my-desc-id', 'Description', 'cd_meta_box_desc_cb', 'page', 'normal', 'high');
}

add_action('add_meta_boxes', 'cd_meta_box_add');

function cd_meta_box_title($post) {
    ?>

    <label for="title">Page Title</label>
    <input type="text" name="page_title" class="widefat" id="title" value="<?php echo get_post_meta($post->ID, 'page_title', true) ?>"  >
    <?php
}

/* Update value */

function title_update($post_id) {
    update_post_meta($post_id, 'page_title', $_POST['page_title']);
}

add_action('save_post', 'title_update');

function cd_meta_box_desc_cb($post) {
    ?>

    <label for="desc">Header Description</label>
    <input type="text" name="desc" class="widefat" value="<?php echo get_post_meta($post->ID, 'desc', true) ?>"  >

    <?php
}

function des_output($post_id) {
    update_post_meta($post_id, 'desc', $_POST['desc']);
}

add_action('save_post', 'des_output');

//customize section



function customfoorter($customfoorter) {
    $customfoorter->add_section('footer_section', array(
        'title' => 'Fotter Option',
        'priority' => 120,
    ));

    $customfoorter->add_setting('copyright_text', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $customfoorter->add_control('copyright_text', array(
        'section' => 'footer_section',
        'label' => 'Add Your Copy-Right Text',
        'tpye' => 'text',
    ));
    
    $customfoorter->add_setting('fotercolor',array(
       'default'=>'red',
        'transport'=>'refresh',
    ));
    $customfoorter->add_control(new WP_Customize_Color_Control($customfoorter,'fotercolor',array(
        'label'=>'Font Color',
        'section'=>'footer_section',
        'setting'=>'fotercolor',
    )));
    
    
}
add_action('customize_register','customfoorter');

function custom_color($coloroption) {
    $coloroption->add_section('header_section', array(
        'title' => 'Header Option',
        'priority' => 58,
    ));
    $coloroption->add_setting('headerimge',array(
       'default'=>'',
        'transport'=>'refresh',
    ));
    $coloroption->add_control(
            new WP_Customize_Image_Control($coloroption,'headerimge',array(
                'label'=>'Header Logo',
                'setting'=>'headerimge',
                'section'=>'header_section'
            )));
    
    $coloroption->add_setting('headertextcolor',array(
       'default'=>'white',
        'transport'=>'refresh',
    ));
    
    $coloroption->add_control(
            new WP_Customize_Color_Control($coloroption,'headertextcolor',array(
                'label'=>'Header Text Color',
                'setting'=>'headertextcolor',
                'section'=>'header_section',
            )));
    
    $coloroption->add_setting('post_title_color',array(
       'default'=>'red',
        'transport'=>'refresh',
        
    ));
    $coloroption -> add_control(
            new WP_Customize_Color_Control($coloroption,'post_title_color',array(
                'label'=>'Post Title Color',
                'section'=>'header_section',
                'setting'=>'post_title_color',
            )));
    
    $coloroption->add_setting('post_content_color',array(
       'default'=>'green',
        'tarnsport'=>'refresh',
        
    ));
    $coloroption->add_control(
            new WP_Customize_Color_Control($coloroption,'post_content_color',array(
              'label'=>'Post Content Color',
                'setting'=>'post_content_color',
                'section'=>'header_section'
            )));
}

add_action('customize_register', 'custom_color');


require_once ('vendor/metabox/init.php');
require_once ('vendor/metabox/functions.php');