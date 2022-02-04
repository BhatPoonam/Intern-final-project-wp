<?php
//Template Name: Team
get_header();
?>
<main class="pt-4">
<div class="team">
        <div class="container pt-5 pb-5">
            <p class="fw-bold">OUR TEAM</p>
            <div class="row bg-white border-top border-primary border-5">
                <div class="col-lg-5 col-md-5">
                    <figure>
                        <img src="<?php bloginfo('template_directory') ?>/assets/image/home/Image5.jpg" alt="Image5" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-7 col-md-7 align-self-center team-message">
                    <p class="fs-4">Sally Albana - Site Engineer</p>
                    <p class="lead">“It is not so much for its beauty that the forest makes a claim upon men’s hearts, as for
                        that subtle something, that quality of air that emanation from old trees, that so
                        wonderfully changes and renews a weary spirit.”</p>
                        <a href="#" class="nav-link text-dark">
                            <button type="button" class="btn btn-outline-dark">Read more <i class="bi bi-arrow-right"></i>
                            </button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>