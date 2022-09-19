@extends('web.master')
@section('body')

<!-- brand 1-->
        <h2 class="text-center" style="color:#3ED815 ">{{$product->category->name}}</h2>
        <div class="text-center" class="books">
            <div class="container">
                <div class="row">
                      
                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="image_author">
                             <img style="width:350px" src="/upload/{{$product->image}}">
                         </div>
            <h4 class="text-center" style="color:#00000 ; font-size: 35px; ">{{$product->name}}</h4>
        <h4 class="text-center" style="color:#3ED815 ; font-size: 30px;">price:  {{$product->price}}$</h4>
        <h4 class="text-center" style="color:#3ED815 ">offer discount:{{ $product->offer_discount }}$</h4>
        <div class="book">
             <h4  style="color:#000000 ">{{ $product->description }}</h4>
        </div>
        
         
              <div  class="text-center"  style=" border-radius: 14px;
                             background-color: #4CAF50; width: 90px; margin-left: auto;
  margin-right: auto;">
                  
                  <h4 ><a style="color:white;  " href="/upload/{{ $product->file }}" target="_blank">pdf file</a></h4>
              </div>
             
       
      
    <a  href="/author/{{$product->author->id}}"> <img class="book" style="width: 100px ; bottom: 20px"
     src="/upload/{{$product->author->image}}"></a>
     <a href="/author/{{$product->author->id}}"> <h4  class="text-center" style="color:#3ED815 ">{{$product->author->full_name}}</h4>
     <br></a>
       <br>   
                   



                       
                        
                      
                    
                    </div>    
                     
                </div>
            </div>
        </div>
    <!-- end brand -->




















@endsection('body')