
@extends('web.master')
@section('body')


 <!--body-->

<body class="main-layout">
    
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-innerbannercontent">
							<h1>My Account</h1>
							<div class="item tg-testimonial">
										<figure><img src="images/author/imag-02.jpg" alt="image description"></figure>
										
									</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Contact Us Start
			*************************************-->
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-contactus">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectionhead">
									<h2><span>Hello nazeer</span>Your Account</h2>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<form class="tg-formtheme tg-formcontactus">
									<fieldset>
										<div class="form-group"> First Name
											<input type="text" name="first-name" class="form-control" placeholder="Nazzer">
										</div>
										<div class="form-group">Last Name
											<input type="text" name="last-name" class="form-control" placeholder="najeeb">
										</div>
										<div class="form-group">Email
											<input type="email" name="email" class="form-control" placeholder="Zizo@ggg.caf">
										</div>
										<div class="form-group">Password
											<input type="password" name="password" class="form-control" placeholder="........">
										</div>
										<div class="form-group">image
											<input type="file" name="iamge" class="form-control" >
										</div>
										
										<div class="form-group">
											<button type="submit" class="tg-btn tg-active">Edit</button>
										</div>
									</fieldset>
								</form>
							
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Contact Us End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
			
	</body>

 @endsection('body')
