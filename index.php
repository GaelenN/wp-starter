<?php
get_header();
?>
<div class="container">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
            the_post();
			the_title();
			the_content();
		}
	}
	?>
</div>
<?php
get_comments();
get_footer();
