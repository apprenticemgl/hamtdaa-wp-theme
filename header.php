<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hamtdaa
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" style="" lang="zxx"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Coming Soon Ultimate HTML5 Coming Soon Template For Your Ultimate Business.">
    <meta name="keywords" content="Coming Soon,Black, Personal, Portfolio, Agency, Onepage, Html, Business, Parallax, Perticle, Video">

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!--====== TITLE TAG ======-->
    <title><?php the_title(); ?></title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="<?= get_template_directory_uri(); ?>/assets/favicon.png">

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/normalize.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/animate.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/magnific-popup.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/typed.css">
    <link href="<?= get_template_directory_uri(); ?>/assets/bootstrap.css" rel="stylesheet">
    <link href="<?= get_template_directory_uri(); ?>/assets/font-awesome.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="<?= get_template_directory_uri(); ?>/assets/style.css" rel="stylesheet">
    <link href="<?= get_template_directory_uri(); ?>/assets/responsive.css" rel="stylesheet">

    <script src="<?= get_template_directory_uri(); ?>/assets/modernizr-2.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	<?php wp_head(); ?>
</head><style type="text/css" id="custom-css-injector"></style>

<body <?php body_class('transparent-layer'); ?>>
<?php wp_body_open(); ?>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader" style="display: none;">
        <div class="preloader-spinner">
            <img src="<?= get_template_directory_uri(); ?>/assets/loading.svg" alt="">
        </div>
    </div>