@extends('web.master')
@section('body')
   <div style="margin: 30px" class="btn-group">
  <button  type="button" class="btn btn-success">order</button>
  <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/order_name/{{$category->id}}">name</a>
    <br>
    <a class="dropdown-item" href="/order_price/{{$category->id}}">price</a>
  </div>
</div>
<!-- brand 1-->
        <h2 class="text-center" style="color:#3ED815 ">{{$category->name}}</h2>
        <div class="books">
            <div class="container">
                <div class="row">
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

    <div class="text-center"><a href="https://demo.MyFatoorah.com/KWT/ie/01072160698542" class="btn btn-warning">buy</a></div>
                        </div>
                        
                    </div>    
                     @endforeach
                </div>
            </div>
        </div>
    <!-- end brand -->








@endsection('body')