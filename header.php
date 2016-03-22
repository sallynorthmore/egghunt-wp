<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			echo wp_title( '|', true, 'right' );

			// Add the blog name.
			bloginfo( 'name' );

		?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>?v14">
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
			<!-- 
		<script src="https://use.typekit.net/dzj0sfx.js"></script>
	        <script>try{Typekit.load({ async: true });}catch(e){}</script>
 -->
		 <script src="https://use.typekit.net/jqn7urw.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<?php wp_head(); ?>

		<style>
			html {
				margin-top: 0 !important; 
			}
		</style>
	</head>
	<body <?php body_class( $class ); ?>>
        <div class="">
