</main>

<footer>
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> Your Website Name. All rights reserved.</p>
        <p>Follow us: 
            <a href="<?php echo esc_url(get_theme_mod('social_facebook')); ?>">Facebook</a> | 
            <a href="<?php echo esc_url(get_theme_mod('social_twitter')); ?>">Twitter</a> | 
            <a href="<?php echo esc_url(get_theme_mod('social_instagram')); ?>">Instagram</a>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
