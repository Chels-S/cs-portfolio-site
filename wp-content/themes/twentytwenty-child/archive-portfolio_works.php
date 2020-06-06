<?php
/**
 * The template for displaying the portfolio archive page*
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
        $project_image_1 = get_field('project_image_1');
        $size = "medium";
        $project_name = get_field('project_name');?>

      <article class="portfolio-work">
          <aside class="portfolio-work-sidebar">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
              <h5><?php echo $project_name; ?></h5>
              <?php the_excerpt(); ?>
              <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project &rsaquo;</a></p>
          </aside>

      <div class="portfolio-work-images">
        <a href="<?php the_permalink(); ?>">
        <?php if($project_image_1) {
          echo wp_get_attachment_image($project_image_1, $size);
        }?>
       </a>
      </div>
    </article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
