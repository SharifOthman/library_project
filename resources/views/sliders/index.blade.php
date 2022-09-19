 @extends('extend.app')
   @section('content')
       <div class="main-content">

           <div class="page-content">
               <h1 class="text-center" style="color:09525D">The Slider</h1>

               <div class="container-fluid">



                   <div class="row">
                       <div class="col-12">
                           <div class="card">
                               <div class="card-body">

                                   <table class="table table-bordered">
                                       <thead>
                                           <tr>
                                               <th>ID</th>
                                               <th>image</th>
                                               <th>line</th>
                                               <th>read_link</th>
                                               
                                             



                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($sliders as $slider)
                                               <tr>
                                                   <td>{{ $slider->id }}</td>
                                              <div style="width:60px">
                                                   <td> 
                                        <img style="width:130px" src="/upload/{{$slider->image}}" alt="img" />
                                                   </td>
                                                   </div>
                                                      

                                       
                                                   <td>{{ $slider->line }}</td>
                                                   <td>{{ $slider->read_link }}</td>

                                                   <td>

                                    <a href="/edit_slider/{{$slider->id}}/edit" class="btn btn-success">Edit</a>

                                    <br>
                                    <br>

                                     <a href="/delete_slider/{{$slider->id }}"class="btn btn-danger">Delete</button>
                                                   </td>

                                               </tr>
                                           @endforeach
                                       </tbody>
                                   </table>







                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   @endsection
