<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gotravel
 */

get_header(); ?>

	<section class="main">
    <div class="inner">

		  <?php
            
        if ( have_posts() ) : ?>



          <header class="page-header">
            <h1 class="page-title">Tours</h1>
            <?php
              /*the_archive_title( '<h1 class="page-title">', '</h1>' );
              the_archive_description( '<div class="taxonomy-description">', '</div>' );*/
            ?>
          </header><!-- .page-header -->
          <div class="services-icons__container">
           <?php if ( get_query_var('paged') ) {
                              $paged = get_query_var('paged');
                          } else if ( get_query_var('page') ) {
                              $paged = get_query_var('page');
                          } else {
                              $paged = 1;
                          } 
            
                          $args = array(
                            'post_type' => 'tour',
                            'paged' => $paged,
                            'posts_per_page' => 9,
                            'orderby' => 'menu_order',
                            'order' => 'asc'
                            
                          );
                          $temp = $wp_query; 
                          $wp_query = null;
                          $wp_query = new WP_Query( $args );

                          if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post();
                              
                            

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
                                  </div>
                           
            
                                  <?php endwhile; ?>
                            <!-- post navigation -->
                          <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
                        <?php endif; ?>
                                        
                        <?php 
                            $wp_query = null; 
                            $wp_query = $temp;  // Reset
                          ?>
        </div>
        
        
        <?php else :

          get_template_part( 'template-parts/content', 'none' );

        endif; ?>

                
		

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
