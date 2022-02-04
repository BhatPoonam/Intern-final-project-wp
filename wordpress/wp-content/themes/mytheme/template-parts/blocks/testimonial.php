<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/test.jpg';
    echo '<img src="' . $imgUrl . '">';
else:
    $imgcontent = get_field('banner');
    $first_image = $imgcontent['first_image']['url'];
    $second_image = $imgcontent['second_image']['url'];
    $header_image = get_field( 'header_image' );
    $header_img = $header_image['url'];
    $header = get_field( 'header' );
    $header_content = get_field( 'header_content' ); 
    $about_us_header = get_field( 'about_us_header' );
    $about_us_content = get_field( 'about_us_content' ); 
    $about_us_image = get_field( 'about_us_image' );
    $about_us_img = $about_us_image['url'];
    $about_us_image_caption = get_field( 'about_us_image_caption' );
    $things_to_remember_header = get_field ( 'things_to_remember_header' );
    $things_to_remember_content1 = get_field ( 'things_to_remember_content1' );
    $things_to_remember_content2 = get_field ( 'things_to_remember_content2' );
    $things_to_remember_content3 = get_field ( 'things_to_remember_content3' );
    $things_to_remember_image = get_field( 'things_to_remember_image' );
    $things_to_remember_img = $things_to_remember_image['url'];
    $team_header = get_field( 'team_header' );
    $team_subheader = get_field( 'team_subheader' );
    $team_content = get_field( 'team_content' );
    $team_image = get_field( 'team_image' );
    $team_img = $team_image['url'];
    $blogs_header = get_field( 'blogs_header' );
    $blogs_subheader = get_field( 'blogs_subheader' );
    $blogs_content1 = get_field( 'blogs_content1' );
    $blogs_content2 = get_field( 'blogs_content2' );
    $blogs_image = get_field( 'blogs_image' );
    $blogs_img = $blogs_image['url'];
    $more_info_header = get_field( 'more_info_header' );
    $more_info_sub_header = get_field( 'more_info_sub_header' );
    $more_info_content1 = get_field( 'more_info_content1' );
    $more_info_content2 = get_field( 'more_info_content2' );
    $more_info_image = get_field( 'more_info_image' );
    $more_info_img = $more_info_image['url'];
    $client_header = get_field( 'client_header' );
    $client_subheader = get_field( 'client_subheader' );
    $client_image_caption = get_field( 'client_image_caption' );
    $client_content = get_field( 'client_content' );
    $client_image = get_field( 'client_image' );
    $client_img = $client_image['url'];
    $mblogs_header = get_field( 'mblogs_header' );
    $mblogs_content = get_field( 'mblogs_content' );
?>
<main>
<div class="head container pt-2 pb-5">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <figure>
                <img class="img-fluid" src="<?php echo $first_image;?>" />
            </figure>
            </div>
            <div class="col-lg-7 col-md-7">
                <figure>
                <img class="img-fluid" src="<?php echo $second_image;?>" />
                </figure>
            </div>          

            <div class="col-lg-8 col-md-12">
            
                <div class="contact-box border-top border-primary border-5 bg-white p-5">
                    <p class="fs-2"><?php echo $header; ?></p>
                    <p class="lead"><?php echo $header_content; ?></p>
                    <a href="#" class="text-white text-decoration-none">
                        <button type="button" class="btn btn-outline-dark">Contact Us <i class="bi bi-arrow-right"></i>

                        </button>
                    </a>

                </div>
</div>
                <div class="col-md-4 d-lg-block d-md-none">
                <img class="img-fluid" src="<?php echo $header_img;?>" />
            </div>
