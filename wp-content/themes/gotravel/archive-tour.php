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
		 rewind_posts(); 
         query_posts( 'post_type=tour&orderby=title&order=ASC' ); 
		if ( have_posts() ) : ?>

			<header class="page-header">
			 	<h1 class="page-title">Tours</h1>
				<?php
					/*the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );*/
				?>
			</header><!-- .page-header -->
			<div class="tours-container">	
			<?php
			/* Start the Loop */
			
			while ( have_posts() ) : the_post(); ?>

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

			<?php endwhile;?>
		</div>
		<?php
			  the_posts_pagination( array( 'mid_size' => 2 ) ); 

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
				
		</div><!-- #main -->
	</section><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
