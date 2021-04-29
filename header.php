<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action('wp_body_open'); ?>
	<nav id="navigation" class="navigation shadow-sm">
		<div class="brand">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri() ?>/images/truehostlogo.png" />
			</div>
			<a class="language js-toggle-language-selector" role="button">
				<i class="fas fa-globe"></i>
				<span class="locale">US</span>
			</a>
		</div>
		<div class="navbar__desktop">
			<ul class="nav__groups">
				<li class="nav-item__group js-nav-group">
					<a class="dropdown-toggle group__name" href="#" role="button" id="navbarDropdown" aria-expanded="false">
						Dropdown
					</a>
					<ul class="group__dropdown-menu group__product-list shadow-sm" aria-labelledby="navbarDropdown">
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item__group js-nav-group">
					<a class="dropdown-toggle group__name" href="#" role="button" id="navbarDropdown" aria-expanded="false">
						Dropdown
					</a>
					<ul class="group__dropdown-menu group__product-list shadow-sm" aria-labelledby="navbarDropdown">
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item__group js-nav-group">
					<a class="dropdown-toggle group__name" href="#" role="button" id="navbarDropdown" aria-expanded="false">
						Dropdown
					</a>
					<ul class="group__dropdown-menu group__product-list shadow-sm" aria-labelledby="navbarDropdown">
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item__group js-nav-group">
					<a class="dropdown-toggle group__name" href="#" role="button" id="navbarDropdown" aria-expanded="false">
						Dropdown
					</a>
					<ul class="group__dropdown-menu group__product-list shadow-sm" aria-labelledby="navbarDropdown">
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
						<li>
							<a class="product" href="#">
								<i class="product__icon fas fa-cloud fa-2x"></i>
								<div class="product__text">
									<span class="product__name">Product Name</span>
									<span class="product__description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="actions">
				<a href="whmcs/index.php?rp=/login" role="button" class="login action">
					<i class="icon fas fa-user"></i>
					<span class="text">Login</span>
				</a>
				<a href="/whmcs/cart.php?a=view" role="button" class="cart action js-navbar-cart">
					<div class="cart__icon position-relative d-flex">
						<i class="icon fas fa-shopping-cart"></i>
						<span class="number position-absolute js-number">0</span>
					</div>
					<span class="text">Cart</span>
				</a>
			</div>
		</div>
		<div class="navbar__mobile">
			<div class="actions">
				<a href="/whmcs/cart.php?a=view" role="button" class="cart js-navbar-cart">
					<div class="cart__icon position-relative d-flex">
						<i class="icon fas fa-shopping-cart"></i>
						<span class="number position-absolute js-number">0</span>
					</div>
				</a>
				<a role="button" class="menu js-navbar-menu" aria-label="menu" aria-expanded="false">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</div>
		</div>
	</nav>
	<div class="navbar__mobile--collapsible js-navbar-mobile">
		<ul class="nav__groups">
			<li class="nav__group js-nav__group">
				<a class="nav__group-name dropdown-toggle js-nav__group-name--open" role="button" id="nav__menu--collapsible" aria-expanded="false">
					Dropdown
				</a>
				<a class="nav__group-name dropdown-toggle js-nav__group-name--close d-none" role="button" id="nav__menu--collapsible" aria-expanded="false">
					Dropdown
				</a>
				<ul class="nav__dropdown nav__products js-nav__dropdown shadow-sm" aria-labelledby="nav__menu--collapsible">
					<li>
						<a class="nav__product" href="#">
							<i class="nav__product-icon fas fa-cloud fa-2x"></i>
							<div class="nav__product-text">
								<span class="nav__product-name">Product Name</span>
								<span class="nav__product-description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
							</div>
						</a>
					</li>
					<li>
						<a class="nav__product" href="#">
							<i class="nav__product-icon fas fa-cloud fa-2x"></i>
							<div class="nav__product-text">
								<span class="nav__product-name">Product Name</span>
								<span class="nav__product-description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
							</div>
						</a>
					</li>
					<li>
						<a class="nav__product" href="#">
							<i class="nav__product-icon fas fa-cloud fa-2x"></i>
							<div class="nav__product-text">
								<span class="nav__product-name">Product Name</span>
								<span class="nav__product-description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav__group js-nav__group">
				<a class="nav__group-name dropdown-toggle js-nav__group-name--open" role="button" id="nav__menu--collapsible" aria-expanded="false">
					Dropdown
				</a>
				<a class="nav__group-name dropdown-toggle js-nav__group-name--close d-none" role="button" id="nav__menu--collapsible" aria-expanded="false">
					Dropdown
				</a>
				<ul class="nav__dropdown nav__products js-nav__dropdown shadow-sm" aria-labelledby="nav__menu--collapsible">
					<li>
						<a class="nav__product" href="#">
							<i class="nav__product-icon fas fa-cloud fa-2x"></i>
							<div class="nav__product-text">
								<span class="nav__product-name">Product Name</span>
								<span class="nav__product-description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
							</div>
						</a>
					</li>
					<li>
						<a class="nav__product" href="#">
							<i class="nav__product-icon fas fa-cloud fa-2x"></i>
							<div class="nav__product-text">
								<span class="nav__product-name">Product Name</span>
								<span class="nav__product-description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
							</div>
						</a>
					</li>
					<li>
						<a class="nav__product" href="#">
							<i class="nav__product-icon fas fa-cloud fa-2x"></i>
							<div class="nav__product-text">
								<span class="nav__product-name">Product Name</span>
								<span class="nav__product-description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav__group js-nav__group">
				<a class="nav__group-name dropdown-toggle js-nav__group-name--open" role="button" id="nav__menu--collapsible" aria-expanded="false">
					Dropdown
				</a>
				<a class="nav__group-name dropdown-toggle js-nav__group-name--close d-none" role="button" id="nav__menu--collapsible" aria-expanded="false">
					Dropdown
				</a>
				<ul class="nav__dropdown nav__products js-nav__dropdown shadow-sm" aria-labelledby="nav__menu--collapsible">
					<li>
						<a class="nav__product" href="#">
							<i class="nav__product-icon fas fa-cloud fa-2x"></i>
							<div class="nav__product-text">
								<span class="nav__product-name">Product Name</span>
								<span class="nav__product-description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
							</div>
						</a>
					</li>
					<li>
						<a class="nav__product" href="#">
							<i class="nav__product-icon fas fa-cloud fa-2x"></i>
							<div class="nav__product-text">
								<span class="nav__product-name">Product Name</span>
								<span class="nav__product-description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
							</div>
						</a>
					</li>
					<li>
						<a class="nav__product" href="#">
							<i class="nav__product-icon fas fa-cloud fa-2x"></i>
							<div class="nav__product-text">
								<span class="nav__product-name">Product Name</span>
								<span class="nav__product-description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav__group js-nav__group">
				<a class="nav__group-name dropdown-toggle js-nav__group-name--open" role="button" id="nav__menu--collapsible" aria-expanded="false">
					Dropdown
				</a>
				<a class="nav__group-name dropdown-toggle js-nav__group-name--close d-none" role="button" id="nav__menu--collapsible" aria-expanded="false">
					Dropdown
				</a>
				<ul class="nav__dropdown nav__products js-nav__dropdown shadow-sm" aria-labelledby="nav__menu--collapsible">
					<li>
						<a class="nav__product" href="#">
							<i class="nav__product-icon fas fa-cloud fa-2x"></i>
							<div class="nav__product-text">
								<span class="nav__product-name">Product Name</span>
								<span class="nav__product-description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
							</div>
						</a>
					</li>
					<li>
						<a class="nav__product" href="#">
							<i class="nav__product-icon fas fa-cloud fa-2x"></i>
							<div class="nav__product-text">
								<span class="nav__product-name">Product Name</span>
								<span class="nav__product-description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
							</div>
						</a>
					</li>
					<li>
						<a class="nav__product" href="#">
							<i class="nav__product-icon fas fa-cloud fa-2x"></i>
							<div class="nav__product-text">
								<span class="nav__product-name">Product Name</span>
								<span class="nav__product-description text-muted">Lorem ipsum dolor sit amet, consectetur</span>
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav__group">
				<div class="nav__social">
					<a href="https://www.facebook.com/truehost.cloud">
						<i class="fab fa-facebook-square fa-2x"></i>
					</a>
					<a href="https://twitter.com/truehostcloud">
						<i class="fab fa-twitter-square fa-2x"></i>
					</a>
					<a href="https://www.instagram.com/truehost.cloud/">
						<i class="fab fa-instagram-square fa-2x"></i>
					</a>
					<a href="https://www.linkedin.com/company/truehost-cloud">
						<i class="fab fa-linkedin-square fa-2x"></i>
					</a>
					<a href="skype:truehostcloud">
						<i class="fab fa-skype fa-2x"></i>
					</a>
					<a href="whatsapp:+1 469 73 00 113">
						<i class="fab fa-whatsapp-square fa-2x"></i>
					</a>
				</div>
			</li>
			<li class="nav__login">
				<a href="/whmcs/index.php?rp=/login" role="button" class="login action">
					<i class="icon fas fa-user"></i>
					<span class="text">Login</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="language-selector js-language-selector">
		<div class="language-selector__actions">
			<div class="action__search input-group mb-3 js-action__search">
				<input type="text" class="form-control" placeholder="Enter Language" aria-label="Enter Language" aria-describedby="language-selector__search">
				<a role="button" class="input-group-text" id="language-selector__search">Search</a>
			</div>
			<a role="button" class="action__close js-action__close">
				<i class="fas fa-times"></i>
			</a>
		</div>
		<div class="language-selector__list-of-languages js-language-selector__list-of-languages">
			<?php get_template_part('partials/navigation/languages'); ?>
		</div>
	</div>

	<?php get_template_part('partials/header/header'); ?>

	<div id="content" class="site-content">