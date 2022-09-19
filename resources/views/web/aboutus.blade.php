@extends('web.master')
@section('body')


 <!--body-->

<body class="main-layout">
    

		
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-aboutus">
							 @foreach($aboutus as $one)
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="tg-aboutusshortcode">
									<div class="tg-sectionhead">
										<h2><span>Greetings &amp; Welcome</span>Know More About Us</h2>
									</div>
									<div class="tg-description">
										<p>{{$one->know_more}}</p>
									</div>
									<br>
									<br>
 <a style="font-size:20px" href="https://{{  $one->video_link}}" target="_blank">video</a>
									<br>
									<br>
                                    <div class="tg-sectionhead">

										<h2><span>Greetings &amp; Welcome</span>Our joruny About Us</h2>
									</div>
									<div class="tg-description">
										<p>{{$one->our_joruny}}</p>
									</div>
									
								</div>
							</div>
							
							 @endforeach
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					About Us End
			*************************************-->
			
		
			
			<!--************************************
					Authors Start
			*************************************-->
				<div class="tg-authorsgrid">
				<div class="container">
					<div class="row">
						<div class="tg-authors">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectionhead">
									<h2>Owners</h2>
								</div>
							</div>
							@foreach($owners as $one)
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<div class="tg-author">
<figure><a href="/owner/{{$one->id}}"><img src="upload/{{$one->image}}" alt="image description"></a></figure>
									<div class="tg-authorcontent">
										<h2>{{$one->name}}</h2>
										<br> 
										<ul class="tg-socialicons">
<li class="tg-facebook"><a href="https://{{$one->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
<li class="tg-twitter"><a href="https://{{$one->twitter_link}}"><i class="fa fa-twitter"></i></a></li>
<li class="tg-instagram"><a href="https://{{$one->instagram_link}}"><i class="fa fa-instagram"></i></a></li>
											<br>
											<br>
											 
										</ul>
									</div>
								</div>
							</div>
							@endforeach
							
							
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Authors End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
	

	
	</body>

 @endsection('body')
