<!DOCTYPE html>
	<!--[if lt IE 7 ]><html class="ie ie6" lang="it"><![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="it"><![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="it"><![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta property="og:title" content="<?php if(isset($seo_title)) echo $seo_title." | trip-bangladesh.com"; else echo $site_name; ?>" />
		<meta property="og:description" content="<?php if(isset($seo_description)) echo $seo_description; else echo $site_description; ?>" />
		<meta name="robots" content="index,follow" />
		<meta name="googlebot" content="noarchive" />

		<title><?php if(isset($seo_title)) echo $seo_title; else echo $site_name; ?> </title>
		<meta name="description" content="<?php if(isset($seo_description)) echo $seo_description; else echo $site_description; ?>" />
		<meta name="keywords" content="<?php if(isset($seo_keywords)) echo $seo_keywords; else echo $site_keywords; ?>" />
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="pragma" content="no-cache" />
			
		<meta http-equiv="content-language" content="en-gb" />

		<meta http-equiv="cache-control" content="no-cache, no-store, proxy-revalidate, must-revalidate" />							    
		<?php 
	        echo $this->template->block('name', 'layouts/_stylesheets'); 	
	        echo $this->template->block('name', 'layouts/_javascripts'); 
	    ?>
	</head>
	<body>
		<?php echo $this->template->block('Header', 'layouts/_header'); ?>
		<?php //echo $this->template->block('navHeadermenu', 'layouts/_navigation_menu.php'); ?>
					
		<?php echo $this->template->message(); ?>
		<?php echo $this->template->yield(); ?>
			
		<?php echo $this->template->block('footer', 'layouts/_footer'); ?>	
	</body>
</html>
