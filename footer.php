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

		<div class="lightGreyBG">
		  <div class="row">
		    <div class="large-12 columns"> 
		      <div class="shim-lrg"></div>
		    </div>
		  </div>  
		  <div class="row"> 
		    <div class="large-12 columns center-copy">
			    <div class="callouts">
			    	<div class="col"><?php dynamic_sidebar( 'subfooter-widgets-catalog' ); ?></div>
			    	<div class="col"><?php dynamic_sidebar( 'subfooter-widgets-order' ); ?></div>
			    	<div class="col"><?php dynamic_sidebar( 'subfooter-widgets-made' ); ?></div>
			    </div>
		    </div>
		  </div>
		  <div class="row">
		    <div class="large-12 columns"> 
		      <div class="shim-lrg"></div>
		    </div>
		  </div>  
		</div>

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
            <li><a href="https://www.facebook.com/cementexusa/"><i class="fa fa-facebook fa-2x"></i></a></li>
            <li><a href="https://twitter.com/CementexJeff"><i class="fa fa-twitter fa-2x"></i></a></li>
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
			</div><!-- Close off-canvas content wrapper -->
		</div><!-- Close off-canvas inner wrapper -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'idealabstarter_before_closing_body' ); ?>

</body>
</html>
