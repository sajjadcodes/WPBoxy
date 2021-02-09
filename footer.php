<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPBoxy
 */

?>

	<footer id="colophon" class="main__footer">
		<div class="container">
			<a href="<?php echo esc_url( __( 'https://sajjadcodes.com/', 'wpboxy' ) ); ?>" class="main__footer--copyright">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Developed By %s', 'wpboxy' ), 'SajjadHussain' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpboxy' ), 'wpboxy', '<a href="https://sajjadcodes.com/">Sajjad Hussain</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


<footer class="main__footer">
            <div class="container">
                <p class="main__footer--copyright">©2020, Theme. All Rights Reserved.</p>
            </div>
        </footer>
</body>
</html>