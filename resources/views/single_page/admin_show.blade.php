        @extends('web.master')
        @section('body')


        <!-- brand 1-->
        <h2 class="text-center" style="color:#3ED815 ">The Owner</h2>


        <div class="row">

            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
               
                    <div class="image_author">
                        <img style="width: 350px" src="/upload/{{$owner->image}}" alt="img"/>
                    </div>
                   
                   <br>
                   <br>
               
                
    <h4 class="text-center" style=" font-size: 40px  ; color:#3ED815 ">{{ $owner->name }}</h4>
                 <div class="book">
      <div class="text-center">      <h4  style="color:#000000 ">{{ $owner->resum }}</h4></div> 
        </div>
               <h3 >Birth date:<span  style="color:#3ED815 ">{{ $owner->birth_date }}</span></h3>
               
          <h3 >position:<span  style="color:#3ED815 ">{{ $owner->position }}</span></h3>


             </div> 

       </div>


       <!-- end brand -->



@endsection('body')


















