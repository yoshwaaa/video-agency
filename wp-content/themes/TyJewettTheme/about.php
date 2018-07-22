<?php


/**
 * Template Name: About Page
 */




get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

        // End the loop.
        endwhile;
        ?>

    <!-- <section id="about-page-hero">
        <div class="container">
            <div class="about-page-hero-left">
                <h1 class="orangeBar">Tyler Jewett</h1>
                <h2 class="smallCase">A Little Bit About Me</h2>
            </div>
            <div class="about-page-hero-right">
                <img src="/wp-content/themes/TyJewettTheme/images/about/wakeboarding.png" />
            </div>
        </div>
    </section>

    <section id="about-page-bio">
        <div class="container">
            <div class="about-page-bio-left">
                <img src="/wp-content/themes/TyJewettTheme/images/about/tyjewett.jpg" />
            </div>
            <div class="about-page-bio-right">
                <h2 class="orangeBar">The man behind the monitor</h2>
                <p>Hardworking self starter with extensive experience working in 2D and 3D software environments, bringing a large variety of skill sets to various projects. Worked with The Santo Design Group, producing product animation content for their largest client, the Home Shopping Network. For the last two years, worked with BCBH Technology Services, a web design/development company to create 2D illustration animations and 3D educational medical related videos that provide for more immersive learning environments and increased positive user experience (UX). Effectively communicates with clients, with a capacity to accurately interpret concepts and ideas to create content that meets the client's needs. Proficient with Maya, After Effects, Photoshop, InDesign, Illustrator, 3ds Max, Zbrush.</p>
                <div class="about-page-bio-smallBox">
                    <p><span>Bachelor of Science: </span>Computer Animation</p>
                    <p><span>Grad Year: </span>2016</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about-page-tools">
        <div class="container">
            <div class="about-page-tools-left">
                <h2 class="orangeBar">Skill Set</h2>
                <p>Creative Direction</p>
                <p>Graphic Design</p>
                <p>2D Animation</p>
                <p>3D Animation</p>
                <p>Modeling</p>
                <p>Rigging</p>
                <p>Dynamic Effects</p>
                <p>Partical Effects</p>
            </div>
            <div class="about-page-tools-right">
                <h2 class="orangeBar">Tools of Choice</h2>
                <p>I attended full sail university and earned my bachelor degree of science in computer animation, graduating in September of 2015. Shortly after graduation, I behan a 3-month internship at full sail university with Eileen Middleton.</p>
                <ul>
                    <li>
                        <img src="/wp-content/themes/TyJewettTheme/images/icons/maya.jpg" />
                        <p>Maya 3D</p>
                    </li>
                    <li>
                        <img src="/wp-content/themes/TyJewettTheme/images/icons/ae.jpg" />
                        <p>After Effects</p>
                    </li>
                    <li>
                        <img src="/wp-content/themes/TyJewettTheme/images/icons/ps.jpg" />
                        <p>Photoshop</p>
                    </li>
                    <li>
                        <img src="/wp-content/themes/TyJewettTheme/images/icons/id.jpg" />
                        <p>InDesign</p>
                    </li>
                    <li>
                        <img src="/wp-content/themes/TyJewettTheme/images/icons/ai.png" />
                        <p>Illustrator</p>
                    </li>
                    <li>
                        <img src="/wp-content/themes/TyJewettTheme/images/icons/3ds.png" />
                        <p>3ds Max</p>
                    </li>
                    <li>
                        <img src="/wp-content/themes/TyJewettTheme/images/icons/zbrush.jpg" />
                        <p>Zbrush</p>
                    </li>
                </ul> 
            </div>
        </div>
    </section>
    <?php 
        get_template_part('slider');
    ?>
    <section id="cta">
        <div class="cta-textBlock">
            <h2>Let's Work Together</h2>
            <a href="/contact/">
                <div class="button">Hire Me</div>
            </a>
        </div>
    </section> -->
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>