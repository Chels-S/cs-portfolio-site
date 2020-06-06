<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div id="main-content" role="main">

			<?php while ( have_posts() ) : the_post();
          $project_name = get_field('project_name');
          $project_description = get_field('project_description');
          $link = get_field('site_link');
          $project_image_1 = get_field('project_image_1');
          $project_image_2 = get_field('project_image_2');
          $project_image_3 = get_field('project_image_3');
          $project_image_4 = get_field('project_image_4');
          $size = "large"; ?>

        <article class="portfolio-work">
            <aside class="portfolio-work-sidebar">
                <h2><?php the_title(); ?></h2>
                <h5><?php echo $project_name; ?></h5>
                <h6><span><?php echo $project_description; ?></span></h6>

                <?php the_content(); ?>

                <p class="read-more-link"><a href="<?php echo $link; ?>">Visit Live Demo &rsaquo;</a></p>
            </aside>

        <div class="portfolio-work-images">
          <?php if($project_image_1) {
            echo wp_get_attachment_image($project_image_1, $size);
          }?>
          <?php if($project_image_2) {
            echo wp_get_attachment_image($project_image_2, $size);
          }?>
          <?php if($project_image_3) {
            echo wp_get_attachment_image($project_image_3, $size);
          }?>
          <?php if($project_image_4) {
            echo wp_get_attachment_image($project_image_4, $size);
          }?>

        </div>
      </article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

  <nav id="navigation" class="container">
  	<div class="left"><a href="<?php echo site_url('/portfolio-work/') ?>">&larr; <span>Back to work</span></a></div>
  </nav>

<?php get_footer(); ?>
