<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$urlx=get_site_url();
$urlx=str_replace("https://", "",$urlx );
$urlx=str_replace("http://", "", $urlx);
$urlx=str_replace("www.", "", $urlx);
?>
<div class="wrap">


<p style="background-color:#FFF;margin: 0;padding: 10px;box-sizing: border-box;border-radius: 5px;">
<a href="https://www.getseofix.com/?s=wp&u=<?php echo $urlx; ?>" target="blank">
<img src="<?php echo plugins_url( 'logo.png', __FILE__ ); ?>" alt="logo GetSEOfix" />
</a></p>

<h1 style="font-weight: 700;padding: 10px 0;margin: 20px 0 0 0;">Show Visitor IP Address</h1>
<p>This plugin lets you show the IP address of your visitor using a shortcode or a widget inside posts, pages, or template files.</p>
<p style="display:inline-block;border:1px solid #CCC;border-radius:5px;padding:15px;background-color: #fbffd4;line-height: 2;box-sizing: border-box;">
<strong style="font-size: 1.2em;"><?php

echo ucfirst($urlx);
?>: Improve SEO to get higher rankings on Google</strong> <br />&#10148; Try our SEO tools and watch the complete SEO course for free. Create your free account here! <a href="https://www.getseofix.com/?s=wp&u=<?php echo $urlx; ?>" style="text-decoration: none;font-weight: 700;background-color: #008c06;border-radius: 3px;box-sizing: border-box;color: #FFF;padding: 3px 10px;display: block;text-align: center;margin: 10px 0 0 0;"  target="blank">GET STARTED &gt;</a>
</p>
	
 
<form method="post" action="options.php"> 
<?php @settings_fields($PLUGINMATRIX_NAME); ?>

	
<h3>Custom phrase (optional)</h3>
<input style="width:100%" type="text" name="<?php echo $PLUGINMATRIX_NAME?>InputField3" id="<?php echo $PLUGINMATRIX_NAME?>InputField3" value="<?php echo get_option($PLUGINMATRIX_NAME."InputField3");?>" placeholder="e.g. Your ip is"/>
		
<?php @submit_button(); ?>
</form>
	
<h2>OPTION 1: Use a shortcode</h2>
<p>Use this shortcode [Show_IP title="custom-title"] or [Show_IP] in order to display the IP address of your visitor in specific posts or pages. </p>
<p>Use this code &lt;?php echo do_shortcode( &#39;[Show_IP title="custom-title"]&#39; ); ?&gt;
 in order to display the output in your WordPress template.
 </p>
	
<h2 style="margin: 20px 0 0 0;display: inline-block;">OPTION 2: Use a widget</h2>
<p>Go to Appearance > Widgets and add Show_IP widget where you want to show it.</p>
	
</div>