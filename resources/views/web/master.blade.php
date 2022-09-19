<!doctype html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sama Library</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
	<!-- my css file -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">
	<link rel="stylesheet" href="{{asset('css/transitions.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="{{asset('css/color.css')}}">
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	<script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
	<script src="{{asset('https://kit.fontawesome.com/c18812a75e.js')}}" crossorigin="anonymous"></script>
	<div>
	 
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">
</div>
</head>
<body class="tg-home tg-homeone">
	
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						
							@if(!Auth::user())
                                  <div style=" padding: 16px;" class="tg-registermain"><a href="/register_user"><span>Register</span></a>
                                  	
                                  </div>
                                   <div style=" padding: 16px;" class="tg-registermain"><a href="/login_user"><span>Login</span></a>
                                  	
                                  </div>	
                                  @else			
							<div class="tg-userlogin">
								<figure><a href="javascript:void(0);" ><img src="{{asset('images/users/img-01.jpg')}}" alt="image description"></a></figure>

							
								<div class="dropdown tg-themedropdown tg-currencydropdown">
								<a href="javascript:void(0);" id="tg-currenty" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									
                                     <span>{{Auth::user()->name}}</span>
								
								</a>
								<ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-currenty">
									<li>
										<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
											
											<span >Log Out</span>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
										</a>
									</li>
									 @if(Auth::user()->admin==1)
									<li>
										<a href="/dashboard" class="active" >
											
											<span >Dashboard</span>
										</a>
									</li>
									@endif
									<li>
										<a href="/favorite_products" class="active" >
											
											<span >My Favorite Books</span>
										</a>
									</li>
								</ul>
							</div>


							</div>
							@endif
							
						</div>
					</div>
				</div>

			
			<div class="tg-middlecontainer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<strong class="tg-logo"><a href="index.html"><img src="{{asset('images/logo.png')}}" alt="company name here"></a></strong>
							<div class="tg-wishlistandcart">
							     
								<div class="dropdown tg-themedropdown tg-minicartdropdown">
									<a href="javascript:void(0);" id="tg-minicart" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="tg-themebadge">3</span>
										<i  class="fa fa-cart-arrow-down" ></i>
										<span >Cart</span>
									</a>
									<div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-minicart">
										<div class="tg-minicartbody">
											<div class="tg-minicarproduct">
												<figure>
													<img src="images/products/img-01.jpg" alt="image description">
													
												</figure>
												<div class="tg-minicarproductdata">
													<h5><a href="javascript:void(0);">Our State Fair Is A Great Function</a></h5>
													<h6><a href="javascript:void(0);">$ 12.15</a></h6>
												</div>
											</div>
											<div class="tg-minicarproduct">
												<figure>
													<img src="images/products/img-02.jpg" alt="image description">
													
												</figure>
												<div class="tg-minicarproductdata">
													<h5><a href="javascript:void(0);">Bring Me To Light</a></h5>
													<h6><a href="javascript:void(0);">$ 12.15</a></h6>
												</div>
											</div>
											<div class="tg-minicarproduct">
												<figure>
													<img src="images/products/img-03.jpg" alt="image description">
													
												</figure>
												<div class="tg-minicarproductdata">
													<h5><a href="javascript:void(0);">Have Faith In Your Soul</a></h5>
													<h6><a href="javascript:void(0);">$ 12.15</a></h6>
												</div>
											</div>
										</div>
										<div class="tg-minicartfoot">
											<a class="tg-btnemptycart" href="javascript:void(0);">
												<i class="fa fa-trash-o"></i>
												<span>Clear Your Cart</span>
											</a>
											<span class="tg-subtotal">Subtotal: <strong>35.78</strong></span>
											<div class="tg-btns">
												<a class="tg-btn tg-active" href="javascript:void(0);">View Cart</a>
												<a class="tg-btn" href="javascript:void(0);">Checkout</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tg-searchbox">
