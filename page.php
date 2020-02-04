<?php
get_header();
wp_print_styles( array( 'starter-css-pages-page' ) );
	if ( have_posts() ) {
		while ( have_posts() ) {
            the_post();
            ?>
            <div class="container">
                <h1><?php the_title(); ?></h1>
                <article>
                    <?php the_content(); ?>
                </article>
            </div>
            <?php
		}
    }
    get_comments();
get_footer();
