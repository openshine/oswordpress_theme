<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!doctype html> 
<html <?php language_attributes(); ?>> 
<head> 
<meta charset="utf-8"> 
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" href="<?php echo get_settings('siteurl') ?>/wp-content/themes/openshine/reset.css" /> 
<link rel="stylesheet" type="text/css" href="<?php echo get_settings('siteurl') ?>/wp-content/themes/openshine/style.css" /> 
<link rel="shortcut icon" href="<?php echo get_settings('siteurl') ?>/wp-content/themes/openshine/favicon.ico" /> 
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="<?php echo get_settings('siteurl') ?>/wp-content/themes/openshine/ie_style.css" /><![endif]--> 
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="<?php echo get_settings('siteurl') ?>/wp-content/themes/openshine/ie8_style.css" /><![endif]--> 
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
<link href='http://fonts.googleapis.com/css?family=Lato:light' rel='stylesheet' type='text/css' /> 
<link href='http://fonts.googleapis.com/css?family=Lato:bold' rel='stylesheet' type='text/css' /> 
<link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css' /> 
<link href='http://fonts.googleapis.com/css?family=Lato:200' rel='stylesheet' type='text/css' /> 
<link href='http://fonts.googleapis.com/css?family=Lato:regular' rel='stylesheet' type='text/css' /> 
<link href='http://fonts.googleapis.com/css?family=Arvo:regular,italic,bold,bolditalic' rel='stylesheet' type='text/css' /> 
<script type="text/javascript" charset="utf-8"> 
var newwindow;
function poptastic(url)
{
	newwindow=window.open(url,'name','height=350,width=600');
	if (window.focus) {newwindow.focus()}
}
</script>
<script type="text/javascript">
   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', 'UA-23147108-1']);
   _gaq.push(['_setDomainName', '.openshine.com']);
   _gaq.push(['_setAllowHash', false]);
   _gaq.push(['_trackPageview']);
   (function() {
     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
   })();
</script>
</head> 
<body> 
<div id="wrapper"> 
	<header id="head"> 
		<div class="topHead"> 
			<h1><a href="/" title="Back to Home" rel="home">Open Shine</a></h1> 
			<p id="lemaLogo">Blogs</p> 
			<div id="socialIcons"> 
				<ul class="clearfix d-b"> 
					<li><a href="mailto:info@openshine.com" title="Contact us" class="contact">Contact us</a></li> 
					<li><a href="https://twitter.com/#!/OpenShine" title="Join our Twitter" class="twitter">Twitter</a></li> 
					<li><a href="http://identi.ca/openshine" title="Join our Identi.ca" class="identica">Identica</a></li> 
					<li><a href="http://www.linkedin.com/company/1220214" title="Join our Linkedin" class="linkedin">Linkedin</a></li> 
					<li><a href="http://www.github.com/openshine" title="Join our github" class="github">GitHub</a></li> 
				</ul> 
			</div> 
		</div><!--topHead--> 
		<div class="bottomHead"> 
			<nav> 
				<ul> 
					<li><a href="http://www.openshine.com" title="">Home</a></li> 
					<li><a href="http://www.openshine.com/company" title="">Company</a></li> 
					<li><a href="http://www.openshine.com/projects" title="">Projects</a></li> 
					<li class="active"><a href="http://www.openshine.com/live" title="">Live!</a></li> 
					<li><a href="http://www.openshine.com/contact" title="">Contact</a></li> 
				</ul> 
			</nav> 
			<p class="backTo"><a href="<?php echo home_url( '/' ); ?>" title="Back to Home"><span></span>Back to blog index</a></p> 
			<h2 id="claim"><?php bloginfo( 'name' ); ?></h2>
			<p id="claimsub"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
		</div><!--bottomHead--> 
	</header> 
	
	<div id="content" class="clearfix interior"> 
