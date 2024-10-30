<?php
/**
 * Plugin Name: Custom Scrollbar Designer
 * Plugin URI: https://troplr.com/
 * Description: Design your own custom scrollbar.
 * Version: 1.0
 * Author: Troplr
 * Author URI: https://troplr.com
 * Requires at least: 4.5
 * Tested up to: 4.7
 *
 * Text Domain: troplr
 *
 */

require_once('titan-framework/titan-framework-embedder.php');

register_uninstall_hook(__FILE__, 'pluginprefix_function_to_run');
add_action( 'tf_create_options', 'scroll_options' );
function scroll_options() {
// Initialize Titan & options here
$titan = TitanFramework::getInstance( 'scroll-options' );


$section = $titan->createThemeCustomizerSection( array(
'name' => 'Custom Scrollbar Designer',
));


$section->createOption( array(
'name' => 'Horizontal Track Shadow Color',
'id' => 'horizontal_track_color',
'type' => 'text',
'alpha' => true,
'default' => '0',

));

$section->createOption( array(
'name' => 'Vertical Track Shadow Color',
'id' => 'vertical_track_colors',
'type' => 'text',
'alpha' => true,
'default' => '0',

));

$section->createOption( array(
'name' => 'Blur Track Shadow Radius',
'id' => 'blur_track_colors',
'type' => 'text',
'alpha' => true,
'default' => '9',

));

$section->createOption( array(
'name' => 'Spread Radius',
'id' => 'spread_radius',
'type' => 'text',
'alpha' => true,
'default' => '1',

));

$section->createOption( array(
'name' => 'Shadow Color',
'id' => 'track_shadow_color',
'type' => 'color',
'alpha' => true,
'default' => '#210182',

));

$section->createOption( array(
'name' => 'Main Track Background Color',
'id' => 'main_track_bg_color',
'type' => 'color',
'alpha' => true,
'desc' => 'Pick a background color',
'default' => '#af002e',
));

$section->createOption( array(
'name' => 'Scrollbar Width',
'id' => 'scrollbar_width',
'type' => 'text',
'desc' => '',
'default' => '12',
));

$section->createOption( array(
'name' => 'Scrollbar Thumb Border Radius',
'id' => 'border_top',
'type' => 'text',
'desc' => 'Border Radius Top',
'default' => '10',
));

$section->createOption( array(
//'name' => 'Scrollbar Border Radius',
'id' => 'border_right',
'type' => 'text',
'desc' => 'Border Radius Right',
'default' => '10',
));

$section->createOption( array(
//'name' => 'Scrollbar Border Radius',
'id' => 'border_bottom',
'type' => 'text',
'desc' => 'Border Radius Bottom',
'default' => '10',
));

$section->createOption( array(
//'name' => 'Scrollbar Border Radius',
'id' => 'border_left',
'type' => 'text',
'desc' => 'Border Radius Left',
'default' => '10',
));


$section->createOption( array(
'name' => 'Scrollbar Thumb Background Color',
'id' => 'scrollbar_thumb',
'type' => 'color',
'alpha' => true,
'desc' => 'Pick a background color',
'default' => '#af002e',
));

$section->createOption( array(
'name' => 'Custom Gradients',
'id' => 'custom_css',
'type' => 'code',
'desc' => 'Put your custom CSS gradients rules here',
'default' => '-webkit-linear-gradient(45deg,
	                                          rgba(255, 255, 255, .2) 35%,
											  transparent 25%,
											  transparent 50%,
											  rgba(255, 255, 255, .2) 50%,
											  rgba(255, 255, 255, .2) 75%,
											  transparent 75%,
											  transparent)',
'lang' => 'css',
) );

$section->createOption( array(
'name' => '',
'id' => 'csdgpay',
'type' => 'note',
'desc' => 'Thankyou for using <b>Custom Scrollbar Designer</b>.<br>You may want to support my development: <a target="_blank" href="https://paypal.me/sandeeptete">Paypal me a tip</a>'
) );

