<footer>
    <div class="container">
        <nav class="nav-container">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => false) ); ?>
        </nav>
        <p class="copyright">Developed by <a href="https://gaelennorman.ca" target="_blank">Gaelen Norman</a> &copy; <?php echo date("Y")?></p>
    </div>
</footer>
<?php wp_footer() ?>