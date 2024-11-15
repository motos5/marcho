<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
	<div class="container">
		<div class="header__inner">
			<a class="logo" href="#">
				<img class="logo__img" src="<?php echo get_template_directory_uri(); ?>/app/images/logo.svg" alt="Logo">
			</a>
			<nav class="menu">
				<ul class="menu__list">
					<li class="menu__list-item">
						<a class="active" href="#">Home</a>
					</li>
					<li class="menu__list-item">
						<a href="#">Shop</a>
					</li>
					<li class="menu__list-item">
						<a href="#">Page</a>
					</li>
					<li class="menu__list-item">
						<a href="#">Blog</a>
					</li>
					<li class="menu__list-item">
						<a href="#">Contact</a>
					</li>
				</ul>
			</nav>
			<div class="user-nav">
				<a class="user-nav__link" href="#">
					<img class="user-nav__img" src="<?php echo get_template_directory_uri(); ?>/app/images/icons/user.svg" alt="User icon">
				</a>
				<a class="user-nav__link" href="#">
					<img class="user-nav__img" src="<?php echo get_template_directory_uri(); ?>/app/images/icons/search.svg" alt="Search icon">
				</a>
				<a class="user-nav__link" href="#">
					<img class="user-nav__img" src="<?php echo get_template_directory_uri(); ?>/app/images/icons/heart.svg" alt="Heart icon">
					<span class="user-nav__num">3</span>
				</a>
				<a class="user-nav__link" href="#">
					<img class="user-nav__img" src="<?php echo get_template_directory_uri(); ?>/app/images/icons/cart.svg" alt="Cart icon">
					<span class="user-nav__num">7</span>
				</a>
			</div>
		</div>
	</div>
</header>