</div>
</div>
<div class="about-us bg-white">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <p><?php echo $about_us_header;?></p>
                    <p class="lead"><?php echo $about_us_content;?></p>
                    <button type="button" class="btn btn-primary">
                        <a href="#" class="text-decoration-none text-white">Learn more <i
                                class="bi bi-arrow-right"></i></a>
                    </button>
                </div>
                <div class="col-lg-4 col-md-4 image3">
                    <div class="bg-light d-flex align-items-center justify-content-center p-4">
                        <figure>
                            <figcaption class="fw-bold pb-2"><?php echo $about_us_image_caption;?></figcaption>
                            <img class="img-fluid" src="<?php echo $about_us_img;?>" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="remember">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure>
                        <img class="img-fluid" src="<?php echo $things_to_remember_img;?>" />
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <p class="fw-bold"><?php echo $things_to_remember_header; ?></p>
                    <p class="fs-4"><?php echo $things_to_remember_content1; ?></p>
                    <p class="text-primary"><?php echo $things_to_remember_content2; ?></p>
                    <p>
                    <?php echo $things_to_remember_content3; ?></p>
                    <a href="#" class="nav-link text-dark"><button type="button" class="btn btn-outline-dark">More
                            articles <i class="bi bi-arrow-right"></i></button>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="team">
        <div class="container pt-5 pb-5">
            <p class="fw-bold"><?php echo $team_header;?></p>
            <div class="row bg-white border-top border-primary border-5">
                <div class="col-lg-5 col-md-5">
                    <figure>
                        <img class="img-fluid" src="<?php echo $team_img;?>" />
                    </figure>
                </div>
                <div class="col-lg-7 col-md-7 align-self-center team-message">
                    <p class="fs-4"><?php echo $team_subheader;?></p>
                    <p class="lead"><?php echo $team_content;?></p>
                        <a href="#" class="nav-link text-dark">
                            <button type="button" class="btn btn-outline-dark">Read more <i class="bi bi-arrow-right"></i>
                            </button>
                    </a>

                </div>
            </div>
        </div>
    </div>
     <div class="blogs bg-white">
        <div class="container pt-5 pb-5">
            <div class="row blogs-content">
                <div class="col-lg-7 col-md-7 content-info">
                    <p class="fw-bold"><?php echo $blogs_header;?></p>
                    <p class="fs-4"><?php echo $blogs_subheader;?></p>
                    <p class="lead">
                        <?php echo $blogs_content1;?>
                    </p>
                    <p>
                        <?php echo $blogs_content2;?>
                    </p>

                    <button type="button" class="btn btn-primary">
                        <a href="#" class="text-decoration-none text-light">Learn more <i class="bi bi-arrow-right"></i></a>
                    </button>
                </div>
                <div class="col-lg-5 col-md-5 content-img">
                    <figure>
                    <img class="img-fluid" src="<?php echo $blogs_img;?>" />
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="info ">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure>
                    <img class="img-fluid" src="<?php echo $more_info_img;?>" />
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <p class="fw-bold"><?php echo $more_info_header;?></p>
                    <p class="fs-4"><?php echo $more_info_sub_header;?></p>
                    <p class="text-primary"><?php echo $more_info_content1;?></p>
                    <p>
                    <?php echo $more_info_content2;?>
                    </p>
                    <a href="#" class="nav-link text-dark"><button type="button" class="btn btn-outline-dark">Learn more <i class="bi bi-arrow-right"></i></button>
                </a>

                </div>
            </div>
        </div>
    </div>
    <div class="client bg-white pt-5 pb-5">
        <div class="container m-auto text-center">
            <h1 class="display-6"><?php echo $client_header;?></h1>
            <p class="lead pt-4">
            <?php echo $client_subheader;?></p>
            <figure>
            <img class="img-fluid" src="<?php echo $client_img;?>" />
                <figcaption>
                    <p class="text-primary fs-4"><?php echo $client_image_caption;?></p> 
                    <p class="fs-5">
                        <a class="text-decoration-none" href="#"><span class="icon-linkedin"></span></a>
                        <a class="text-decoration-none" href="#"><span class="icon-github"></span></a>
                        <a class="text-decoration-none" href="#"><span class="icon-twitter"></span></a>
                        <a class="text-decoration-none" href="#"><span class="icon-facebook"></span></a>
                    </p>
                </figcaption>
            </figure>
            <p class="client-message">
            <?php echo $client_content;?>
                  </div>
    </div>
    <div class="mblogs pt-5 pb-5">
        <div class="container">
            <p class="lead fw-bold"><?php echo $mblogs_header;?></p>
            <p><?php echo $mblogs_content;?></p>
            <button type="button" class="btn btn-primary">
                <a href="#" class="text-decoration-none text-white">Learn more <i class="bi-arrow-right"></i></a>
            </button>
        </div>

    </div>

</main>   
    
<?php endif; ?>