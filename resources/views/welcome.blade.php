<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>store</title>

        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="bootstrap-4.1.2/bootstrap.min.css">
        <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" href="plugins/OwlCarousel2-2.2.1/animate.css">


        <link rel="stylesheet" href="css/main_styles.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/comun.css">
    </head>
    <body>

        <div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="geles">Geles hidroalcoholicos</a></li>
			<li><a href="mascaras">Mascaras(tapabocas)</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+1 912-252-7350</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="/">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div>
                            <img src="images/logo.png" style="width:150px; height:75px;">
                        </div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="#">Geles hidroalcoholicos</a></li>
					<li><a href="#">Mascaras (tapabocas)</a></li>					
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Search Item" required="required">
						<button class="header_search_button"><img src="images/search.png" alt=""></button>
					</form>
				</div>
				<!-- User -->
				<div class="user">
                    <a href="{{ route('login') }}">
                    <div>
                        <img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik">
                        <div><?php $users_count = DB::table('users')->count(); ?>
                            <span>{{ $users_count ?? '0' }}</span>
                        </div>
                    </div>
                    </a>
                </div>
				<!-- Cart -->
				<div class="cart"><a href="#l"><div><img class="svg" src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
					<div>+1 912-252-7350</div>
				</div>
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">
					
					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(image/home_2.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Producto nuevo</div>
											<div class="home_subtitle">Gel hidroalcoholico dermátologico</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">														
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_tag d-flex flex-column align-items-center justify-content-center">
																<div>
																	<div>de</div>
																	<div>19.900  
																	</div>
																	<del class="price-oldslider">$20.000</del>
																</div>
															</div>
															<div class="product_image"><img src="image/home_2.jpg" alt=""></div>
															<div class="product_content">																
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">																		
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="images/cart_2.svg" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(image/product_1.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Popular</div>
											<div class="home_subtitle">Combo 3 x 1</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">														
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_tag d-flex flex-column align-items-center justify-content-center">
																<div>
																	<div>de</div>
																	<div>$30.000</div>
																</div>
															</div>
															<div class="product_image"><img src="image/product_1.jpg" alt=""></div>
															<div class="product_content">
																
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">																		
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="images/cart_2.svg" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">													
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(image/Home_1.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Tendencia</div>
											<div class="home_subtitle">Tapabocas N95 personalizados</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">														
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_tag d-flex flex-column align-items-center justify-content-center">
																<div>
																	<div>desde</div>
																	<div>$17.000</div>
																</div>
															</div>
															<div class="product_image"><img src="image/home_1.jpg" alt=""></div>
															<div class="product_content">																
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">																		
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="images/cart_2.svg" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(image/mascara_4.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Premium Items</div>
											<div class="home_subtitle">Summer Wear</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">														
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_tag d-flex flex-column align-items-center justify-content-center">
																<div>
																	<div>desde</div>
																	<div>$50.000</div>
																</div>
															</div>
															<div class="product_image"><img src="image/mascara_4.jpg" alt=""></div>
															<div class="product_content">															
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="images/cart_2.svg" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">													
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

				</div>
				<div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
				<div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

				<!-- Home Slider Dots -->
				
				<div class="home_slider_dots_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_slider_dots">
									<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
										<li class="home_slider_custom_dot active">01</li>
										<li class="home_slider_custom_dot">02</li>
										<li class="home_slider_custom_dot">03</li>
										<li class="home_slider_custom_dot">04</li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>

			</div>
		</div>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section_title text-center">Popular en <img src="images/logo.png" style="width:170px;"></div>
					</div>
				</div>
				<div class="row page_nav_row">
					<div class="col">
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-center">
								<li class="active"><a href="category.html">Geles Hidroalcoholicos</a></li>
								<li><a href="category.html">Mascaras (tapabocas)</a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="row products_row">
					
					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="image/product_1.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="geles">Gran promoción 3x1</a></div>
											
										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="product_category">In <a href="geles">Category</a></div>
										<div class="product_price text-right">$30.000</div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">										
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="geles"><img src="image/product_2.jpg" style="height:196px;"></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="geles">Gel antibacterial de 500ml</a></div>
											
										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="product_category">In <a href="geles">Category</a></div>
										<div class="product_price text-right">$35.000</div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">										
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="image/product_3.jpg" style="width:150px; height:198px;"></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="geles">Gel antibacterial de 500ml</a></div>
											
										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="product_category">In <a href="geles">Category</a></div>
										<div class="product_price text-right">$45.0000</div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">										
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="image/product_4.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="geles">Gel de 80ml</a></div>
											
										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="product_category">In <a href="geles">Category</a></div>
										<div class="product_price text-right">$15.000</div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">										
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="image/home_2.jpg" style="width:230px;"></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="geles">Nuevo gel dermátologico de 500ml</a></div>
											
										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="product_category">In <a href="geles">Category</a></div>
										<div class="product_price text-right">$45.900</div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">										
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="image/home_1.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="mascaras">Tapabocas N95</a></div>
											
										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="product_category">In <a href="mascaras">Category</a></div>
										<div class="product_price text-right">$17.000</div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">										
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="row load_more_row">
					<div class="col">
						<div class="button load_more ml-auto mr-auto"><a href="#">load more</a></div>
					</div>
				</div>
			</div>
		</div>
	<!-- Lo mas visto -->


<div class="lomasvendidocontenedor">
	<div class="section_title text-center">Lo mas Visto</div>	
	<br> 	 
			<div class="lomasvendido owl-carousel owl-theme">

					<!-- item-->

					<div class="">
							<div class="product">
								<div class="product_image"><img src="image/mascara_2.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_info d-flex flex-row align-items-start justify-content-start">
										<div>
											<div>
												<div class="product_name"><a href="mascaras">Tapabocas desechable</a></div>
												
											</div>
										</div>
										<div class="ml-auto text-right">
											<div class="product_category">In <a href="mascaras">Category</a></div>
											<div class="product_price text-right">$2.000</div>
										</div>
									</div>
									<div class="product_buttons">
										<div class="text-right d-flex flex-row align-items-start justify-content-start">										
											<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
												<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				
				<!-- item-->
				<div class="item">
						<div class="">
								<div class="product">
									<div class="product_image"><img src="image/mascara_6.jpg" alt=""></div>
									<div class="product_content">
										<div class="product_info d-flex flex-row align-items-start justify-content-start">
											<div>
												<div>
													<div class="product_name"><a href="mascaras">Mascara adaptable</a></div>
													
												</div>
											</div>
											<div class="ml-auto text-right">
												<div class="product_category">In <a href="mascaras">Category</a></div>
												<div class="product_price text-right">$12.000</div>
											</div>
										</div>
										<div class="product_buttons">
											<div class="text-right d-flex flex-row align-items-start justify-content-start">										
												<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
													<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

				</div>
	
			</div>		
	</div>
</div>

<br>

<br>

<br>

 	<!-- Lo mas visto -->


	<div class="lomasvendidocontenedor">
			<div class="section_title text-center">Lo mas vendido</div>	
			<br> 	 
					<div class="lomasvendido owl-carousel owl-theme">
		
							<!-- item-->
		
							<div class="">
									<div class="product">
										<div class="product_image"><img src="image/mascara_4.jpg" alt=""></div>
										<div class="product_content">
											<div class="product_info d-flex flex-row align-items-start justify-content-start">
												<div>
													<div>
														<div class="product_name"><a href="mascaras">Mascara antifluido</a></div>
														
													</div>
												</div>
												<div class="ml-auto text-right">
													<div class="product_category">In <a href="mascaras">Category</a></div>
													<div class="product_price text-right">$50.0000</div>
												</div>
											</div>
											<div class="product_buttons">
												<div class="text-right d-flex flex-row align-items-start justify-content-start">										
													<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
														<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						
						<!-- item-->
						<div class="item">
								<div class="">
										<div class="product">
											<div class="product_image"><img src="image/mascara_3.jpg" alt=""></div>
											<div class="product_content">
												<div class="product_info d-flex flex-row align-items-start justify-content-start">
													<div>
														<div>
															<div class="product_name"><a href="mascaras">Los nuevos tapabocas de Disney</a></div>
															
														</div>
													</div>
													<div class="ml-auto text-right">
														<div class="product_category">In <a href="mascaras">Category</a></div>
														<div class="product_price text-right">$5000</div>
													</div>
												</div>
												<div class="product_buttons">
													<div class="text-right d-flex flex-row align-items-start justify-content-start">										
														<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
															<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>	
						</div>
			
					</div>		
			</div>
		</div>

		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-lg-4 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="images/logo_2.png" alt=""></div>
											<div>
                                                <img src="images/logo.png" alt="">
                                            </div>
										</div>
									</a>		
								</div>
								<div class="footer_about_text">
									<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Fusce venenatis vel velit vel euismod.</p>
								</div>
							</div>
						</div>

						<!-- Footer Links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Soporte</div>
								<ul class="footer_list">
									<li>
										<a href="#"><div>Servicio al cliente<div class="footer_tag_1">online ahora</div></div></a>
									</li>
									<li>
										<a href="#"><div>Politica de devoluciones</div></a>
									</li>
									<li>
										<a href="#"><div>Terminos y condiciones</div></a>
									</li>
									<li>
										<a href="#"><div>Contact</div></a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_title">Mantente en contacto</div>
								<div class="newsletter">
									<form action="#" id="newsletter_form" class="newsletter_form">
										<input type="email" class="newsletter_input" placeholder="Suscríbete a nuestro boletín" required="required">
										<button class="newsletter_button">+</button>
									</form>
								</div>
								<div class="footer_social">
									<div class="footer_title">Social</div>
									<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | template tomado de <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="category.html">Geles Hiroalcoholicos</a></li>
										<li><a href="category.html">Mascaras (tapabocas)</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
		
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="bootstrap-4.1.2/popper.js"></script>
<script src="bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>

    </body>
</html>
