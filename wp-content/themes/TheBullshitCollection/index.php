<?php get_header(); ?>
    <!--<h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>
    <h1>This is a post</h1>-->

    <?php
    
    if(have_posts() ):
    
        while(have_posts() ): the_post(); ?>

            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>

       <?php endwhile;
    
    endif;
    
    ?>

<?php get_footer(); ?>