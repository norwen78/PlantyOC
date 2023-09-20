<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header">
			<nav class="header">
			    <div class="header">
				    <a href="http://localhost/planty/">
				        <img class="logo" src="wp-content/themes/planty/img/logo.png" alt="Logo Planty">
                    </a>
			    </div>

                <div class="header-menu">
					<a class="rencontrer" href="#">Nous rencontrer</a>

					<button class="commander" href="#">Commander</button>
			    </div>
            </nav>
		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
