   @extends('extend.app')
   @section('content')
       <div class="main-content">

           <div class="page-content">
               <h1 class="text-center" style="color:09525D">All Categories</h1>

               <div class="container-fluid">



                   <div class="row">
                       <div class="col-12">
                           <div class="card">
                               <div class="card-body">

                                   <table class="table table-bordered">
                                       <thead>
                                           <tr>
                                               <th>ID</th>
                                               <th>Name</th>
                                               <th>controle</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($categories as $category)
                                               <tr>
                                                   <td>{{ $category->id }}</td>
                                                   <td>{{ $category->name }}</td>



                                                   <td>

                                                       <a href="edit_category/{{ $category->id }}/edit"
                                                           class="btn btn-success">Edit</a>
                                                       <a href="/delete_category/{{ $category->id }}"
                                                           class="btn btn-danger">Delete</button>
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
