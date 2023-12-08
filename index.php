<!--
http://www.aaaahh.net/you-know-what-time-it-is/
-->

<!-- 
This is the blog homepage!
If posts are available, the while loop prints out all posts 
    w/ default content template.
Finally, pagination navigation arrows are added at the end.
-->


<?php get_header(); ?>

<?php
    if (have_posts())
    {
        while (have_posts())
        {
           the_post();
           get_template_part( 'index-content', get_post_format()); 
        }

        pagination_nav();
    }
?>

<?php get_footer(); ?>