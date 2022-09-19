 @extends('extend.app')
   @section('content')
       <div class="main-content">

           <div class="page-content">
               <h1 class="text-center" style="color:09525D">All Articles</h1>

               <div class="container-fluid">



                   <div class="row">
                       <div class="col-12">
                           <div class="card">
                               <div class="card-body">

                                   <table class="table table-bordered">
                                       <thead>
                                           <tr>
                                               <th>ID</th>
                                               <th>Owner</th>
                                               <th>Title</th>
                                               <th>Image</th>
                                               <th>Line</th>



                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($articles as $article)
                                               <tr>
                                                   <td>{{ $article->id }}</td>
                                                   <td>{{ $article->owner->name }}</td>

                                                   <td>{{ $article->title}}</td>
                                                      <div style="width:60px">
                                                     <td> 
                                               <img style="width:130px" src="upload/{{$article->image}}" alt="img"   />
                                                    </td>
                                                </div>
                                                 
                                                   <td>{{ $article->line }}</td>
                                                  




                                                   <td>

                                    <a href="/edit_article/{{ $article->id }}/edit" class="btn btn-success">Edit</a>

                                    <br>
                                    <br>

                                     <a href="/delete_article/{{ $article->id }}"class="btn btn-danger">Delete</button>
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
