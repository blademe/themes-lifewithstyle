<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="Web Design, Social Media Marketing, Digital Branding, and more! Life with Style Technologies takes care of your marketing so you can focus on what you do best.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Website, Web design, Website design, Web Designer, Cape Town, Marketing, Online Marketing, Digital Branding, Hardware Sales, Software Sales, Computer Sales">
	<meta name="author" content="Russel Fish">
    <?php wp_enqueue_script("jquery"); ?>	
	<?php wp_head(); ?>

	<!-- CSS file(s) to be used -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" >

	<!--    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>   -->
	<!--    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>    -->
	<!--    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>   -->
</head>

	<!-- CODE TO DISABLE RIGHT CLICKING ON WEBSITE Note: This can be overcome by more advanced visitors
	<script language=JavaScript> function clickIE4(){ if (event.button==2){ return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("return false") </script>
	!!CODE REMOVED!! -->

	<!-- ORIGINAL CODE CREDIT: http://www.hypergurl.com/norightclick.html 
	<script language=JavaScript> var message="Sorry, right-clicking has been disabled on this website."; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>

<body <?php body_class(); ?>>

	<!-- FACEBOOK FOLLOW CODE -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=260362030797619";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>