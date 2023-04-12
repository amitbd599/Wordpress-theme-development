
<?php  get_header();?>


<div>
    <h2>page.php</h2>

    <?php the_post_thumbnail(array(300,500));?>
    <?php the_content();?>
</div>



<?php get_footer();?>