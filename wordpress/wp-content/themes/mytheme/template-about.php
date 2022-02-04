<?php
//Template Name: About
get_header();
?>
<main class="pt-4">
<div class="about-us bg-white">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <p>ABOUT US</p>
                    <p class="lead">Integer at neque ac metus fringilla dapibus et eu eros. Vivamus vitae finibus dolor.
                        Suspendisse
                        finibus ante in sapien fermentum, quis condimentum turpis consequat.</p>
                    <button type="button" class="btn btn-primary">
                        <a href="#" class="text-decoration-none text-white">Learn more <i
                                class="bi bi-arrow-right"></i></a>
                    </button>
                </div>
                <div class="col-lg-4 col-md-4 image3">
                    <div class="bg-light d-flex align-items-center justify-content-center p-4">
                        <figure>
                            <figcaption class="fw-bold pb-2">HOW ABOUT US?</figcaption>
                            <img class="img-fluid" src="<?php bloginfo('template_directory') ?>/assets/image/home/Image3.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<?php
get_footer();
?>