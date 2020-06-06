<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<!--
<div class="about-header">
<p>Accelerate </p>
</div>
-->


	<div id="primary" class="site-content about">
		<div class="main-content" role="main">
      <div class="about-me-content">
			<?php while ( have_posts() ) : the_post();
      $about_description = get_field('about_description');
      $about_interest_1 = get_field('about_interest_1');
      $about_interest_image_1 = get_field('about_interest_image_1');
      $about_interest_image_2 = get_field('about_interest_image_2');
      $about_interest_image_3 = get_field('about_interest_image_3');
      $about_interest_2 = get_field('about_interest_2');
      $about_interest_2_content = get_field('about_interest_2_content');
      $about_interest_3 = get_field('about_interest_3');
      $about_interest_3_content = get_field('about_interest_3_content');
      $size = "medium";
      ?>



      <div class="about-top-section">
        <h2 class="about-title"><?php the_title(); ?></h2>
			<div class="about-content">
        <p><?php the_content(); ?></p>
      </div>
        <div class="about-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile-img.jpg"/>
      </div>
    </div>

      <div class="about-description">
        <p><?php echo $about_description; ?></p>
      </div>

      <div class="about-coconut">
        <h3><?php echo $about_interest_1; ?></h3>
        <?php if($about_interest_image_1) {
          echo wp_get_attachment_image($about_interest_image_1, $size);
        }?>
        <?php if($about_interest_image_2) {
          echo wp_get_attachment_image($about_interest_image_2, $size);
        }?>
        <?php if($about_interest_image_3) {
          echo wp_get_attachment_image($about_interest_image_3, $size);
        }?>

      </div>

      <div class="about-games">
        <h3><?php echo $about_interest_2; ?></h3>
        <p><?php echo $about_interest_2_content; ?></p>
      </div>

      <div class="about-content-creators">
        <h3><?php echo $about_interest_3; ?></h3>
        <p><?php echo $about_interest_3_content; ?></p>
      </div>





      </div>
    <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->



<?php get_footer(); ?>
