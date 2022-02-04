<?php 
get_header(); 
the_post();
?>

<main class="container mt-5 pt-5">
    <h1><?php echo the_title(); ?></h1>
    <?php
    the_post_thumbnail(array(500,500)); 
    the_content(); 
    ?>

    <?php
    $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
        
        // print_r($imagepath);
    ?>
    <img src="<?php echo $imagepath[0] ?>" alt="" width="100">
</main>

<?php get_footer(); ?>
