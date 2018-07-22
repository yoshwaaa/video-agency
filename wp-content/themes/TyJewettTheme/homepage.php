<?php


/**
 * Template Name: Homepage
 */




get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <section id="hero">
        <div class="container">
            <div class="hero-textBlock">
                <h1 class="orangeBar">Hello</br>I'm Tyler</h1>
                <h2 class="smallCase">2D & 3D Animator</h2>
                <a href="/reel/">
                    <div class="button">Play Reel</div>
                </a>
            </div>
        </div>
        <div class="homepageHeroVideo">
            <video muted autoplay loop>
                <source src="wp-content/themes/TyJewettTheme/videos/PORTFOLIO.mp4" />
            </video>
        </div>
    </section>
    <section id="projects">
        <a href="/tapology/">
            <div class="project-tab">
                <div class="project-tab-content">
                    <h3 class="project-tab-title">Tapology</h3>
                    <p>Creative Direction, Modeling, Rigging...</p>
                </div>
                <img src="/wp-content/themes/TyJewettTheme/images/projects/tapology.jpg" />
            </div>
        </a>
        <a href="/smart-plug/">
            <div class="project-tab">
                <div class="project-tab-content">
                    <h3 class="project-tab-title">Smart Plug</h3>
                    <p>Rigging, Texturing, Lighting...</p>
                </div>
                <img src="/wp-content/themes/TyJewettTheme/images/projects/LightSwitch.jpg" />
            </div>
        </a>
        <a href="/immunotherapy/">
            <div class="project-tab">
                <div class="project-tab-content">
                    <h3 class="project-tab-title">Immunotherapy</h3>
                    <p>Rendering, 2D Animation, Camera Animation...</p>
                </div>
                <img src="/wp-content/themes/TyJewettTheme/images/projects/immunotherapy.jpg" />
            </div>
        </a>
        <a href="/sous-vide-cooker/">
            <div class="project-tab">
                <div class="project-tab-content">
                    <h3 class="project-tab-title">Sous Vide Cooker</h3>
                    <p>Creative Direction, Modeling, Rigging...</p>
                </div>
                <img src="/wp-content/themes/TyJewettTheme/images/projects/cooking_pot.jpg" />
            </div>
        </a>
        <a href="/how-mesothelioma-develops/">
            <div class="project-tab">
                <div class="project-tab-content">
                    <h3 class="project-tab-title">How Mesothelioma Develops</h3>
                    <p>Creative Direction, 2D Animation</p>
                </div>
                <img src="/wp-content/themes/TyJewettTheme/images/projects/howmesodevelops.jpg" />
            </div>
        </a>
        <a href="/photodynamic-therapy/">
            <div class="project-tab">
                <div class="project-tab-content">
                    <h3 class="project-tab-title">Photodynamic Therapy</h3>
                    <p>2D Animation</p>
                </div>
                <img src="/wp-content/themes/TyJewettTheme/images/projects/PhotodynamicTherapy.jpg" />
            </div>
        </a>
        <a href="/peritoneal-cavity/">
            <div class="project-tab">
                <div class="project-tab-content">
                    <h3 class="project-tab-title">Peritoneal Cavity</h3>
                    <p>2D Animation</p>
                </div>
                <img src="/wp-content/themes/TyJewettTheme/images/projects/peritonealcavity.jpg" />
            </div>
        </a>
        <a href="/exposure/">
            <div class="project-tab">
                <div class="project-tab-content">
                    <h3 class="project-tab-title">Exposure</h3>
                    <p>2D Animation</p>
                </div>
                <img src="/wp-content/themes/TyJewettTheme/images/projects/exposure.jpg" />
            </div>
        </a>
    </section>
    <section id="about">
        <div class="container">
            <div class="about-textBlock">
                <h2 class="orangeBar">About Me</h2>
                <p>Hardworking self starter with extensive experience working in 2D and 3D software environments, bringing a large variety of skill sets to various projects.</p>
            </div>
        </div>  
    </section>
    <section id="cta">
        <div class="cta-textBlock">
            <h2>Let's Work Together</h2>
            <a href="/contact/">
                <div class="button">Hire Me</div>
            </a>
        </div>
    </section>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>