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
	<section class="banner">
	    <div id="banner-pager">
	            <span class="prev "><i class="icon-angle-left"></i></span>
	            <span class="next "><i class="icon-angle-right"></i></span>
	    </div>
	    <div class="cycle-slideshow" data-cycle-slides=".slide" data-cycle-prev=".prev" data-cycle-next=".next">
	        <div class="slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner.jpg');">
	            
	                <div class="splash left">
	                    <h2><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">Welcome to</a></h2>
	                    <span>Go Travel CRC</span>
	                </div>
	            
	        </div>
	         <div class="slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner2.jpg');">
	            
	                <div class="splash right">
	                    <h2><a href="<?php echo esc_url( home_url( '/shuttle' ) ); ?>">Tours & Shuttle</a></h2>
	                    <span>Choose your destination</span>
	                </div>
	            
	        </div>
	         <div class="slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner3.jpg');">
	            
	                <div class="splash right">
	                    <h2><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact us</a></h2>
	                    <span> and enjoy the adventure</span>
	                </div>
	            
	        </div>
	       

	        
	    </div>
	    <div class="caption-banner">
	        <div class="inner">
	            <div class="email">
	                
	                <a href="#request-popup" class="coupon-request"><i class="icon-envelope"></i><span>Tours & shuttle</span> Upon request »</a>
	            </div>
	            <div class="follow">
	                <span>Follow</span>
	                Gotravel
	                <a href="https://www.facebook.com/Go-Travel-Costa-Rica-1877673582476260/" target="_blank"><i class="icon icon-facebook"></i></a>
	                <a href="#" target="_blank"><i class="icon icon-twitter"></i></a>
	                <a href="#" target="_blank"><i class="icon icon-google-plus"></i></a>
	                <a href="#" target="_blank"><i class="icon icon-youtube"></i></a>
	                <a href="#" target="_blank"><i class="icon icon-pinterest"></i></a>
	                <a href="https://www.instagram.com/gotravelcr/" target="_blank"><i class="icon icon-instagram"></i></a>
	                <a href="#" target="_blank"><i class="icon icon-flickr"></i></a>
	                <a href="#" target="_blank"><i class="icon icon-tripadvisor"></i></a>
	            </div>
	        </div>
	    </div>
	</section>
	<section class="section-top">
        <div class="inner">

            <div class="featured-tours">
                <!-- <div class="pager">
                        <span class="prev "><i class="icon-angle-left"></i></span>
                        <span class="next "><i class="icon-angle-right"></i></span>
                </div> -->
                <div class="owl-carousel owl-theme" data-cycle-timeout="0" data-cycle-slides=".tour" data-cycle-fx="carousel" data-cycle-carousel-visible="3" data-cycle-carousel-fluid="true" data-cycle-prev=".prev" data-cycle-next=".next">
                <?php
                    $args = array(
                      'post_type' => 'tour',
                      'order' => 'ASC',
                      'posts_per_page' => 3,
                     /*'tax_query' => array(
                        array(
                          'taxonomy' => 'film-category',
                          'field' => 'slug',
                          'terms' => $category_slug
                        )
                      )*/
                      
                    );
                    $tours = new WP_Query( $args );
                    if( $tours->have_posts() ) {
                      while( $tours->have_posts() ) {
                         $tours->the_post();
                        ?>
                           <div class="tour">
                                <div class="img-frame">
                                    
                                     <?php if ( has_post_thumbnail() ) :

                                      $id = get_post_thumbnail_id($post->ID);
                                      $thumb_url = wp_get_attachment_image_src($id,'tour-thumb', true);
                                      ?>
                                      
                                    <img src="<?php echo $thumb_url[0] ?>" alt="tour">
                                  <?php endif; ?>
                                    <div class="caption">
                                        <div class="box">
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                                            <span>
                                                <?php /*the_excerpt()*/ ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php the_permalink(); ?>"></a>
                            </div>
                          
                          
                        <?php
                      }
                    }
                  ?>
                
            </div>
        </div>
    </div>
        
    </section>
    <section id="shuttle" class="shuttle">
      <div class="inner">
        <h1 class="shuttle-title">Shuttle Services</h1>
        <p class="shuttle-subtitle">Our Destinations</p>
        <div class="shuttle-container">
          <?php rewind_posts(); ?>
            <?php query_posts( 'post_type=page&page_id=2' ); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                        <?php the_content(); ?>
                   
    
                <?php endwhile; ?>
                <!-- post navigation -->
              
            <?php endif; ?>
          
        
      </div>
    </section>
    <!-- <section class="main">
        <div class="inner">
            
            <div class="home-container">
              <div class="map-box">
                  <h2>Location</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15684.919025455205!2d-85.4281962!3d10.639251!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x756af3ebd14361a2!2sAvotz+Web+Works!5e0!3m2!1ses-419!2s!4v1442615525574" width="530" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
              </div>
              <div class="form-book">
                  <h2>Reservation</h2>
                  <p>You can customize your reservation with the tours you want</p>
                  <?php /*echo do_shortcode('[contact-form-7 id="47" title="Reservation Form"]') */?>
                  <div class="ul-include">
                     <strong>All tours include:</strong>
                     <ul class="ul-include">
                      <li>Lunch</li>
                      <li>Guides certified and specialized in the area where to attend</li>
                    </ul>
                  </div>
                 
              </div>
              
            </div>
        </div>
        
    </section> -->
    <section class="section-bottom">
        <div class="inner box-message">
            <div class="image">
                <img src="<?php echo get_template_directory_uri();  ?>/img/man.png" alt="man" />
            </div>
            <div class="content">
                <h5>Testimonial by Jane Doe, 14/7/2014</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni officiis sapiente illum sequi cum nam, repellendus reiciendis nihil quidem optio. Officiis minus libero magni ut ad, at quaerat quisquam a.</p>
            </div>
        </div>
    </section>
	

<?php
/*get_sidebar();*/
get_footer();
