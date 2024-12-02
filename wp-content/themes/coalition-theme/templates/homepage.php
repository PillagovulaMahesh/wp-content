<?php
get_header(); ?>

<div class="hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p>Welcome to our website! This is a custom homepage template.</p>
        <a href="#about" class="btn">Learn More</a>
    </div>
</div>

<div id="about" class="content">
    <div class="container">
        <h2>About Us</h2>
        <p><?php echo get_post_meta(get_the_ID(), 'about_section_content', true); ?></p>
    </div>
</div>

<div id="contact" class="content">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Feel free to reach out using the contact form below.</p>
        <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form 1"]'); ?>
    </div>
</div>

<?php get_footer(); ?>
