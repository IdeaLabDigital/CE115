<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

?>

		</section>
		<?php do_action( 'idealabstarter_before_footer' ); ?>
		<footer id="footer">
			<div class="row">
				<div class="small-12 medium-6 large-3 columns">
					<?php dynamic_sidebar( 'footer-widgets-left' ); ?>
				</div>
				<div class="small-12 medium-6 large-3 columns">
					<?php dynamic_sidebar( 'footer-widgets-center' ); ?>
				</div>
				<div class="small-12 medium-6 large-3 columns">
					<?php dynamic_sidebar( 'footer-widgets-right' ); ?>
				</div>
				<div class="small-12 medium-6 large-3 columns">
          <ul class="inline-list">
            <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
            <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
            <li><a href=""><i class="fa fa-instagram fa-2x"></i></a></li>
          </ul> 
        </div>
			</div>
			<div class="row">
				<div class="large-12 columns">
	        <div class="copyright">&reg; <?php echo date('Y'); ?>&nbsp;All Rights Reserved. Cementex Products, Inc. is a registered trademark</div>
	      </div>
			</div>
		</footer>
		<?php do_action( 'idealabstarter_after_footer' ); ?>

		<?php do_action( 'idealabstarter_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'idealabstarter_before_closing_body' ); ?>

<!-- REMOVE FOR PRODUCTION! -->
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.13.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>

</body>
</html>
