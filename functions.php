<?php

    function Myporia_scripts() 
    {
        wp_enqueue_style( 'blog', get_template_directory_uri() . '/blog.css' );
    }

    add_action( 'wp_enqueue_scripts', 'Myporia_scripts' );

    add_theme_support( 'title-tag' ); 

    //OLD function from old theme, unused
    // function mytheme_custom_excerpt_length( $length ) 
    // {
    //     return 7;
    // }

    //OLD, already commented out, unused
    //add_theme_support( 'post-thumbnails' );

    function pagination_nav() 
    {
        global $wp_query;
     
        if ( $wp_query->max_num_pages > 1 ) 
        { ?>

            <nav class="index-pagination-container" role="navigation">
                <div class="index-pagination-link">
                    <?php next_posts_link( 'Older posts &rarr;' ); ?>
                </div>

                <div class="index-pagination">
                    <?php previous_posts_link( '&larr; Newer posts' ); ?>
                </div>
            </nav>
            
        <?php }
    }
?>