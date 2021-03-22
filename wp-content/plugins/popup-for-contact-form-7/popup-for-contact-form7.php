<?php
/**
 * Plugin Name: Popup for Contact Form 7 
 * Plugin URI: ayaz.khorajia@gmail.com
 * Description: This plugin will show the popup when Contact Form 7 has been submitted. You can customize popup title, message and colors from backend.
 * Version: 1.2
 * Author: aiyaz
 * Author URI: ayaz.khorajia@gmail.com
 * License: GPL2
 */

/* deactivate plugin if Contact Form 7 are not active*/

function pfcf_show_admin_notice()
{
	if ($out = get_transient(get_current_user_id() . 'cf7error'))
	{
		deactivate_plugins(plugin_basename(__FILE__));
		delete_transient(get_current_user_id() . 'cf7error');
		echo '<div class="error"><p> This plugin is deactivated because it require <a href="plugin-install.php?tab=search&s=contact+form+7">Contact Form 7</a> plugin installed and activated.</p></div>';
	}
}

add_action('admin_notices', 'pfcf_show_admin_notice');

function pfcf_plugin_activate()
{
	if (!(is_plugin_active('contact-form-7/wp-contact-form-7.php')))
	{
		set_transient(get_current_user_id() . 'cf7error', "message");
	}
}

register_activation_hook(__FILE__, 'pfcf_plugin_activate');

/* Register style and script */

function pfcf_add_scripts()
{
	wp_register_script('custom-script', plugins_url('/js/custom-script.js', __FILE__));
	wp_register_style('custom-style', plugins_url('/css/custom-style.css', __FILE__));
	wp_enqueue_script('custom-script');
	wp_enqueue_style('custom-style');
}

add_action('wp_enqueue_scripts', 'pfcf_add_scripts', 15, 0);


function pfcf_add_color_picker( $hook ) {
 
    if( is_admin() ) { 
	   wp_register_script('admin-script', plugins_url('/js/admin-script.js', __FILE__));
	   wp_enqueue_script('admin-script');
       wp_enqueue_style( 'wp-color-picker' ); 
    }
}
add_action( 'admin_enqueue_scripts', 'pfcf_add_color_picker' );

/* create custom plugin settings menu */
add_action('admin_menu', 'pfcf_create_sub_menu');

function pfcf_create_sub_menu()
{
	add_submenu_page('wpcf7', 'Popup Settings', 'Popup Settings', 'manage_options', 'pfcf-setting-page', 'pfcf_settings_page');
	add_action('admin_init', 'pfcf_register_settings');
}

function pfcf_register_settings()
{

	// register our settings

	register_setting('pfcf-plugin-settings-group', 'popup_title');
	register_setting('pfcf-plugin-settings-group', 'popup_footer_text');
	register_setting('pfcf-plugin-settings-group', 'popup_description');
	register_setting('pfcf-plugin-settings-group', 'popup_background');
	register_setting('pfcf-plugin-settings-group', 'image_url');
	register_setting('pfcf-plugin-settings-group', 'popup_font_color');
	register_setting('pfcf-plugin-settings-group', 'popup_width');
	register_setting('pfcf-plugin-settings-group', 'popup_height');
	register_setting('pfcf-plugin-settings-group', 'popup_duration');
}

