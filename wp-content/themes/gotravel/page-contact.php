<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gotravel
 */

get_header(); ?>
	<section class="main">
        <div class="inner">
        	<div class="home-container">
	            <div class="map-box">
	                <h2>Location</h2>
	                
	                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15684.919025455205!2d-85.4281962!3d10.639251!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x756af3ebd14361a2!2sAvotz+Web+Works!5e0!3m2!1ses-419!2s!4v1442615525574" width="530" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
	            </div>
	            <div class="form-book">
	               <?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						/*if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;*/

					endwhile; // End of the loop.
					?>
	            </div>
	        </div>
            
        </div>
        
    </section>
	

<?php
//get_sidebar();
get_footer();
