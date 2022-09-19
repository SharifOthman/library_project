 @extends('extend.app')
   @section('content')
       <div class="main-content">

           <div class="page-content">
               <h1 class="text-center" style="color:09525D">The Footer</h1>

               <div class="container-fluid">



                   <div class="row">
                       <div class="col-12">
                           <div class="card">
                               <div class="card-body">

                                   <table class="table table-bordered">
                                       <thead>
                                           <tr>
                                               <th>ID</th>
                                               <th>term_of_use</th>
                                               <th>term_of_sale</th>
                                               <th>location</th>
                                               <th>facebook_link</th>
                                               <th>instagram_link</th>
                                               <th>twitter_link</th>
                                               <th>opining_time</th>
                                             



                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($footers as $footer)
                                               <tr>
                                                   <td>{{ $footer->id }}</td>
                                                   <td>{{ $footer->term_of_use }}</td>
                                                   <td>{{ $footer->term_of_sale }}</td>
                                                   <td>{{ $footer->location }}</td>
                                                   <td>{{ $footer->facebook_link }}</td>
                                                   <td>{{ $footer->instagram_link }}</td>
                                                   <td>{{ $footer->twitter_link }}</td>
                                                   <td>{{ $footer->opining_time }}</td>


                                                   <td>

                                    <a href="/edit_footer/{{$footer->id}}/edit" class="btn btn-success">Edit</a>

                                    <br>
                                    <br>

                                     <a href="/delete_footer/{{ $footer->id }}"class="btn btn-danger">Delete</button>
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
