<!-- 
    This is the content that is displayed on the home page.
    It lists post title, date of posting, and post categorization,
        followed by the post contents themselves.
    This is NOT the file that is used to display 
        content on individual post pages!
-->

<div>
    <div class="index-post-title">
    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
    </div>

    <div class="index-date-and-category">
        <?php the_date(); ?>
        <div>
            <?php 
                foreach((get_the_category()) as $category)
                {
                    echo $category->name."<br>";
                }	
            ?>
        </div>
    </div>
    
</div>