function pfcf_settings_page()
{
?>
<div class="wrap">
<h2>Popup Settings</h2>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('#upload-btn').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            $('#image_url').val(image_url);
        });
    });
});
</script>
<form method="post" action="options.php">
    <?php
	settings_fields('pfcf-plugin-settings-group'); ?>
    <?php
	do_settings_sections('pfcf-plugin-settings-group'); ?>
    <table class="form-table">
       
	   <tr valign="top">
        <th scope="row">Popup Width and Height</th>
        <td><input type="text" name="popup_width" class="small-text"  value="<?php echo esc_attr(get_option('popup_width')); ?>" /> X 
		<input type="text" name="popup_height" class="small-text"  value="<?php echo esc_attr(get_option('popup_height')); ?>" />
		<span class="description">eg. 500px OR 70%</span></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Header text</th>
        <td><input type="text" name="popup_title" class="regular-text"  value="<?php echo esc_attr(get_option('popup_title')); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Description</th>
		<td>
		<?php
		$content = esc_attr(get_option('popup_description'));
		$editor_id = 'popup_description';
		wp_editor( $content, $editor_id );
		?>
		</td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Footer text</th>
        <td><input type="text" name="popup_footer_text" class="regular-text"  value="<?php echo esc_attr(get_option('popup_footer_text')); ?>" /></td>
        </tr>
	
	<tr valign="top">
        <th scope="row">Font Color</th>
        <td><input type="text" name="popup_font_color" class="color-pick regular-text"  value="<?php	echo esc_attr(get_option('popup_font_color')); ?>" /></td>
    </tr>
        
    <tr valign="top">
        <th scope="row">Background Color</th>
        <td><input type="text" name="popup_background" class="color-pick regular-text"  value="<?php	echo esc_attr(get_option('popup_background')); ?>" /></td>
    </tr>
    <tr valign="top">
    <th scope="row">Background Image</th>
    <td><input type="text" name="image_url" id="image_url" class="regular-text" value="<?php echo esc_attr(get_option('image_url')); ?>">
    <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Upload Image"></td>
	</tr>
	
	<tr valign="top">
        <th scope="row">Auto Hide after</th>
        <td><input type="text" name="popup_duration" class="medium-text"  value="<?php	echo esc_attr(get_option('popup_duration')); ?>" />
		<span class="description">Duration in milliseconds eg. 5000 (Popup will hide after 5 minute).</span></td>
		</td>
    </tr>
	
    </table>
    <?php
	wp_enqueue_script('jquery');
	wp_enqueue_media();
	submit_button(); 
	?>
</form>
</div>
<?php
}

function pfcf_render_popup()
{
	$title  = get_option('popup_title');
	$footer_text  = get_option('popup_footer_text');
	$description  = trim(preg_replace('/\s+/', ' ', get_option('popup_description'))); 
	$background  = get_option('popup_background');
	$background_image  = get_option('image_url');
	$font_color  = get_option('popup_font_color');
	$width  = get_option('popup_width');
	$height  = get_option('popup_height');
	$duration  = get_option('popup_duration');
	

	$popup_title = !empty($title) ? $title : 'Thank you!';
	$footer_text = !empty($footer_text) ? $footer_text : '';
	$popup_description = !empty($description) ? $description : 'Form has been submitted succesfully.';
	$popup_background = !empty($background) ? $background : '#ffffff';
	$background_img = !empty($background_image) ? $background_image : '';
	$popup_font_color = !empty($font_color) ? $font_color  : '#000000';
	$popup_width = !empty($width) ? $width  : '500px';
	$popup_height = !empty($height) ? $height  : 'auto';
	$popup_duration = !empty($duration) ? $duration  : '100000000000';
	$return = <<<EOT
	<script>


var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

var popHtml = '<div id="popup" style="width:{$popup_width}; height: {$popup_height}; background: {$popup_background} url({$background_img}) no-repeat right top; background-size:cover; color: {$popup_font_color} !important; " class="modal-box"><header><a href="#" class="js-modal-close close">×</a><h3>{$popup_title} </h3></header><div class="modal-body"><p> {$popup_description} </p></div><footer> {$footer_text} </footer></div>';
jQuery("body").append(popHtml);	

	jQuery(".wpcf7-submit").click(function(event) {
		jQuery( document ).ajaxComplete(function(event, xhr, settings) {
		var data=xhr.responseText;
		var jsonResponse = JSON.parse(data);
		if(jsonResponse["mailSent"] === true)
		{
		    event.preventDefault();
		    jQuery("body").append(appendthis);
		    jQuery(".modal-overlay").fadeTo(500, 0.7);
		    jQuery('#popup').fadeIn("popup");
		    jQuery(".wpcf7-response-output").css( "display", "none" ); 
			setTimeout(function(){
				jQuery( ".js-modal-close" ).trigger( "click" );
			}, {$popup_duration});
		}
	});
	});
	</script>
	
EOT;
	echo $return;
}

add_action('wp_footer', 'pfcf_render_popup', 20);