$section->createOption(  array(
'name' => '',
'id' => 'csd_message_grid',
'type' => 'note',
'desc' => 'You may find other plugins from us to be useful below.<br><div class="autowide">
  <div class="module">
    <p><b><a href="https://wordpress.org/plugins/categories-gallery/">Bootstrap Categories Gallery</a></b></p>
  </div>
  <div class="module">
    <p><b><a href="https://wordpress.org/plugins/custom-scroll-bar-designer/">Custom Scrollbar Designer</a></b></p>
  </div>
  <div class="module">
    <p><b><a href="https://wordpress.org/plugins/custom-text-selection-colors/">Custom Text Selection Colors</a></b></p>
  </div>
  <div class="module">
    <p><b><a href="https://wordpress.org/plugins/disable-image-right-click/">Disable Image Right Click</a></b></p>
  </div>
  <div class="module">
    <p><b><a href="https://wordpress.org/plugins/easy-gallery-slideshow/">Easy Gallery Slideshow</a></b></p>
  </div>
  <div class="module">
    <p><b><a href="https://wordpress.org/plugins/exit-popup-show/">Exit Popup Show</a></b></p>
  </div>
  <div class="module">
    <p><b><a href="https://wordpress.org/plugins/popup-modal-for-youtube/">Popup Modal For Youtube</a></b></p>
  </div>
  <div class="module">
    <p><b><a href="https://wordpress.org/plugins/woo-availability-date/">Product Limited Time Availability Date for woocommerce</a></b></p>
  </div>
  <div class="module">
    <p><b><a href="https://wordpress.org/plugins/email-my-posts/">Share Posts To Email</a></b></p>
  </div>
  <div class="module">
    <p><b><a href="https://wordpress.org/plugins/custom-scroll-bar-designer/">Share Woocommerce to Email</a></b></p>
  </div>
  <div class="module">
    <p><b><a href="https://wordpress.org/plugins/share-woocommerce-email/">Custom Scrollbar Designer</a></b></p>
  </div>
  <div class="module">
    <p><b><a href="https://wordpress.org/plugins/total-sales-for-woocommerce/">Total Sales For Woocommerce</a></b></p>
  </div>
</div>'
) );
}

function csd_customcss()
{
  $csdcss = '<style>.autowide {
  margin: 0 auto;
  width: 98%;
}
.autowide img {
  float: left;
  margin: 0 .75rem 0 0;
}
.autowide .module {
  xbackground-color: lightgrey;
  border-radius: .25rem;
  margin-bottom: 1rem;
  color: #0f8cbb;
}
.autowide .module p {
  padding: 4px 0px;
}

/* 2 columns: 600px */
@media only screen and (min-width: 600px) {
  .autowide .module {
    float: left;
    margin-right: 2.564102564102564%;
    width: 48.717948717948715%;
  }
  .autowide .module:nth-child(2n+0) {
    margin-right: 0;
  }
}

/* 3 columns: 768px */
@media only screen and (min-width: 768px) {
  .autowide .module {
    width: 31.623931623931625%;
  }
  .autowide .module:nth-child(2n+0) {
    margin-right: 2.564102564102564%;
  }
  .autowide .module:nth-child(3n+0) {
    margin-right: 0;
  }
}

/* 4 columns: 992px and up */
@media only screen and (min-width: 992px) {
  .autowide .module {
    width: 23.076923076923077%;
  }
  .autowide .module:nth-child(3n+0) {
    margin-right: 2.564102564102564%;
  }
  .autowide .module:nth-child(4n+0) {
    margin-right: 0;
  }
}</style>';
echo $csdcss;

}
add_action('admin_head','csd_customcss');


function scroll_bar()
{
$titan = TitanFramework::getInstance( 'scroll-options' );
$horizontal = $titan->getOption('horizontal_track_color');
$vertical = $titan->getOption('vertical_track_colors');
$blur = $titan->getOption('blur_track_colors');
$spread = $titan->getOption('spread_radius');
$track_shadow_color = $titan->getOption('track_shadow_color');
$main_track_bg_color = $titan->getOption('main_track_bg_color');
$scrollbar_width = $titan->getOption('scrollbar_width');
$scrollbar_thumb = $titan->getOption('scrollbar_thumb');
$border_top = $titan->getOption('border_top');
$border_right = $titan->getOption('border_right');
$border_bottom = $titan->getOption('border_bottom');
$border_left = $titan->getOption('border_left');
$custom_css = $titan->getOption('custom_css');


$fcolor = $titan->getOption( 'font_color' );
$bcolor = $titan->getOption( 'bg_color' );



echo $fullsize_path;
?>


<style type="text/css">
	
	::-webkit-scrollbar-track
{
	-moz-box-shadow: inset <?php echo $horizontal."px"." ".$vertical."px"." ".$blur."px"." ".$spread."px"." ".$track_shadow_color;?>;
	-webkit-box-shadow: inset <?php echo $horizontal."px"." ".$vertical."px"." ".$blur."px"." ".$spread."px"." ".$track_shadow_color;?>;
	background-color: <?php echo $main_track_bg_color;?>;
}

::-webkit-scrollbar
{
	width: <?php echo $scrollbar_width."px";?>;
}
::-moz-scrollbar
{
	width: <?php echo $scrollbar_width."px";?>;
}

::-webkit-scrollbar-thumb
{
	background-color: <?php echo $scrollbar_thumb;?>;	
	border-radius:<?php echo $border_top."px"." ".$border_right."px"." ".$border_bottom."px"." ".$border_left."px";?>;
    background-image: <?php echo $custom_css;?>;
}
::-moz-scrollbar-thumb
{
	background-color: <?php echo $scrollbar_thumb;?>;	
	border-radius:<?php echo $border_top."px"." ".$border_right."px"." ".$border_bottom."px"." ".$border_left."px";?>;
    background-image: <?php echo $custom_css;?>;
}

</style>

 



<?php
}
//End function here

add_action('wp_head', 'scroll_bar', 10);

?>
