<?php
/**
 * The Find Distributors Page Template
 * Page must have slug of "distributors"!!
 *
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

get_header(); ?>

<div class="page-wrap">

	<div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

	<div class="row">
		<div class="medium-11 medium-centered columns">

			<article class="main-content">

				<header>
					<h2 class="text-center"><?php the_title(); ?></h2>
					<p class="text-center">To find a distributor in your area, click the appropriate button below:</p>
				</header>

				<hr>

				<div class="row small-up-1 medium-up-2 center-copy">
		      <div class="column shim-bot-med">
		        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Finder-USA.png"></p>
		        <h4><a href="/ce115/distributors-usa.php/">Find USA Distributors</a></h4>
		        <p>In the United States Only</p>
		      </div>          
		      <div class="column shim-bot-med">
		        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Finder-Canada.png"></p>
		        <h4><a href="/ce115/distributors-canada.php/">Find Canadian Distributors</a></h4>
		        <p>In Canada Only</p>          
		      </div>          
		      <div class="column shim-bot-med">
		        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Finder-Globe.png"></p>
		        <h4><a href="/ce115/distributors-international.php/">Find International Distributors</a></h4>
		        <p>Outside of North America</p>            
		      </div>          
		      <div class="column shim-bot-med">
		        <p class="show-for-large"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Finder-computer.png"></p>            
		        <p class="show-for-medium-only"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Finder-ipad.png"></p>            
		        <p class="show-for-small-only"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Finder-iphone.png"></p>
		        <h4><a href="/ce115/distributors-web.php/">Buy Online</a></h4>
		        <p>Via our Web Distributors</p>
		      </div>
		    </div>

				<div class="row">
					<div class="medium-8 medium-centered large-6 large-centered columns shim-top-sml">
		        <p><a href="mailto:tjohnson@cementexusa.com" class="button">Learn More about our Distribution Programs Today</a></p>
		        <p><a href="http://fs6.formsite.com/cementex/form923489303/index.html" target="-blank" class="button">Update Your Contact Information Online Now!</a></p>
		        <p><a href="/ce115/salesreps/" class="button">Looking for local support? Contact your Cementex rep using our Sales Rep finder</a></p>
		      </div>
		    </div>

			</article>

		</div>
	</div>

	<div class="row">
    <div class="large-12 columns">
      <div class="shim-lrg"></div>
    </div>
  </div>

</div>

<?php get_footer();
