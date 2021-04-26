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
			<a class="language" role="button">
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
				<a role="button" class="login action">
					<i class="icon fas fa-user"></i>
					<span class="text">Login</span>
				</a>
				<a role="button" class="cart action">
					<div class="cart__icon position-relative d-flex">
						<i class="icon fas fa-shopping-cart"></i>
						<span class="number position-absolute">0</span>
					</div>
					<span class="text">Cart</span>
				</a>
			</div>
		</div>
		<div class="navbar__mobile">
			<div class="actions">
				<a role="button" class="cart">
					<div class="cart__icon position-relative d-flex">
						<i class="icon fas fa-shopping-cart"></i>
						<span class="number position-absolute">0</span>
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
		</ul>
	</div>
	<div class="language-selector">
		<div class="language-selector__actions">
			<div class="action__search input-group mb-3">
				<input type="text" class="form-control" placeholder="Enter Language" aria-label="Enter Language" aria-describedby="language-selector__search">
				<a role="button" class="input-group-text" id="language-selector__search">Search</a>
			</div>
			<a role="button" class="action__close">
				<i class="fas fa-times"></i>
			</a>
		</div>
		<div class="language-selector__list-of-languages">
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-us"></span>
				</div>
				<div class="text">
					<span class="country">United States</span>
					<span class="language">English</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-ru"></span>
				</div>
				<div class="text">
					<span class="country">Russia</span>
					<span class="language">Russian</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-cn"></span>
				</div>
				<div class="text">
					<span class="country">China</span>
					<span class="language">Chinese</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-tz"></span>
				</div>
				<div class="text">
					<span class="country">Tanzania</span>
					<span class="language">Swahili</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-tn"></span>
				</div>
				<div class="text">
					<span class="country">Tunisia</span>
					<span class="language">Arabic</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-br"></span>
				</div>
				<div class="text">
					<span class="country">Brazil</span>
					<span class="language">Portuguese</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-es"></span>
				</div>
				<div class="text">
					<span class="country">Spain</span>
					<span class="language">Spanish</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-it"></span>
				</div>
				<div class="text">
					<span class="country">Italy</span>
					<span class="language">Italian</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-us"></span>
				</div>
				<div class="text">
					<span class="country">United States</span>
					<span class="language">English</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-ru"></span>
				</div>
				<div class="text">
					<span class="country">Russia</span>
					<span class="language">Russian</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-cn"></span>
				</div>
				<div class="text">
					<span class="country">China</span>
					<span class="language">Chinese</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-tz"></span>
				</div>
				<div class="text">
					<span class="country">Tanzania</span>
					<span class="language">Swahili</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-tn"></span>
				</div>
				<div class="text">
					<span class="country">Tunisia</span>
					<span class="language">Arabic</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-br"></span>
				</div>
				<div class="text">
					<span class="country">Brazil</span>
					<span class="language">Portuguese</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-es"></span>
				</div>
				<div class="text">
					<span class="country">Spain</span>
					<span class="language">Spanish</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-it"></span>
				</div>
				<div class="text">
					<span class="country">Italy</span>
					<span class="language">Italian</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-us"></span>
				</div>
				<div class="text">
					<span class="country">United States</span>
					<span class="language">English</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-ru"></span>
				</div>
				<div class="text">
					<span class="country">Russia</span>
					<span class="language">Russian</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-cn"></span>
				</div>
				<div class="text">
					<span class="country">China</span>
					<span class="language">Chinese</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-tz"></span>
				</div>
				<div class="text">
					<span class="country">Tanzania</span>
					<span class="language">Swahili</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-tn"></span>
				</div>
				<div class="text">
					<span class="country">Tunisia</span>
					<span class="language">Arabic</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-br"></span>
				</div>
				<div class="text">
					<span class="country">Brazil</span>
					<span class="language">Portuguese</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-es"></span>
				</div>
				<div class="text">
					<span class="country">Spain</span>
					<span class="language">Spanish</span>
				</div>
			</a>
			<a role="button" class="language-selector__language">
				<div class="flag">
					<span class="flag-icon flag-icon-it"></span>
				</div>
				<div class="text">
					<span class="country">Italy</span>
					<span class="language">Italian</span>
				</div>
			</a>
		</div>
	</div>

	<div id="content" class="site-content">