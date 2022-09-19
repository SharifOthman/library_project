







@extends('web.master')
@section('body')


 <!--body-->

<body class="main-layout">
    


<!--

                Home Slider Start
        *************************************-->
        <div id="tg-homeslider" class="tg-homeslider tg-homeslidervtwo tg-haslayout owl-carousel" style="background: url(slider2.jpg) no-repeat 0px 0px;
background-size:cover;
-webkit-background-size: cover;
-o-background-size: cover;
-ms-background-size: cover;
-moz-background-size: cover;
min-height: 600px;">
                 @foreach($sliders as $one)
            <div class="item" data-vide-bg="poster: image/slider/img-03.jpg" data-vide-options="position: 0% 50%">
                <div class="container">
                    <div class="row">
                         
                        <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">

                            <div class="tg-slidercontent">
                                <figure class="tg-authorimg"><img src="/upload/{{$one->image}}" alt="image description"></figure>
                                <h1>Search your favourite Book</h1>
                                <div class="tg-description">
                                    <p>{{$one->line}}</p>
                                </div>
                                <div class="tg-btns">
                                    
                                    
                                </div>
                            </div>
         <a style="font-size:40px; color:white;" href="https://{{ $one->read_link }}" target="_blank">read_link</a>
                        </div>
                        
                    </div>
                </div>
            </div>
             @endforeach


        </div>
        <!--************************************
                Home Slider End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <!--************************************
                    All Status Start
            *************************************-->
            
            <!--************************************
                    All Status End
            *************************************-->
            <!--************************************
                    Best Selling Start
            *************************************-->
        
            <!--************************************
                    New Release End
            *************************************-->
            <!--************************************
                    Collection Count Start
            *************************************-->
            
            <!--************************************
                    Collection Count End
            *************************************-->
            <!--************************************
                    Top Treanding Start
            *************************************-->
        <!-- brand 1-->
        <br>
        <br>
                       @foreach($categories as $category)
        <h2 class="text-center" style="color:white ;background-color:#4CAF50 ; ">{{$category->name}}</h2>
        <div class="books">
            <div class="container">
                <div class="row"  >
                       @foreach($category->products as $one)
                  <div class="col-lg-3 col-md-4  col-sm-6 col-xs-12">
                        <div class="book">
                             <a href="/product_show/{{$one->id}}" ><img src="upload/{{$one->image}}"></a>
                             <h4 class="text-center" style=" font-size: 20px" >{{$one->name}}</h4>
                             <h4 class="text-center" style=" border-radius: 14px;
                             background-color: #4CAF50;">{{$one->price}}$</h4>
                             <i style="font-size:20px;padding: 5px;" class="fa">&#xf06e;{{$one->count_view}}</i>
                             
                               
                               <br>
                <a href="/favorite_products/{{$one->id}}" style="color:#E23A20"> <span class="glyphicon glyphicon-heart"></span> </a>

         <div class="text-center"><a href="https://demo.MyFatoorah.com/KWT/ie/01072160698542" class="btn btn-warning">Buy</a></div>
                        </div>
       
                    </div>

                     @endforeach
                </div>
            </div>
             @endforeach
        </div>
    <!-- end brand -->
    
            <!--************************************
                    Top Treanding End
            *************************************-->
            
            <!--************************************
                    Authors Start
            *************************************-->
         
        <!--************************************
                Main End
        *************************************-->
        <!--************************************-->
</body>

 @endsection('body')
