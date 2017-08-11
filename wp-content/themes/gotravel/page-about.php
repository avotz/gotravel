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
 * Template Name: Page About
 * @package gotravel
 */

get_header(); ?>
	<section class="main">
        <div class="inner">
            
        	<div class="about-container">
	            <div class="facebook-box">
                    <h2>TripAdvisor</h2>
	               <div id="TA_selfserveprop387" class="TA_selfserveprop">
					<ul id="ownagzvnrdm" class="TA_links SkBQim2SaJ">
					<li id="NeuZEoinjA" class="5w7SYzyN4nEo">
					<a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>
					</li>
					</ul>
					</div>
					<script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=387&amp;locationId=12635600&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2"></script>



	            </div>
	            <div class="tripadvisor-box">
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
