<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <?php wp_head();?>
    </head>

    <body>
        <div class="index-header">

            <div class="index-title">
                <a href="<?php echo get_bloginfo( 'wpurl' );?>">AAAAHH</a>
            </div>

            <div class="index-navigation-links">
                <a href="<?php echo esc_url( get_permalink(8) ); ?>">Posts</a>
                /
                <a href="<?php echo esc_url( get_permalink(10) ); ?>">About</a>
            </div>
            
        </div>
