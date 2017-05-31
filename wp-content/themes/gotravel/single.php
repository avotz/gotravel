<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gotravel
 */

get_header(); ?>
	<?php if ( 'tour' === get_post_type() ) :?>
	<section class="banner banner-section">
	    
	    	
	        <?php if ( has_post_thumbnail() ) :

		  	 	$id = get_post_thumbnail_id($post->ID);
		  	 	$thumb_url = wp_get_attachment_image_src($id,'tour-banner', true);
		  	 	?>
		  	 	<div id="banner-pager">
			            <span class="prev "><i class="icon-angle-left"></i></span>
			            <span class="next "><i class="icon-angle-right"></i></span>
			    </div>
		    	 <div class="cycle-slideshow" data-cycle-slides=".slide" data-cycle-prev=".prev" data-cycle-next=".next">
		    	 	<div class="slide" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
		    	 	<?php $photos = rwmb_meta( 'rw_gallery_thumb', 'type=image&size=tour-banner' ); 
		             if ( $photos ) {
		                   
		                foreach ( $photos as $photo ){
		                           
		                        ?>
		                        
		                         <div class="slide" style="background-image: url('<?php echo $photo['url'] ?>');"></div>
		                      
		                      <?php } 

		      
		              }
		            ?>
				
			 	 </div>
			<?php else : ?>

				<div id="banner-pager">
			            <span class="prev "><i class="icon-angle-left"></i></span>
			            <span class="next "><i class="icon-angle-right"></i></span>
			    </div>
			    <div class="cycle-slideshow" data-cycle-slides=".slide" data-cycle-prev=".prev" data-cycle-next=".next">
			        <div class="slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner.jpg');">
			            
			                <div class="splash left">
			                    <h2>Welcome </h2>
			                    <span>Lorem ipsum dolor sit amet</span>
			                </div>
			            
			        </div>
			         <div class="slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner2.jpg');">
			            
			                <div class="splash right">
			                    <h2>Lorem ipsum dolor </h2>
			                    <span>Lorem ipsum dolor sit amet</span>
			                </div>
			            
			        </div>
			         <div class="slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner3.jpg');">
			            
			                <div class="splash right">
			                    <h2>Lorem ipsum dolor  </h2>
			                    <span>Lorem ipsum dolor sit amet</span>
			                </div>
			            
			        </div>
			       

			        
			    </div>

	        <?php endif; ?>
	       

	        
	    </div>
	</section>
<?php endif; ?>
	<section class="main">
        <div class="inner">

		<?php
		while ( have_posts() ) : the_post();
			
			if ( 'tour' === get_post_type() ) :
				get_template_part( 'template-parts/content', 'tour' );
			else:
				get_template_part( 'template-parts/content', get_post_format() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				get_sidebar();
			endif; 
			


		endwhile; // End of the loop.
		?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
