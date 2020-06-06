<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage CS Designs
 * @since CS Designs 1.0
 */

get_header(); ?>

<div class="homepage-header">
<p>You want something cool? I'll make you something cool.</p>
</div>

	<div id="primary" class="site-content about">
		<div class="main-content" role="main">
      <div class="home-content">
			<?php while ( have_posts() ) : the_post(); ?>


<!-- put a container around each title, img and des for the custom fields -->

          <div class="homepage-content">
            <h2 class="about-title"><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
          </div>




        <section class="featured-work">
	         <div class="site-content">
			        <h3>Featured Work</h3>
				        <ul class="homepage-featured-work">
						      <?php query_posts('posts_per_page=3&post_type=portfolio_works'); ?>
						      <?php while ( have_posts() ) : the_post();
						          $project_image_1 = get_field('project_image_1');
                      $size = "large";
		 				        ?>
		 					       <li class="individual-featured-work">
		 						       <figure>
									     <?php echo wp_get_attachment_image($project_image_1, $size); ?>
								       </figure>
							       </li>
							       <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						        <?php endwhile; ?>
						       <?php wp_reset_query(); ?>
					      </ul>
	           </div>
            </section>






      </div>
    <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->



<?php get_footer(); ?>
