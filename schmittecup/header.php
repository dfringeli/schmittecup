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


		<?php wp_head(); ?>



	</head>



	<body <?php body_class(); ?>>



		<?php

		wp_body_open();

		?>



		<header id="site-header" class="header-footer-group" role="banner">



			<div class="header-inner section-inner">



				<div class="header-titles-wrapper">

					<div class="header-titles">

						<?php

							// Site title or logo.

							twentytwenty_site_logo();

						?>

					</div><!-- .header-titles -->

				</div><!-- .header-titles-wrapper -->


			</div><!-- .header-inner -->

		</header><!-- #site-header -->

		<?php
