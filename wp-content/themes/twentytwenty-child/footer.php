<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner-footer">

<!--- temp
              <div class="footer-title">
                <h2>let&apos;s connect</h2>
              </div>

                <div class="footer-contact">
                  <h4>Shoot me an email</h4>
                  <p>chelseysextonc734@gmail.com</p>
                </div>


            <div class="about-contact-container">
              <div class="contact-tag">
                <h2>Interested?</h2>
              </div>
              <div class="contact-button">
                <a class="button" href="<?php echo site_url('/contact/') ?>">Contact Me</a>
              </div>
            </div>

-->
                <div class="footer-socials">
              <!--    <h4>Follow me</h4> -->

                  <ul>
                    <li><a href="https://twitter.com/ChelseySexton" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter-icon.png"/> </a></li>
                    <li><a href="https://github.com/Chels-S" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/github-icon.png" /> </a></li>
                    <li><a href="https://www.linkedin.com/in/clsexton/" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin-icon.png" /> </a></li>
                  </ul>

                </div>
                <div class="footer-copyright">
                <p>Copyright 2020 | Chelsey Sexton</p>

              </div>

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
