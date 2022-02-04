<?php 
   get_header();
   the_post();
?>
<main class="single-blog-body">
<div class="blog-head container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <figure>
                <?php 
                    $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                    ?>
                    <img src="<?php echo $imagepath[0] ?>" alt="" class="figure-img img-fluid">
                </figure>
            </div>
            <div class="col-lg-6 col-md-8 head-info p-lg-5 p-md-4">
                <p class="lead text-white">
                <?php the_excerpt();?>

                </p>
            </div>
        </div>
    </div>
    <div class="single-blog-content bg-white row py-5">
       <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1">
       <?php the_content(); 
        ?>
       </div>
    </div>
    <div class="blog-note bg-white pt-5 pb-5">
        <div class="container">
            <p class="fw-bold">RELATED BLOGS</p>
            <div class="row g-4 cat-card py-5">
                <div class="col-lg-4 col-md-6">
                    <div class="cards p-0">
                        <a href="#" class="text-dark text-decoration-none">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/image5.jpg" alt="">
                            <div class="card-body">
                                <p class="card-title fw-bold">
                                    June 11, 2021
                                </p>
                                <p class="card-text">
                                    Interesting Facts I Bet You Never Knew About BLOGS
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cards p-0">
                        <a href="#" class="text-dark text-decoration-none">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/image4.jpg" alt="">
                            <div class="card-body">
                                <p class="card-title fw-bold">
                                    June 11, 2021
                                </p>
                                <p class="card-text">
                                everything You Wanted to Know About BLOGS and Were Too EEmbarrassed to Ask
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 last">
                    <div class="cards p-0">
                        <a href="#" class="text-dark text-decoration-none">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/image3.jpg" alt="">
                            <div class="card-body">
                                <p class="card-title fw-bold">
                                    June 11, 2021
                                </p>
                                <p class="card-text">
                                    What Can You Do To Save Your BLOGS From Destruction By Social Media?
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<?php 
get_footer();
?>