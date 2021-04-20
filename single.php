
<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage My-website
 * @since My-website
 */

get_header();
?>
    
		<article class="content px-3 py-5 p-md-5">
	    </article>

		<?php
		if(have_posts()){

			while(have_posts){
				the_posts();
				get_template_parts('template-parts/content', 'article');

			}
		}

		?>

		<?php
		get_footer();
		?>




	    
