<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo( 'name' ); $site_description = get_bloginfo( 'description' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	 
	 <link rel="stylesheet" href="<?php echo plugins_url('assets/css/style.css',dirname(__FILE__)); ?>">
	 <link rel='stylesheet' id='luunch_source_sans_pro-css'  href='//fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C700' type='text/css' media='all' />
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	 <script type='text/javascript' src='<?php echo plugins_url('assets/js/main.js',dirname(__FILE__)); ?>'></script>
	 

    <style type="text/css">
	 	body {
	 		background-color:<?php echo esc_attr( get_theme_mod('colorlib_coming_soon_background_color', '#f5f5f5') ); ?> !important;
			background-repeat:<?php echo esc_attr(get_theme_mod( 'colorlib_coming_soon_background_repeat', 'no-repeat')); ?> !important;
			background-position: <?php echo esc_attr(get_theme_mod( 'colorlib_coming_soon_background_position', 'center')); ?> !important;
			background-attachment:fixed;
			-webkit-background-size: <?php echo esc_attr(get_theme_mod( 'colorlib_coming_soon_background_cover', 'cover')); ?>; -moz-background-size: <?php echo esc_attr(get_theme_mod( 'colorlib_coming_soon_background_cover', 'cover')); ?>; -o-background-size: <?php echo esc_attr(get_theme_mod( 'colorlib_coming_soon_background_cover', 'cover')); ?>; background-size: <?php echo esc_attr(get_theme_mod( 'colorlib_coming_soon_background_cover', 'cover')); ?>;
			<?php if (get_theme_mod( 'colorlib_coming_soon_background_image', plugin_dir_url( __FILE__ ) .'../assets/images/bg.jpg') ) : ?>
			background-image:url("<?php echo esc_attr(get_theme_mod( 'colorlib_coming_soon_background_image', plugin_dir_url( __FILE__ ) .'../assets/images/bg.jpg' )); ?>") !important;
			<?php endif ?>
	 	}
		<?php echo wp_kses(get_theme_mod( 'colorlib_coming_soon_page_custom_css' ), true); ?>
    </style>
  </head>

  <body>
	  <div id="body-background">
	  
      <!-- Status: Shows if the subscription succeeded or not. -->
      <div id="loading">
          <span class="status icon"></span>
      </div>
	  
      <header class="row" id="header">
          <div class="content">
          	<?php if (get_theme_mod( 'colorlib_coming_soon_plugin_logo', plugin_dir_url( __FILE__ ) .'../assets/images/logo.png') ) : ?>
         		<span class="logo"><img src="<?php echo esc_attr(get_theme_mod( 'colorlib_coming_soon_plugin_logo', plugin_dir_url( __FILE__ ) .'../assets/images/logo.png' )); ?>" a;t="<?php bloginfo('name'); ?>"></span>
				<?php else: ?>
				<span><?php bloginfo('name'); ?></span>
				<?php endif; ?>          
          </div>
			 
			 <?php if (get_theme_mod( 'colorlib_coming_soon_percentage_completed', '75') ) : ?>
				 <div class="status" style="width:  <?php echo esc_attr(get_theme_mod( 'colorlib_coming_soon_percentage_completed', '75')); ?>%;">
					 <span><?php echo esc_attr(get_theme_mod( 'colorlib_coming_soon_percentage_completed', '75')); ?>%</span>
          <?php else: ?>
              <div class="status">
          <?php endif; ?>
          </div>
      </header>

      <!-- Intro: Your intro text and MailChimp form. -->
      <div class="row" id="intro">
			<div class="content">
				
            <!-- Pre-Submission: This is what's displayed before the subscription form has been submitted. -->
            <div id="pre-subscribe">
                <div class="row" id="copy">
						 <?php echo wp_kses(get_theme_mod( 'colorlib_coming_soon_page_heading', '<h1>Something <strong>really good</strong> is coming <strong>very soon</strong>.</h1>' ), true); ?>
						 <p><?php echo wp_kses(get_theme_mod( 'colorlib_coming_soon_page_content', 'If you have something new you’re looking to launch, you’re going to want to start building a community of people interested in what you’re launching. The Launch template by is the best way to do just that.' ), true); ?></p>
						 
						
	
						 
						 <?php if (!get_theme_mod( 'colorlib_coming_soon_mailchimp_form') == 1 ) : ?>
						 <div class="row" id="subscribe">
							 <form action="<?php if (get_theme_mod( 'colorlib_coming_soon_mailchimp_form_url')) : ?><?php echo esc_attr(get_theme_mod( 'colorlib_coming_soon_mailchimp_form_url')); ?><?php else: ?>/
							 https://colorlib.com/<?php endif; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="row" class="validate" id="mailchimp" target="_blank">
								 
						        <div class="mc-field-group"> <input type="email" name="EMAIL" class="required email" id="mce-EMAIL"  value="" placeholder="you@youremail.com"></div>
							 		
									<div id="mce-responses" class="clear">
							 			<div class="response" id="mce-error-response" style="display:none"></div>
							 			<div class="response" id="mce-success-response" style="display:none"></div>
							 		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									<button type="submit" name="subscribe"  id="mc-embedded-subscribe" class="button icon submit"></button>
									
						     </form>
						 </div>
						 <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
						 <!--End mc_embed_signup-->
						 
						 <?php endif; ?>
						
					</div><!-- close .row #copy -->
				</div><!-- close #pre-subscribe -->
				
				<div class="row" id="social">
					<?php if (get_theme_mod( 'colorlib_coming_soon_social_twitter', 'https://www.twitter.com/circathemes') ) : ?>
	  					 <a class="icon twitter" href="<?php echo esc_url(get_theme_mod( 'colorlib_coming_soon_social_twitter', 'https://www.twitter.com/circathemes')); ?>" target="_blank"></a>
					<?php endif; ?>
					
					<?php if (get_theme_mod( 'colorlib_coming_soon_social_facebook', 'https://www.facebook.com/circathemes') ) : ?>
	  					 <a class="icon facebook" href="<?php echo esc_url(get_theme_mod( 'colorlib_coming_soon_social_facebook', 'https://www.facebook.com/circathemes')); ?>" target="_blank"></a>
					<?php endif; ?>
					
					<?php if (get_theme_mod( 'colorlib_coming_soon_social_email', 'you@domain.com') ) : ?>
	  					 <a class="icon email" href="mailto:<?php echo esc_attr(get_theme_mod( 'colorlib_coming_soon_social_email', 'you@domain.com')); ?>"></a>
					<?php endif; ?>
					
				</div><!-- c lose #social-->
	
				
				<footer class="row"><?php echo wp_kses(get_theme_mod( 'colorlib_coming_soon_page_footer', 'Designed by <a href="http://www.leeflets.com" rel="nofollow" target="_blank">Jason Schuller</a> & Developed by <a href="http://www.wpkube.com/" rel="nofollow" target="_blank">WP Kube</a>' ), true); ?></footer>
				
			</div><!-- close .content -->
		</div><!-- close .row #intro -->
		<div style="clear: both;"></div>
		
	  </div>
  </body>
</html>