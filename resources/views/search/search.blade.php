@extends('web.master')
@section('body')
     
<!-- search page-->
        <h2 class="text-center" style="color:#3ED815 ">page search</h2>
        <div class="books">
            <div class="container">
                <div class="row">
                       @foreach($search_products as $one)
                    <div class="col-lg-3 col-md-4  col-sm-6 col-xs-12">
                        <div class="book">
                             <a href="/product_show/{{$one->id}}" ><img src="upload/{{$one->image}}"></a>
                             <h4 class="text-center" style=" font-size: 20px" >{{$one->name}}</h4>
                             <h4 class="text-center" style=" border-radius: 14px;
                             background-color: #4CAF50;">{{$one->price}}$</h4>
                              <i style="font-size:20px;padding: 5px;" class="fa">&#xf06e;{{$one->count_view}}</i>
                               
                               <br>
            <a href="/favorite_products/{{$one->id}}" style="color:#E23A20"> <span class="glyphicon glyphicon-heart"></span> </a>
                        <div class="text-center"><a href="https://demo.MyFatoorah.com/KWT/ie/01072160698542" class="btn btn-warning">buy</a></div>
                        </div>
                        
                    </div>    
                     @endforeach
                </div>
            </div>
        </div>
    <!-- end search page -->








@endsection('body')