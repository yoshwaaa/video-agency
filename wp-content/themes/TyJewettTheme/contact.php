<?php


/**
 * Template Name: Contact Page
 */




get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <section id="contact-page">
        <div class="contact-page-box">
            <div class="contact-page-box-left">
                <h1 class="orangeBar">Let's Chat</h1>
                <h2 class="smallCase">Lets do creative stuff together</h2>
                <div class="contact-page-box-innerBox">
                    <p>Call Me</p>
                    <p>1.636.233.2524</p>
                    <p>Email Me</p>
                    <p>tylermjewett@gmail.com</p>
                </div>
            </div>
            <div class="contact-page-box-right">
                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                    get_template_part( 'content', 'page' );

                // End the loop.
                endwhile;
                ?>
            </div>
        </div>
    </section>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>