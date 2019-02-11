<!DOCTYPE html>
<html lang="zxx">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<title>XINROX &amp; TAMBOLA</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="XINROX, TAMBOLA">
	<meta name="author" content="XINROX, TAMBOLA">
	<meta name="keywords" content="XINROX , TAMBOLA ">

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="{{ asset('assets/images/esports/favicons/favicon.ico') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/esports/favicons/favicon-120.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/esports/favicons/favicon-152.png') }}">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

	<!-- Google Web Fonts
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700|Roboto+Condensed:400,400i,700,700i" rel="stylesheet">

	<!-- CSS
	================================================== -->
	<!-- Vendor CSS -->
	<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/fonts/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/slick/slick.css')}}" rel="stylesheet">


	<!-- Template CSS-->
	<link href="{{ asset('assets/css/style-esports.css')}}" rel="stylesheet">

	<!-- Custom CSS-->
	<link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet">

</head>
<body class="template-esports">

	<div class="site-wrapper clearfix">
		<div class="site-overlay"></div>

		<!-- Header
		================================================== -->

		<!-- Header Mobile -->
		<div class="header-mobile clearfix" id="header-mobile">
			<div class="header-mobile__logo">
				<a href=""><img src="{{ asset('assets/images/esports/logo.png')}}" srcset="{{ asset('assets/images/esports/logo@2x.png')}}"  alt="XINROX" class="header-mobile__logo-img"></a>
			</div>
			<div class="header-mobile__inner">
				<a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
				<span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
			</div>
		</div>
		<!-- Header Mobile / End -->

		<!-- Header Desktop -->
		<header class="header header--layout-3">

			<!-- Header Top Bar -->
			<div class="header__top-bar clearfix">
				<div class="container">
					<div class="header__top-bar-inner">

						<!-- Social Links -->
						<ul class="social-links social-links--inline social-links--main-nav social-links--top-bar">
							<li class="social-links__item">
								<a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa fa-facebook-square"></i></a>
							</li>
							<li class="social-links__item">
								<a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa fa-twitter"></i></a>
							</li>
							<li class="social-links__item">
								<a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Twitch"><i class="fa fa fa-twitch"></i></a>
							</li>
							<li class="social-links__item">
								<a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="YouTube"><i class="fa fa fa-youtube-play"></i></a>
							</li>
							<li class="social-links__item">
								<a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa fa-google-plus"></i></a>
							</li>
							<li class="social-links__item">
								<a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa fa-instagram"></i></a>
							</li>
						</ul>
						<!-- Social Links / End -->

						<!-- Account Navigation -->
						<ul class="nav-account">
							<li class="nav-account__item nav-account__item--wishlist"><a href="_esports_shop-wishlist.html">Wishlist <span class="highlight">8</span></a></li>
							<li class="nav-account__item"><a href="#">Currency: <span class="highlight">USD</span></a>
								<ul class="main-nav__sub">
									<li><a href="#">USD</a></li>
									<li><a href="#">EUR</a></li>
									<li><a href="#">GBP</a></li>
								</ul>
							</li>
							<li class="nav-account__item"><a href="#">Language: <span class="highlight">EN</span></a>
								<ul class="main-nav__sub">
									<li><a href="#">English</a></li>
									<li><a href="#">Spanish</a></li>
									<li><a href="#">French</a></li>
									<li><a href="#">German</a></li>
								</ul>
							</li>
							<li class="nav-account__item"><a href="_esports_shop-account.html">Your Account</a></li>
							<li class="nav-account__item nav-account__item--logout"><a href="_esports_shop-login.html">Logout</a></li>
						</ul>
						<!-- Account Navigation / End -->
					</div>
				</div>
			</div>
			<!-- Header Top Bar / End -->

			<!-- Header Primary -->
			<div class="header__primary">
				<div class="container">
					<div class="header__primary-inner">

						<!-- Header Logo -->
						<div class="header-logo">
							<a href="_esports_index.html"><img src="{{ asset('assets/images/esports/logo.png')}}" srcset="{{ asset('assets/images/esports/logo@2x.png 2x')}}" alt="Alchemists" class="header-logo__img"></a>
						</div>
						<!-- Header Logo / End -->

						<!-- Main Navigation -->
						<nav class="main-nav">
							<ul class="main-nav__list">
								<li class="active"><a href="_esports_index.html">Home</a>
									<ul class="main-nav__sub">

										<li class="active"><a href="{{ URL::to('/')}}">Home Page</a></li>
									</ul>
								</li>

								<li class=""><a href="_esports_team-overview.html">Result</a>
									</li>
								<li class="">
									<a href="_esports_shop-fullwidth.html">Account</a>

								</li>


							</ul>
						</nav>
						<!-- Main Navigation / End -->

						<div class="header__primary-spacer"></div>

						<!-- Header Search Form -->
						<div class="header-search-form ">
							<form action="#" id="mobile-search-form" class="search-form">
								<input type="text" class="form-control header-mobile__search-control" value="" placeholder="Enter your search here...">
								<button type="submit" class="header-mobile__search-submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- Header Search Form / End -->

						<!-- Header Info Block -->
						<ul class="info-block info-block--header">

							<li class="info-block__item info-block__item--shopping-cart js-info-block__item--onclick">
								<a href="_esports_shop-cart.html" class="info-block__link-wrapper">
									<svg role="img" class="df-icon df-icon--shopping-cart">
										<use xlink:href="{{ asset('assets/images/esports/icons-esports.svg#cart')}}"/>
									</svg>
									<h6 class="info-block__heading">Your Bag (8 items)</h6>
									<span class="info-block__cart-sum">$256,30</span>
								</a>

								<!-- Dropdown Shopping Cart -->
								<ul class="header-cart header-cart--inventory">

									<li class="header-cart__item header-cart__item--title">
										<h5>Bag Inventory</h5>
									</li>

									<li class="header-cart__item">
										<figure class="header-cart__product-thumb">
											<a href="_esports_shop-product.html">
												<img src="{{ asset('assets/images/esports/samples/cart-sm-1.jpg')}}" alt="Jaxxy Framed Art Print">
											</a>
										</figure>
										<div class="header-cart__badges">
											<span class="badge badge-primary">2</span>
											<span class="badge badge-default badge-close"><i class="fa fa-times"></i></span>
										</div>
									</li>
									<li class="header-cart__item">
										<figure class="header-cart__product-thumb">
											<a href="_esports_shop-product.html">
												<img src="{{ asset('assets/images/esports/samples/cart-sm-2.jpg')}}" alt="Tech Warrior Framed Art Print">
											</a>
										</figure>
										<div class="header-cart__badges">
											<span class="badge badge-primary">4</span>
											<span class="badge badge-default badge-close"><i class="fa fa-times"></i></span>
										</div>
									</li>
									<li class="header-cart__item">
										<figure class="header-cart__product-thumb">
											<a href="_esports_shop-product.html">
												<img src="{{ asset('assets/images/esports/samples/cart-sm-3.jpg')}}" alt="Alchemists White Mug">
											</a>
										</figure>
										<div class="header-cart__badges">
											<span class="badge badge-default badge-close"><i class="fa fa-times"></i></span>
										</div>
									</li>
									<li class="header-cart__item">
										<figure class="header-cart__product-thumb">
											<a href="_esports_shop-product.html">
												<img src="{{ asset('assets/images/esports/samples/cart-sm-4.jpg')}}" alt="Mercenaries Framed Art Print">
											</a>
										</figure>
										<div class="header-cart__badges">
											<span class="badge badge-default badge-close"><i class="fa fa-times"></i></span>
										</div>
									</li>

									<li class="header-cart__item">
										<figure class="header-cart__product-thumb"></figure>
									</li>
									<li class="header-cart__item">
										<figure class="header-cart__product-thumb"></figure>
									</li>
									<li class="header-cart__item">
										<figure class="header-cart__product-thumb"></figure>
									</li>
									<li class="header-cart__item">
										<figure class="header-cart__product-thumb"></figure>
									</li>
									<li class="header-cart__item">
										<figure class="header-cart__product-thumb"></figure>
									</li>

									<li class="header-cart__item header-cart__item--subtotal">
										<span class="header-cart__subtotal">Inventory Subtotal</span>
										<span class="header-cart__subtotal-sum">$256.30</span>
									</li>
									<li class="header-cart__item header-cart__item--action">
										<a href="_esports_shop-cart.html" class="btn btn-primary-inverse btn-block">Go to Shopping Cart</a>
										<a href="_esports_shop-checkout.html" class="btn btn-primary btn-block">Proceed to Checkout</a>
									</li>
								</ul>
								<!-- Dropdown Shopping Cart / End -->

							</li>
						</ul>
						<!-- Header Info Block / End -->

					</div>
				</div>
			</div>
			<!-- Header Primary / End -->

		</header>
		<!-- Header / End -->

		<!-- Header Posts
		================================================== -->
		<div class="container">
			<div class="posts posts--tile posts--tile-alt post-grid posts--tile-alt-nopaddings posts--tile-hero-post-grid posts--tile-meta-position js-hero-post-grid-masonry row">

				<div class="post-grid__sizer col-12 col-sm-6 col-md-6 col-lg-3"></div>

				<div class="post-grid__item col-12 col-sm-6 col-md-6 col-lg-6">
					<div class="posts__item posts__item--tile posts__item--category-2 ">
						<figure class="posts__thumb">
							<img src="{{ asset('assets/images/esports/samples/post-img2-grid.png')}}" alt="">
							<div class="posts__inner">
								<div class="posts__cat">
									<span class="label posts__cat-label posts__cat-label--category-2">HOT PRIZE</span>
								</div>
								<h6 class="posts__title posts__title--lg posts__title--color-hover"><a href="_esports_blog-post-1.html">GET A CHANCE TO WIN AUDI A8 </a></h6>
								<time datetime="2018-08-23" class="posts__date">October 24th, 2019</time>
								<ul class="post__meta meta">
									<li class="meta__item meta__item--views">2369</li>
									<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
									<li class="meta__item meta__item--comments"><a href="#">18</a></li>
								</ul>
							</div>
						</figure>
						<!-- <a href="_esports_blog-post-1.html" class="posts__cta"></a> -->
					</div>
				</div>
				<div class="post-grid__item col-12 col-sm-6 col-md-6 col-lg-3">
					<div class="posts__item posts__item--tile posts__item--category-1 posts__item--category-4 ">
						<figure class="posts__thumb">
							<img src="{{ asset('assets/images/esports/samples/post-img9-grid.jpg')}}" alt="">
							<div class="posts__inner">
								<div class="posts__cat">
									<span class="label posts__cat-label posts__cat-label--category-1">Macbook Air</span><span class="label posts__cat-label posts__cat-label--category-4">Macbook Pro</span>
								</div>
								<h6 class="posts__title  posts__title--color-hover"><a href="_esports_blog-post-1.html">10 Macbooks will be given to lucky winners </a></h6>
								<time datetime="2018-08-23" class="posts__date">August 27th, 2019</time>
								<ul class="post__meta meta">
									<li class="meta__item meta__item--views">2369</li>
									<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
									<li class="meta__item meta__item--comments"><a href="#">18</a></li>
								</ul>
							</div>
						</figure>
						<!-- <a href="_esports_blog-post-1.html" class="posts__cta"></a> -->
					</div>
				</div>
				<div class="post-grid__item col-12 col-sm-6 col-md-6 col-lg-3">
					<div class="posts__item posts__item--tile posts__item--category-2 ">
						<figure class="posts__thumb">
							<img src="{{ asset('assets/images/esports/samples/post-img10-grid.jpg')}}" alt="">
							<div class="posts__inner">
								<div class="posts__cat">
									<span class="label posts__cat-label posts__cat-label--category-2">Awesome Deal</span>
								</div>
								<h6 class="posts__title  posts__title--color-hover"><a href="_esports_blog-post-1.html">Get a chance to own your dream house and lot</a></h6>
								<time datetime="2018-08-23" class="posts__date">December 16th, 2019</time>
								<ul class="post__meta meta">
									<li class="meta__item meta__item--views">2369</li>
									<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
									<li class="meta__item meta__item--comments"><a href="#">18</a></li>
								</ul>
							</div>
						</figure>
						<!-- <a href="_esports_blog-post-1.html" class="posts__cta"></a> -->
					</div>
				</div>
				<div class="post-grid__item col-12 col-sm-6 col-md-6 col-lg-6">
					<div class="posts__item posts__item--tile posts__item--category-3 ">
						<figure class="posts__thumb">
							<img src="{{ asset('assets/images/esports/samples/post-img15-grid.jpg')}}" alt="">
							<div class="posts__inner">
								<div class="posts__cat">
									<span class="label posts__cat-label posts__cat-label--category-3">TRAVEL GOALS</span>
								</div>
								<h6 class="posts__title  posts__title--color-hover"><a href="_esports_blog-post-1.html">WIN A HONGKONG TRIP FOR 2</a></h6>
								<time datetime="2018-08-23" class="posts__date">July 3rd, 2019</time>
								<ul class="post__meta meta">
									<li class="meta__item meta__item--views">2369</li>
									<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
									<li class="meta__item meta__item--comments"><a href="#">18</a></li>
								</ul>
							</div>
						</figure>
						<a href="_esports_blog-post-1.html" class="posts__cta"></a>
					</div>
				</div>

			</div>
		</div>


		<!-- Content
		================================================== -->
		<div class="site-content">
			<div class="container">

				<!-- Breaking News -->
				<div class="marquee-wrapper marquee-wrapper--boxed">
					<div class="container">

						<div class="marquee-label">
							<i class="fa fa-star"></i> Breaking News
						</div>
						<div class="marquee" data-startvisible="true" data-duration="18000" data-gap="10" data-duplicated="true">
							<ul class="posts posts--inline">
								<li class="posts__item posts__item--category-4 ">
									<div class="posts__cat">
										<span class="label posts__cat-label posts__cat-label--category-4">Xenowatch</span>
									</div>
									<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">Shadow&#x27;s Ability will receive a nerf on May</a></h6>
									<div class="posts__excerpt">Due to multiple player complaints...</div>
								</li>
								<li class="posts__item posts__item--category-1 ">
									<div class="posts__cat">
										<span class="label posts__cat-label posts__cat-label--category-1">The Team</span>
									</div>
									<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">The team uniforms are getting a revamped</a></h6>
									<div class="posts__excerpt">After several years, the uniforms...</div>
								</li>
								<li class="posts__item posts__item--category-2 ">
									<div class="posts__cat">
										<span class="label posts__cat-label posts__cat-label--category-2">L.O. Heroes</span>
									</div>
									<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">A new mage character is coming to the league</a></h6>
									<div class="posts__excerpt">Lorem ipsum dolor sit amet adipisicing...</div>
								</li>
							</ul>
						</div>

					</div>
				</div>
				<!-- Breaking News / End -->

				<div class="row">
					<!-- Content -->
					<div class="content col-lg-8">

						<!-- Posts Area #1 -->
						<!-- Posts Grid -->
						<div class="posts posts--tile posts--tile-alt post-grid row">

							<div class="post-grid__item col-sm-6">
								<div class="posts__item posts__item--tile posts__item--category-1 posts__item--category-4  card">
									<figure class="posts__thumb">
										<img src="{{ asset('assets/images/eSports/samples/win.png')}}" alt="">
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label posts__cat-label--category-1">Awesome</span><span class="label posts__cat-label posts__cat-label--category-4">Prizes</span>
											</div>
											<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">Test your luck</a></h6>
											<!-- <time datetime="2018-08-23" class="posts__date">August 27th, 201</time> -->
										</div>
									</figure>
									<a href="_esports_blog-post-1.html" class="posts__cta"></a>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="https://media.giphy.com/media/5dYnxnkIVeEy5jj5tQ/giphy.gif" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Erick Rodgers</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>
							<div class="post-grid__item col-sm-6">
								<div class="posts__item posts__item--tile posts__item--category-2  card">
									<figure class="posts__thumb">
										<img src="https://media.giphy.com/media/2djT42mNKro7P3XWmW/giphy.gif" alt="">
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label posts__cat-label--category-2">Lucky numbers</span>
											</div>
											<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">Buy your lucky number and win awesome prizes</a></h6>
											<time datetime="2018-08-23" class="posts__date">August 23rd, 2018</time>
										</div>
									</figure>
									<a href="_esports_blog-post-1.html" class="posts__cta"></a>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="{{ asset('assets/images/football/samples/avatar-6-xs.jpg')}}" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Lagertha Dax</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>
							<div class="post-grid__item col-sm-6">
								<div class="posts__item posts__item--tile posts__item--category-1 posts__item--category-3  card">
									<figure class="posts__thumb">
										<img src="https://i2.wp.com/photobooth-me.com/wp-content/uploads/2017/08/Colorwheel-Ver.2-1.gif?resize=577%2C384" alt="">
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label posts__cat-label--category-1">Play</span><span class="label posts__cat-label posts__cat-label--category-3">Win</span>
											</div>
											<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">Play and Win</a></h6>
											<time datetime="2018-08-23" class="posts__date">July 28th, 2019</time>
										</div>
									</figure>
									<a href="_esports_blog-post-1.html" class="posts__cta"></a>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="{{ asset('assets/images/football/samples/avatar-6-xs.jpg')}}" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Lagertha Dax</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>
							<div class="post-grid__item col-sm-6">
								<div class="posts__item posts__item--tile posts__item--category-4  card">
									<figure class="posts__thumb">
										<img src="https://media.giphy.com/media/5dYnxnkIVeEy5jj5tQ/giphy.gif" alt="">
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label posts__cat-label--category-4">Big Prizes</span>
											</div>
											<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">Win Big Prizes</a></h6>
											<time datetime="2018-08-23" class="posts__date">July 24th, 2018</time>
										</div>
									</figure>
									<a href="_esports_blog-post-1.html" class="posts__cta"></a>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="{{ asset('assets/images/football/samples/avatar-6-xs.jpg')}}" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Lagertha Dax</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>
							<div class="post-grid__item col-sm-6">
								<div class="posts__item posts__item--tile posts__item--category-2  card">
									<figure class="posts__thumb">
										<img src="{{ asset('assets/images/esports/samples/post-img5-card.jpg')}}" alt="">
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label posts__cat-label--category-2">Max Potential</span>
											</div>
											<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">The more entries, the more chances of winning</a></h6>
											<time datetime="2018-08-23" class="posts__date">July 16th, 2019</time>
										</div>
									</figure>
									<a href="_esports_blog-post-1.html" class="posts__cta"></a>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="{{ asset('assets/images/football/samples/avatar-6-xs.jpg')}}" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Lagertha Dax</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>
							<div class="post-grid__item col-sm-6">
								<div class="posts__item posts__item--tile posts__item--category-1  card">
									<figure class="posts__thumb">
										<img src="{{ asset('assets/images/esports/samples/post-img6-card.jpg')}}" alt="">
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label posts__cat-label--category-1">Play</span>
											</div>
											<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">Play , Win , Repeat</a></h6>
											<time datetime="2018-08-23" class="posts__date">June 3rd, 2019</time>
										</div>
									</figure>
									<a href="_esports_blog-post-1.html" class="posts__cta"></a>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="{{ asset('assets/images/football/samples/avatar-12-xs.jpg')}}" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Eric Rodgers</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>



						</div>
						<!-- Post Grid / End -->
						<!-- Posts Area #1 / End -->

						<!-- Posts Area #2 -->
						<!-- Posts Grid -->

						<!-- Post Grid / End -->
						<!-- Posts Area #2 / End -->

						<!-- Posts Area #3 -->
						<!-- Latest Videos -->

						<!-- Latest Videos / End -->
						<!-- Posts Area #3 / End -->

					</div>
					<!-- Content / End -->

					<!-- Sidebar -->
					<div id="sidebar" class="sidebar col-lg-4">

						<!-- Widget: Social Buttons -->
						<aside class="widget widget--sidebar widget-social widget-social--buttons">
							<a href="#" class="btn-social-counter btn-social-counter--fb" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fa fa-facebook-official"></i>
								</div>
								<h6 class="btn-social-counter__title">Like Our Facebook Page</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Likes</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
							<a href="#" class="btn-social-counter btn-social-counter--twitter" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fa fa-twitter"></i>
								</div>
								<h6 class="btn-social-counter__title">Follow Us on Twitter</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Followers</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
							<a href="#" class="btn-social-counter btn-social-counter--twitch" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fa fa-twitch"></i>
								</div>
								<h6 class="btn-social-counter__title">Follow Us on Twitch</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Subs</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
							<a href="#" class="btn-social-counter btn-social-counter--youtube" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fa fa-youtube-play"></i>
								</div>
								<h6 class="btn-social-counter__title">Follow Us on YouTube</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Subs</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
							<a href="#" class="btn-social-counter btn-social-counter--rss" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fa fa-rss"></i>
								</div>
								<h6 class="btn-social-counter__title">Subscribe to Our RSS</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num">840</span> Subs</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
							<a href="#" class="btn-social-counter btn-social-counter--instagram" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fa fa-instagram"></i>
								</div>
								<h6 class="btn-social-counter__title">Follow Us on Instagram</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Followers</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
						</aside>
						<!-- Widget: Social Buttons / End -->

						<!-- Widget: Latest Results -->
						<aside class="widget card widget--sidebar widget-results">
							<div class="widget__title card__header card__header--has-btn">
								<h4>Latest Results</h4>
								<a href="#" class="btn btn-default btn-xs card-header__button">See Full Results</a>
							</div>
							<div class="widget__content card__content">
								<dl class="widget-results__dl">

									<dt class="widget-results__dt widget-results__dt--category-4">
									LUCKY 3 RESULT
									</dt>
									<dd class="widget-results__dd">
										<ul class="widget-results__list">
										<!-- Game #0 -->
										<li class="widget-results__item">
											<div class="widget-results__header justify-content-between">
												<div class="widget-results__league">1st Week Draw</div>
												<div class="widget-results__title">Saturday, March 6th</div>
											</div>
											<div class="widget-results__content">
												<div class="widget-results__team widget-results__team--first">
													<figure class="widget-results__team-logo">
														<img src="{{ asset('assets/images/esports/logos/alchemists-22x25.png')}}" alt="">
													</figure>
													<div class="widget-results__team-details">
														<h5 class="widget-results__team-name">Jonh Smith</h5>
														<span class="widget-results__team-info">Winner</span>
													</div>
												</div>
												<!-- <div class="widget-results__result">
													<div class="widget-results__score">
														<span class="widget-results__score-winner">8</span> - <span class="widget-results__score-loser">5</span>
													</div>
												</div> -->
												<div class="widget-results__team widget-results__team--second">
													<figure class="widget-results__team-logo">
														<img src="{{ asset('assets/images/samples/logos/sharks_shield.png')}}" alt="">
													</figure>
													<div class="widget-results__team-details">
														<h5 class="widget-results__team-name">3, 26 ,31</h5>
														<span class="widget-results__team-info">Winning Numbers</span>
													</div>
												</div>
											</div>
										</li>
										<!-- Game #0 / End -->
										<!-- Game #1 -->

										<!-- Game #1 / End -->
										</ul>
									</dd>
									<dt class="widget-results__dt widget-results__dt--category-2">
										INSTANT RAFFLE
									</dt>
									<dd class="widget-results__dd">
										<ul class="widget-results__list">
										<!-- Game #0 -->
										<li class="widget-results__item">
											<div class="widget-results__header justify-content-between">
												<div class="widget-results__league">1st Draw</div>
												<div class="widget-results__title">Saturday, March 6th</div>
											</div>
											<div class="widget-results__content">
												<div class="widget-results__team widget-results__team--first">
													<figure class="widget-results__team-logo">
														<img src="{{ asset('assets/images/esports/logos/alchemists-22x25.png')}}" alt="">
													</figure>
													<div class="widget-results__team-details">
														<h5 class="widget-results__team-name">Paul Allen</h5>
														<span class="widget-results__team-info">Winner</span>
													</div>
												</div>
												<!-- <div class="widget-results__result">
													<div class="widget-results__score">
														<span class="widget-results__score-loser">15</span> - <span class="widget-results__score-winner">21</span>
													</div>
												</div> -->
												<div class="widget-results__team widget-results__team--second">
													<figure class="widget-results__team-logo">
														<img src="{{ asset('assets/images/samples/logos/sharks_shield.png')}}" alt="">
													</figure>
													<div class="widget-results__team-details">
														<h5 class="widget-results__team-name">iPhone XS Max</h5>
														<span class="widget-results__team-info">Prize</span>
													</div>
												</div>
											</div>
										</li>
										<!-- Game #0 / End -->
										</ul>
									</dd>


								</dl>
							</div>
						</aside>
						<!-- Widget: Latest Results / End -->

						<!-- Widget: Twitch Streams -->
						<aside class="widget widget--sidebar widget-twitch">
							<div class="twitch-streams">

								<!-- Stream #0 -->
								<div class="twitch-stream-wrapper">
									<a href="#" class="twitch-stream twitch-stream--featured twitch-stream--has-video card">
										<div class="twitch-stream__overlay twitch-stream__overlay--bg0"></div>
										<figure class="twitch-stream__img twitch-stream__img--extra-top">
											<img src="{{ asset('assets/images/esports/samples/twitch-streamer-1.png')}}" alt="">
										</figure>
										<div class="twitch-stream__body">
											<h6 class="twitch-stream__featured">Featured Winner</h6>
											<h5 class="twitch-stream__title">Bordz Smith </h5>
											<div class="twitch-stream__info">Won House and Lot</div>

											<div class="twitch-stream__status twitch-stream__status--online">Lucky Winner</div>


										</div>
									</a>

									<!-- <div class="twitch-stream-video card">
										<div class="card__content">
											<figure class="twitch-stream-video__clip">
												<a href="#" class="twitch-stream-video__link" target="_blank"><img src="{{ asset('assets/images/esports/samples/twitch-stream-cover.jpg')}}" alt=""></a>
											</figure>
										</div>
									</div> -->

								</div>
								<!-- Stream #0 / End -->
								<!-- Stream #1 -->
								<!-- <div class="twitch-stream-wrapper">
									<a href="#" class="twitch-stream   card">
										<div class="twitch-stream__overlay twitch-stream__overlay--bg1"></div>
										<figure class="twitch-stream__img ">
											<img src="{{ asset('assets/images/esports/samples/twitch-streamer-2.png')}}" alt="">
										</figure>
										<div class="twitch-stream__body">
											<h5 class="twitch-stream__title">Assassins League Gameplay</h5>
											<div class="twitch-stream__info">We start the adventure mode!</div>

											<div class="twitch-stream__status twitch-stream__status--online">Live</div>


										</div>
									</a>


								</div> -->
								<!-- Stream #1 / End -->
								<!-- Stream #2 -->
								<!-- <div class="twitch-stream-wrapper">
									<a href="#" class="twitch-stream   card">
										<div class="twitch-stream__overlay twitch-stream__overlay--bg2"></div>
										<figure class="twitch-stream__img ">
											<img src="{{ asset('assets/images/esports/samples/twitch-streamer-3.png')}}" alt="">
										</figure>
										<div class="twitch-stream__body">
											<h5 class="twitch-stream__title">League of Heroes: Ether Quest</h5>
											<div class="twitch-stream__info">I’m gonna take the hardest quest</div>


											<div class="twitch-stream__status twitch-stream__status--scheduled">Starts in: <div class="twitch-stream__countdown-counter countdown-counter" data-date="December 31, 2018 08:00:00"></div></div>

										</div>
									</a>


								</div> -->
								<!-- Stream #2 / End -->
								<!-- Stream #3 -->
								<!-- <div class="twitch-stream-wrapper">
									<a href="#" class="twitch-stream   card">
										<div class="twitch-stream__overlay twitch-stream__overlay--bg3"></div>
										<figure class="twitch-stream__img ">
											<img src="{{ asset('assets/images/esports/samples/twitch-streamer-4.png')}}" alt="">
										</figure>
										<div class="twitch-stream__body">
											<h5 class="twitch-stream__title">The Game Huntress&#x27;s Channel</h5>
											<div class="twitch-stream__info">Join me to hunt them all!</div>



											<div class="twitch-stream__status twitch-stream__status--offline">Offline</div>
										</div>
									</a>


								</div> -->
								<!-- Stream #3 / End -->


							</div>
						</aside>
						<!-- Widget: Twitch Streams / End -->

						<!-- Widget: Event Result -->
						<aside class="widget card widget--sidebar widget-game-result">
							<div class="widget__title card__header card__header--has-btn">
								<h4>Incoming Draw</h4>
								<!-- <a href="#" class="btn btn-default btn-xs card-header__button">See All Results</a> -->
							</div>
							<div class="widget__content card__content">
								<!-- Game Score -->
								<div class="widget-game-result__section">
									<div class="widget-game-result__section-inner">

										<header class="widget-game-result__header widget-game-result__header--alt widget-game-result__header--alt-compact mb-4">
											<h3 class="widget-game-result__title">RAFFLE BONANZA</h3>
											<time class="widget-game-result__date" datetime="2018-04-26">Friday, April 26th</time>
										</header>

										<header class="widget-game-result__header">
											<h3 class="widget-game-result__title">PRIZE : MACBOOK PRO</h3>
											<div class="widget-game-result__subtitle">DRAW PRIZE</div>
										</header>

										<div class="widget-game-result__main">
											<!-- 1st Team -->
											<!-- <div class="widget-game-result__team widget-game-result__team--first">
												<figure class="widget-game-result__team-logo">
													<a href="#"><img src="assets/images/esports/logos/alchemists-86x98.png')}}" alt=""></a>
												</figure>
												<div class="widget-game-result__team-info">
													<h5 class="widget-game-result__team-name">Alchemists</h5>
													<div class="widget-game-result__team-desc">United States</div>
												</div>
											</div> -->
											<!-- 1st Team / End -->

											<!-- <div class="widget-game-result__score-wrap">
												<div class="widget-game-result__score">
													<span class="widget-game-result__score-result widget-game-result__score-result--winner">2</span> <span class="widget-game-result__score-dash">-</span> <span class="widget-game-result__score-result widget-game-result__score-result--loser">1</span>
												</div>
												<a href="https://www.youtube.com/watch?v=XE0fU9PCrWE" class="widget-game-result__score-video-icon mp_iframe" data-toggle="tooltip" data-placement="bottom" title="Watch Replay"><i class="fa fa-play"></i></a>
											</div> -->

											<!-- 2nd Team -->
											<!-- <div class="widget-game-result__team widget-game-result__team--second">
												<figure class="widget-game-result__team-logo">
													<a href="#"><img src="{{ asset('assets/images/esports/logos/pirates-114x98.png')}}" alt=""></a>
												</figure>
												<div class="widget-game-result__team-info">
													<h5 class="widget-game-result__team-name">L.A. Pirates</h5>
													<div class="widget-game-result__team-desc">United States</div>
												</div>
											</div> -->
											<!-- 2nd Team / End -->
										</div>
									</div>
								</div>
								<!-- Game Score / End -->

								<!-- Game Statistics -->
								<!-- <div class="widget-game-result__section">
									<header class="widget-game-result__subheader card__subheader card__subheader--sm card__subheader--nomargins">
										<h5 class="widget-game-result__subtitle">Match Statistics</h5>
									</header>
									<div class="widget-game-result__section-inner"> -->

										<!-- Progress Stats Table -->
										<!-- <table class="progress-table progress-table--sm-space">
											<tbody>

												<tr>
													<td class="progress-table__progress-label progress-table__progress-label--highlight">56</td>
													<td class="progress-table__progress-bar progress-table__progress-bar--first">
														<div class="progress progress--lines">
															<div class="progress__bar" style="width: 60%;" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="progress-table__title">Total Kills</td>
													<td class="progress-table__progress-bar progress-table__progress-bar--second">
														<div class="progress progress--lines">
															<div class="progress__bar progress__bar--custom-color-1" style="width: 40%;" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="progress-table__progress-label ">40</td>
												</tr>
												<tr>
													<td class="progress-table__progress-label ">23</td>
													<td class="progress-table__progress-bar progress-table__progress-bar--first">
														<div class="progress progress--lines">
															<div class="progress__bar" style="width: 30%;" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="progress-table__title">Total Deaths</td>
													<td class="progress-table__progress-bar progress-table__progress-bar--second">
														<div class="progress progress--lines">
															<div class="progress__bar progress__bar--custom-color-1" style="width: 70%;" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="progress-table__progress-label progress-table__progress-label--highlight">38</td>
												</tr>
												<tr>
													<td class="progress-table__progress-label progress-table__progress-label--highlight">14</td>
													<td class="progress-table__progress-bar progress-table__progress-bar--first">
														<div class="progress progress--lines">
															<div class="progress__bar" style="width: 70%;" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="progress-table__title">Total Assists</td>
													<td class="progress-table__progress-bar progress-table__progress-bar--second">
														<div class="progress progress--lines">
															<div class="progress__bar progress__bar--custom-color-1" style="width: 30%;" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="progress-table__progress-label ">6</td>
												</tr>
												<tr>
													<td class="progress-table__progress-label progress-table__progress-label--highlight">19</td>
													<td class="progress-table__progress-bar progress-table__progress-bar--first">
														<div class="progress progress--lines">
															<div class="progress__bar" style="width: 60%;" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="progress-table__title">Pentakills</td>
													<td class="progress-table__progress-bar progress-table__progress-bar--second">
														<div class="progress progress--lines">
															<div class="progress__bar progress__bar--custom-color-1" style="width: 40%;" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="progress-table__progress-label ">12</td>
												</tr>

											</tbody>
										</table> -->
										<!-- Progress Stats Table / End -->

									<!-- </div>
								</div> -->
								<!-- Game Statistics / End -->

								<!-- Match MVP -->
								<!-- <div class="widget-game-result__section">
									<header class="widget-game-result__subheader card__subheader card__subheader--sm card__subheader--nomargins">
										<h5 class="widget-game-result__subtitle">Match MVP</h5>
									</header>
									<div class="widget-game-result__section-inner"> -->

										<!-- MVP -->
										<!-- <div class="game-result__mvp">
											<div class="game-result__mvp-player">
												<div class="game-result__mvp-player-icon-holder">
													<span class="game-result__mvp-player-icon"><i class="fa fa-star-o"></i></span>
												</div>
												<div class="game-result__mvp-player-meta">
													<h6 class="game-result__mvp-player-name">Destroy Spiegel</h6>
													<span class="game-result__mvp-player-team">The Alchemists</span>
												</div>
											</div>
											<div class="game-result__mvp-stats">
												<ul class="game-result__mvp-stats-list list-unstyled">
													<li class="game-result__mvp-stats-item">
														<span class="game-result__mvp-stats-value">37</span>
														<span class="game-result__mvp-stats-label">Kills</span>
													</li>
													<li class="game-result__mvp-stats-item">
														<span class="game-result__mvp-stats-value">2</span>
														<span class="game-result__mvp-stats-label">Deaths</span>
													</li>
													<li class="game-result__mvp-stats-item">
														<span class="game-result__mvp-stats-value">9</span>
														<span class="game-result__mvp-stats-label">Assists</span>
													</li>
													<li class="game-result__mvp-stats-item">
														<span class="game-result__mvp-stats-value">13</span>
														<span class="game-result__mvp-stats-label">Pentakills</span>
													</li>
												</ul>
											</div>
										</div> -->
										<!-- MVP / End -->

									<!-- </div>
								</div> -->
								<!-- Match MVP / End -->

							</div>
						</aside>
						<!-- Widget: Event Result / End -->

						<!-- Widget: Trending News -->

						<!-- Widget: Trending News / End -->

						<!-- Widget: Events Calendar -->
						<aside class="widget card card--no-paddings widget--sidebar widget-event-calendar">
							<div class="widget__title card__header">
								<h4>Events Calendar</h4>
							</div>
							<div class="widget__content card__content">

								<!-- Events Calendar -->
								<div class="alc-event-calendar">
									<table class="table">
										<caption>
											<span class="alc-event-calendar__caption-inner">
												<span class="alc-event-calendar__caption-nav alc-event-calendar__caption-nav--prev">
													<a href="#" class="alc-event-calendar__caption-nav-link"></a>
												</span>
												<span class="alc-event-calendar__caption-title">November 2019</span>
												<span class="alc-event-calendar__caption-nav alc-event-calendar__caption-nav--next">
													<a href="#" class="alc-event-calendar__caption-nav-link"></a>
												</span>
											</span>
										</caption>
										<thead>
											<tr>
												<th data-weekday-abbr="Mon"><span class="weekday">Mo</span></th>
												<th data-weekday-abbr="Tue"><span class="weekday">Tu</span></th>
												<th data-weekday-abbr="Wed"><span class="weekday">We</span></th>
												<th data-weekday-abbr="Thu"><span class="weekday">Th</span></th>
												<th data-weekday-abbr="Fri"><span class="weekday">Fr</span></th>
												<th data-weekday-abbr="Sat"><span class="weekday">Sa</span></th>
												<th data-weekday-abbr="Sun"><span class="weekday">Su</span></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><span class="day day--muted">28</span></td>
												<td><span class="day day--muted">29</span></td>
												<td><span class="day day--muted">30</span></td>
												<td><span class="day day--muted">31</span></td>
												<td><span class="day">1</span></td>
												<td><span class="day">2</span></td>
												<td><span class="day">3</span></td>
											</tr>
											<tr>
												<td><span class="day">4</span></td>
												<td><span class="day">5</span></td>
												<td><span class="day">6</span></td>
												<td><span class="day">7</span></td>
												<td><span class="day">8</span></td>
												<td>
													<span class="day day--active day--type-1">9</span>
												</td>
												<td><span class="day">10</span></td>
											</tr>
											<tr>
												<td><span class="day">11</span></td>
												<td><span class="day">12</span></td>
												<td><span class="day">13</span></td>
												<td><span class="day">14</span></td>
												<td><span class="day">15</span></td>
												<td><span class="day">16</span></td>
												<td><span class="day">17</span></td>
											</tr>
											<tr>
												<td><span class="day">18</span></td>
												<td><span class="day">19</span></td>
												<td>
													<span class="day day--active day--type-4">20</span>
												</td>
												<td><span class="day">21</span></td>
												<td><span class="day">22</span></td>
												<td><span class="day">23</span></td>
												<td><span class="day">24</span></td>
											</tr>
											<tr>
												<td><span class="day">25</span></td>
												<td><span class="day">26</span></td>
												<td><span class="day">27</span></td>
												<td><span class="day">28</span></td>
												<td><span class="day">29</span></td>
												<td><span class="day">30</span></td>
												<td><span class="day day--muted">1</span></td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- Events Calendar / End -->

								<!-- Events List -->
								<ul class="alc-event-list list-unstyled">
									<li class="alc-event-list__item alc-event-list-item alc-event-list-item--type-1">
										<div class="alc-event-list-item__header">
											<time class="alc-event-list-item__date">Friday, September 9th</time>
										</div>
										<div class="alc-event-list-item__body">
											<div class="alc-event-list-item__time">09:00 PM</div>
											<div class="alc-event-list-item__info">
												<h6 class="alc-event-list-item__title"><a href="_esports_event-overview-1a.html">LUCKY 3 DRAW</a></h6>
												<!-- <p class="alc-event-list-item__desc">Join me to play the multiplayer</p> -->
											</div>
										</div>
									</li>
									<li class="alc-event-list__item alc-event-list-item alc-event-list-item--type-4">
										<div class="alc-event-list-item__header">
											<time class="alc-event-list-item__date">Tuesday, September 20th</time>
										</div>
										<div class="alc-event-list-item__body">
											<div class="alc-event-list-item__time">11:00 PM</div>
											<div class="alc-event-list-item__info">
												<h6 class="alc-event-list-item__title"><a href="_esports_event-overview-1b.html">RAFFLE BONANZA</a></h6>
												<!-- <p class="alc-event-list-item__desc">Bug fixes and a new character!</p> -->
											</div>
										</div>
									</li>
								</ul>
								<!-- Events List / End -->
							</div>
						</aside>
						<!-- Widget: Events Calendar / End -->

						<!-- Widget: Match Announcement -->

						<!-- Widget: Match Announcement / End -->

					</div>
					<!-- Sidebar / End -->
				</div>

			</div>
		</div>

		<!-- Content / End -->


		<!-- Footer
		================================================== -->
		<footer id="footer" class="footer">

			<!-- Widget: Instagram Section -->
			<aside class="widget widget-instagram">
				<div class="widget__content">
					<ul id="instagram-feed-section" class="widget-instagram__list widget-instagram__list-section"></ul>
					<a href="https://www.instagram.com/dan.fisher.dev" class="btn btn-default btn-icon" target="_blank"><i class="fa fa-instagram"></i> Follow Our Instagram</a>
				</div>
			</aside>
			<!-- Widget: Instagram Section / End -->

			<!-- Sponsors / End -->


			<!-- Footer Widgets -->
			<div class="footer-widgets">
				<div class="footer-widgets__inner">
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-6">
								<div class="row">
									<div class="col-12 col-sm-6 col-md-6">
										<div class="footer-col-inner">
											<!-- Widget: Links -->
											<!-- <aside class="widget widget--footer widget_nav_menu">
												<h4 class="widget__title">Useful Links</h4>
												<div class="widget__content">
													<div class="row">
														<div class="col">
															<ul class="widget__list">
																<li><a href="_esports_index.html">Home</a></li>
																<li><a href="_esports_blog-1.html">News Page</a></li>
																<li><a href="_esports_blog-post-1.html">Post Page</a></li>
																<li><a href="_esports_team-overview.html">Teams</a></li>
																<li><a href="_esports_team-last-results.html">Team Stats</a></li>
																<li><a href="_esports_team-roster.html">Roster</a></li>
																<li><a href="_esports_event-tournament.html">Tournament</a></li>
															</ul>
														</div>
														<div class="col">
															<ul class="widget__list">
																<li><a href="_esports_team-player.html">Player Bio</a>
																<li><a href="_esports_event-overview-1a.html">Match Stats</a>
																<li><a href="_esports_event-overview-1a.html">Live Stream</a>
																<li><a href="_esports_team-gallery.html">Gallery</a>
																<li><a href="_esports_team-videos.html">Videos</a>
																<li><a href="_esports_shop-fullwidth.html">Merchandise</a>
																<li><a href="_esports_features-shortcodes.html">Shortcodes</a>
															</ul>
														</div>
													</div>
												</div>
											</aside> -->
											<!-- Widget: Links / End -->
										</div>
									</div>
									<div class="col-6 col-sm-3 col-md-3">
										<div class="footer-col-inner">
											<!-- Widget: Links -->
											<!-- <aside class="widget widget--footer widget_nav_menu">
												<h4 class="widget__title">Streams</h4>
												<div class="widget__content">
													<ul class="widget__list">
														<li><a href="_esports_team-player.html">The Destroy</a>
														<li><a href="_esports_team-player.html">FayeDaBebop</a>
														<li><a href="_esports_team-player.html">Crazzzy_80</a>
														<li><a href="_esports_team-player.html">Game Huntress</a>
														<li><a href="_esports_team-player.html">Logan-X</a>
														<li><a href="_esports_team-player.html">Kelly_Spiegel9</a>
													</ul>
												</div>
											</aside> -->
											<!-- Widget: Links / End -->
										</div>
									</div>
									<div class="col-6 col-sm-3 col-md-3">
										<div class="footer-col-inner">
											<!-- Widget: Pages -->
											<!-- <aside class="widget widget--footer widget_pages">
												<h4 class="widget__title">About Us</h4>
												<div class="widget__content">
													<ul class="widget__list">
														<li><a href="_esports_page-contacts.html">Contact</a></li>
														<li><a href="_esports_page-faqs.html">FAQs</a></li>
														<li><a href="_esports_page-sponsors.html">Sponsors</a></li>
														<li><a href="_esports_team-schedule.html">Next Events</a></li>
														<li><a href="_esports_blog-post-3.html">Guides</a></li>
														<li><a href="_esports_shop-login.html">Register/Login</a></li>
														<li><a href="#">Privacy Policy</a></li>
													</ul>
												</div>
											</aside> -->
											<!-- Widget: Pages / End -->
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-3">
								<div class="footer-col-inner">

									<!-- Widget: Popular Posts / End -->
									<!-- <div class="widget widget--footer widget-popular-posts">
										<h4 class="widget__title">Popular News</h4>
										<div class="widget__content">
											<ul class="posts posts--simple-list">

												<li class="posts__item posts__item--category-4 ">
													<figure class="posts__thumb posts__thumb--hover">
														<a href="#"><img src="{{ asset('assets/images/esports/samples/post-img4-xs.jpg')}}" alt=""></a>
													</figure>
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label posts__cat-label--category-4">Xenowatch</span>
														</div>
														<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">Xenowatch&#x27;s new patch will fix the faces bugs</a></h6>
														<time datetime="2017-08-21" class="posts__date">August 27th, 2018</time>
													</div>
												</li>
												<li class="posts__item posts__item--category-2 ">
													<figure class="posts__thumb posts__thumb--hover">
														<a href="#"><img src="{{ asset('assets/images/esports/samples/post-img2-xs.jpg')}}" alt=""></a>
													</figure>
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label posts__cat-label--category-2">L.O. Heroes</span>
														</div>
														<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">A new mage character is coming to the League</a></h6>
														<time datetime="2017-08-21" class="posts__date">July 16th, 2018</time>
													</div>
												</li>

											</ul>
										</div>
									</div> -->
									<!-- Widget: Popular Posts / End -->

								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="footer-col-inner">

									<!-- Widget: Popular Posts / End -->
									<!-- <div class="widget widget--footer widget-popular-posts">
										<h4 class="widget__title">Featured News</h4>
										<div class="widget__content">
											<ul class="posts posts--simple-list">

												<li class="posts__item posts__item--category-1 posts__item--category-3 ">
													<figure class="posts__thumb posts__thumb--hover">
														<a href="#"><img src="{{ asset('assets/images/esports/samples/post-img3-xs.jpg')}}" alt=""></a>
													</figure>
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label posts__cat-label--category-1">The Team</span><span class="label posts__cat-label posts__cat-label--category-3">Striker GO</span>
														</div>
														<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">The Team defeated the L.A. Pirates 2-1 in the Pro League...</a></h6>
														<time datetime="2017-08-21" class="posts__date">September 24th, 2018</time>
													</div>
												</li>
												<li class="posts__item posts__item--category-4 ">
													<figure class="posts__thumb posts__thumb--hover">
														<a href="#"><img src="{{ asset('assets/images/esports/samples/post-img13-xs.jpg')}}" alt=""></a>
													</figure>
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label posts__cat-label--category-4">Xenowatch</span>
														</div>
														<h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">New modes are coming in the April update</a></h6>
														<time datetime="2017-08-21" class="posts__date">June 18th, 2018</time>
													</div>
												</li>

											</ul>
										</div>
									</div> -->
									<!-- Widget: Popular Posts / End -->

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- Footer Widgets / End -->

			<!-- Footer Social Links -->
			<div class="footer-social">
				<div class="container">
					<ul class="footer-social__list list-unstyled">
						<li class="footer-social__item">
							<a href="#" class="footer-social__link">
								<span class="footer-social__icon">
									<i class="fa fa-facebook-square"></i>
								</span>
								<div class="footer-social__txt">
									<span class="footer-social__name">Facebook</span>
									<span class="footer-social__user">/alchemistsgaming</span>
								</div>
							</a>
						</li>
						<li class="footer-social__item">
							<a href="#" class="footer-social__link">
								<span class="footer-social__icon">
									<i class="fa fa-twitter"></i>
								</span>
								<div class="footer-social__txt">
									<span class="footer-social__name">Twitter</span>
									<span class="footer-social__user">@alchemistsgaming</span>
								</div>
							</a>
						</li>
						<li class="footer-social__item">
							<a href="#" class="footer-social__link">
								<span class="footer-social__icon">
									<i class="fa fa-twitch"></i>
								</span>
								<div class="footer-social__txt">
									<span class="footer-social__name">Twitch</span>
									<span class="footer-social__user">@alchemistsgaming</span>
								</div>
							</a>
						</li>
						<li class="footer-social__item">
							<a href="#" class="footer-social__link">
								<span class="footer-social__icon">
									<i class="fa fa-youtube-play"></i>
								</span>
								<div class="footer-social__txt">
									<span class="footer-social__name">YouTube</span>
									<span class="footer-social__user">@alchemistsgaming</span>
								</div>
							</a>
						</li>
						<li class="footer-social__item">
							<a href="#" class="footer-social__link">
								<span class="footer-social__icon">
									<i class="fa fa-google-plus"></i>
								</span>
								<div class="footer-social__txt">
									<span class="footer-social__name">Google+</span>
									<span class="footer-social__user">/alchemistsgaming</span>
								</div>
							</a>
						</li>
						<li class="footer-social__item">
							<a href="#" class="footer-social__link">
								<span class="footer-social__icon">
									<i class="fa fa-instagram"></i>
								</span>
								<div class="footer-social__txt">
									<span class="footer-social__name">Instagram</span>
									<span class="footer-social__user">@alchemistsgaming</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- Footer Social Links / End -->
		</footer>
		<!-- Footer / End -->

	</div>

	<!-- Javascript Files
	================================================== -->
	<!-- Core JS -->
	<script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/jquery/jquery-migrate.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
	<script src="{{ asset('assets/js/core.js') }}"></script>

	<!-- Vendor JS -->
	<script src="{{ asset('assets/vendor/twitter/jquery.twitter.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-duotone/jquery.duotone.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/marquee/jquery.marquee.min.js')}}"></script>


	<!-- Template JS -->
	<script src="{{ asset('assets/js/init.js')}}"></script>
	<script src="{{ asset('assets/js/custom.js')}}"></script>

	<!-- Duotone Filters -->
	<svg xmlns="http://www.w3.org/2000/svg" class="svg-filters">
		<filter id="duotone-filter-base">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" >
			</feColorMatrix>
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone">
				<feFuncR type="table" tableValues="0.211764705882353 0.325490196078431"></feFuncR>
				<feFuncG type="table" tableValues="0.168627450980392 0.262745098039216"></feFuncG>
				<feFuncB type="table" tableValues="0.270588235294118 0.415686274509804"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
		<filter id="duotone-filter-color-primary">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" >
			</feColorMatrix>
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone">
				<feFuncR type="table" tableValues="0.113725490196078 0"></feFuncR>
				<feFuncG type="table" tableValues="0.07843137254902 1"></feFuncG>
				<feFuncB type="table" tableValues="0.16078431372549 0.3568627451"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
		<filter id="duotone-filter-color-info">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" >
			</feColorMatrix>
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone">
				<feFuncR type="table" tableValues="0.113725490196078 0"></feFuncR>
				<feFuncG type="table" tableValues="0.07843137254902 0.870588235294118"></feFuncG>
				<feFuncB type="table" tableValues="0.16078431372549 1"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
		<filter id="duotone-filter-page-heading">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" >
			</feColorMatrix>
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone">
				<feFuncR type="table" tableValues="0.113725490196078 0"></feFuncR>
				<feFuncG type="table" tableValues="0.07843137254902 1"></feFuncG>
				<feFuncB type="table" tableValues="0.16078431372549 0.3568627451"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
		<filter id="duotone-filter-player-slider-blue">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" >
			</feColorMatrix>
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone">
				<feFuncR type="table" tableValues="0.168627451 0.247058823529412"></feFuncR>
				<feFuncG type="table" tableValues="0.133333333333333 0.203921568627451"></feFuncG>
				<feFuncB type="table" tableValues="0.211764705882353 0.858823529411765"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
		<filter id="duotone-filter-player-slider-green">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" >
			</feColorMatrix>
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone">
				<feFuncR type="table" tableValues="0.168627451 0"></feFuncR>
				<feFuncG type="table" tableValues="0.133333333333333 1"></feFuncG>
				<feFuncB type="table" tableValues="0.211764705882353 0.356862745098039"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
		<filter id="duotone-filter-player-slider-red">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" >
			</feColorMatrix>
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone">
				<feFuncR type="table" tableValues="0.168627451 1"></feFuncR>
				<feFuncG type="table" tableValues="0.133333333333333 0.109803921568627"></feFuncG>
				<feFuncB type="table" tableValues="0.211764705882353 0.36078431372549"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
		<filter id="duotone-filter-player-slider-gray">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" >
			</feColorMatrix>
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone">
				<feFuncR type="table" tableValues="0.168627451 0.8549019608"></feFuncR>
				<feFuncG type="table" tableValues="0.133333333333333 0.8549019608"></feFuncG>
				<feFuncB type="table" tableValues="0.211764705882353 0.8549019608"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
		<filter id="duotone-filter-player-slider-aqua">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" >
			</feColorMatrix>
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone">
				<feFuncR type="table" tableValues="0.168627451 0.133333333333333"></feFuncR>
				<feFuncG type="table" tableValues="0.133333333333333 0.866666666666667"></feFuncG>
				<feFuncB type="table" tableValues="0.211764705882353 0.933333333333333"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
		<filter id="duotone-filter-player-slider-yellow">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" >
			</feColorMatrix>
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone">
				<feFuncR type="table" tableValues="0.168627451 1"></feFuncR>
				<feFuncG type="table" tableValues="0.133333333333333 0.8"></feFuncG>
				<feFuncB type="table" tableValues="0.211764705882353 0"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
	</svg>
	<!-- Duotone Filters / End -->

</body>
</html>
