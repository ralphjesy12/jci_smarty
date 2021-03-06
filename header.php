<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php wp_title( '|', true, 'right' ); ?><? bloginfo();?></title>
	<meta name="keywords" content="HTML5,CSS3,Template" />
	<meta name="description" content="" />

	<!-- mobile settings -->
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<? wp_head();?>
	<link rel='stylesheet' id='main-css' href='<?=get_stylesheet_directory_uri();?>/assets/css/main.css' type='text/css' media='all' />

	<link rel="apple-touch-icon" sizes="180x180" href="<?=get_stylesheet_directory_uri();?>/assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?=get_stylesheet_directory_uri();?>/assets/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?=get_stylesheet_directory_uri();?>/assets/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?=get_stylesheet_directory_uri();?>/assets/favicon/manifest.json">
	<link rel="mask-icon" href="<?=get_stylesheet_directory_uri();?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="<?=get_stylesheet_directory_uri();?>/assets/favicon/favicon.ico">
	<meta name="msapplication-config" content="<?=get_stylesheet_directory_uri();?>/assets/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

</head>

<!--
AVAILABLE BODY CLASSES:
smoothscroll 			= create a browser smooth scroll
enable-animation		= enable WOW animations
bg-grey					= grey background
grain-grey				= grey grain background
grain-blue				= blue grain background
grain-green				= green grain background
grain-blue				= blue grain background
grain-orange			= orange grain background
grain-yellow			= yellow grain background
boxed 					= boxed layout
pattern1 ... patern11	= pattern background
menu-vertical-hide		= hidden, open on click
BACKGROUND IMAGE [together with .boxed class]
data-background="assets/images/boxed_background/1.jpg"
-->
<body class="smoothscroll enable-animation font-helvetica">

	<!-- wrapper -->
	<div id="wrapper">
		<?php include 'partials/content-header.php';
