<?php 
function cmb_page(array $cleanbox){
    
    $cleanbox[] = array(
      'id'=> 'custommetabox',
        'title'=>'Custom Meta Box',
        'object_types'=> array('page'),
        'fields'=>array(
            array(
                'name'=>'Header Image',
                'id'=>'image',
                'type'=>'file',
            ),
            array(
              'name'=>'Content Color',
                'id'=>'contentcolor',
                'type'=>'colorpicker',
            ),
        )
    );
    return $cleanbox;
}
add_filter('cmb2_meta_boxes','cmb_page');

// This is posts meta box 

function cmb_post(array $cleanblog_post){
    $cleanblog_post[] = array(
        'id'=>'cmb_post',
        'object_types'=>array('post'),
        'title'=>'Custom Post Meta Box',
        'fields'=>array(
            array(
             'name'=>'Post Title Color',
                'id'=>'cmd_post_title',
                'type'=>'colorpicker',
            ),
        )
    );
    return $cleanblog_post;
}
add_filter('cmb2_meta_boxes','cmb_post');