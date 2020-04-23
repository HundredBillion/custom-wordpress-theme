<!DOCTYPE html>

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

		<header id="site-header" role="banner">
			<div class="header-logo">
				<img src="https://picsum.photos/90" alt="" class="logo">
				<?php
					// Site title or logo.
					//customtheme_site_logo();
				?>
			</div>
			<?php
				if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
			?>
				<nav aria-label="<?php esc_attr_e( 'Horizontal', 'customtheme' ); ?>" role="navigation">
					<input id="menu-btn" class="menu-btn" type="checkbox">
					<label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>

					<ul class="primary-menu">
						<?php
							if ( has_nav_menu( 'primary' ) ) {
								wp_nav_menu(
									array(
										'container'  => '',
										'items_wrap' => '%3$s',
										'theme_location' => 'primary',
									)
								);
							} elseif ( ! has_nav_menu( 'expanded' ) ) {
								wp_list_pages(
									array(
										'match_menu_classes' => true,
										'show_sub_menu_icons' => true,
										'title_li' => false,
										'walker'   => new CustomTheme_Walker_Page(),
									)
								);
							}
						?>
					</ul>
				</nav>
			<?php
				}
			?>
		</header>