<form class="tg-formtheme tg-formsearch" action="/search" method="GET"  enctype="multipart/form-data">
	@csrf
									<fieldset>
	<input type="text" name="data" class="typeahead form-control" placeholder="Search by product">
		<button type="submit"><i class="fa fa-search"></i></button>
									</fieldset>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>

										<li><a href="/index">Home</a></li>
									
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">All Categories</a>
											<div class="mega-menu">
												<ul  role="tablist">
													<li role="presentation" class="active">
														<a href="/art_photography">Art & Photography</a>
													</li>
													<li role="presentation" class="active">
														<a href="/biography">Biography</a>
													</li>
													<li role="presentation" class="active">
														<a href="/children">Children’s Book</a>
													</li>
													<li role="presentation" class="active">
														<a href="/craft_hobbies">Craft & Hobbies</a>
													</li>
													<li role="presentation">
														<a href="/crime_thriller">Crime & Thriller</a>
													</li>
													<li role="presentation" class="active">
														<a href="/fantasy_horror">Fantasy & Horror</a>
													</li>
													<li role="presentation" class="active">
														<a href="/fiction">Fiction</a>
													</li>
													<li role="presentation" class="active">
														<a href="/food_drink">Food & Drink</a>
													</li><li role="presentation" class="active">
														<a href="/anime">Graphic, Anime & Manga</a>
													</li>
													<li role="presentation" class="active">
														<a href="/science_fiction">Science Fiction</a>
													</li>
												</ul>
										</li>
										
										<li><a href="/authors">Authors</a></li>
										<li><a href="/articles">Our Blog</a></li>
										<li><a href="/aboutus">About Us</a></li>


										
										
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		
			<!--	Header End -->
		



     @yield('body')





		<!--	Footer Start -->
		
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-footerarea">
				<div class="container">
					<div class="row">
						
						<div class="tg-threecolumns">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-footercol">
									<strong class="tg-logo"><a href="javascript:void(0);"><img src="{{asset('images/flogo.png')}}" alt="image description"></a></strong>
									<ul class="tg-contactinfo">
										<li>
											<i class="fa fa-location"></i>
											<address>Syria - Damascus </address>
										</li>
										<li>
											<i class="fa fa-phone"></i>
											<span>
												<em>0991209637</em>
												<em>0956791800</em>
												<em>0967298371</em>
											</span>
										</li>
										<li>
											<i class="fa fa-clock"></i>
											<span>Serving 7 Days </span>
										</li>
										<li>
											<i class="fa fa-envelope"></i>
											<span>
												<em><a href="mailto:support@domain.com">yamanhamdan171@gmail.com</a></em>
												<em><a href="mailto:info@domain.com">sharefothman@gmail.com</a></em>
											</span>
										</li>
									</ul>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
										<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
										<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-footercol tg-widget tg-widgetnavigation">
									<div class="tg-widgettitle">
										<h3>Shipping And Help Information</h3>
									</div>
									<div class="tg-widgetcontent">
										
										<ul>
											<li><a href="/termofuse">Terms of Use</a></li>
											<li><a href="/termofsale">Terms of Sale</a></li>
											

										</ul>
										<ul>
										
											<li><a href="/aboutus">Meet Our Team</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="tg-footercol tg-widget tg-widgettopsellingauthors">
									<div class="tg-widgettitle">
										<h3>Owners</h3>
									</div>
									@foreach($owners as $one)
									<div class="tg-widgetcontent">
										<ul>
											<li>
	<figure><a href="/owner/{{$one->id}}"><img style="width:60px" src="/upload/{{$one->image}}" alt="image description"></a></figure>
												<div class="tg-authornamebooks">
													<h4><a href="javascript:void(0);">{{$one->name}}</a></h4>
													
												</div>
											</li>
									
											
										</ul>
										<ul>
											
											
										</ul>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="tg-footerbar">
				<a id="tg-btnbacktotop" class="tg-btnbacktotop" href="javascript:void(0);"><i class="fa fa-chevron-up"></i></a>
				<div class="container">
					
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="{{asset('js/vendor/jquery-library.js')}}"></script>
	<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/jquery.vide.min.js')}}"></script>
	<script src="{{asset('js/countdown.js')}}"></script>
	<script src="{{asset('js/jquery-ui.js')}}"></script>
	<script src="{{asset('js/parallax.js')}}"></script>
	<script src="{{asset('js/countTo.js')}}"></script>
	<script src="{{asset('js/appear.js')}}"></script>
	<script src="{{asset('js/gmap3.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>