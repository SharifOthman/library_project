@extends('web.master')
@section('body')
<!-- brand 1-->
        <h2 class="text-center" style="color:#3ED815 ">My Favorite Books</h2>
        <div class="books">
            <div class="container">
                <div class="row">
                       @foreach($favorites as $favorite)
                    <div class="col-lg-3 col-md-4  col-sm-6 col-xs-12">
                        <div class="book">
   <a href="/product_show/{{$favorite->product->id}}" ><img src="/upload/{{$favorite->product->image}}"></a>
    <h4 class="text-center" style=" font-size: 20px" >{{$favorite->product->name}}</h4>
    <h4 class="text-center" style=" border-radius: 14px;
     background-color: #4CAF50;">{{$favorite->product->price}}$</h4>
     <i style="font-size:20px;padding: 5px;" class="fa">&#xf06e;{{$favorite->product->count_view}}</i>
                               
                               <br>
                 <a href="/favorite_products/{{$favorite->product->id}}" style="color:#E23A20"> <span class="glyphicon glyphicon-heart"></span> </a>
                        <div class="text-center"><a href="" class="btn btn-warning">Add To Basket</a></div>
                        </div>
                        
                    </div>    
                     @endforeach
                </div>
            </div>
        </div>
    <!-- end brand -->








@endsection('body')