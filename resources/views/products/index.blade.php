 @extends('extend.app')
   @section('content')
       <div class="main-content">

           <div class="page-content">
               <h1 class="text-center" style="color:09525D">All Products</h1>

               <div class="container-fluid">



                   <div class="row">
                       <div class="col-12">
                           <div class="card">
                               <div class="card-body">

                                   <table class="table table-bordered">
                                       <thead>
                                           <tr>
                                               <th>ID</th>
                                               <th>Author</th>
                                               <th>Category</th>
                                               <th>Name</th>
                                               <th>price</th>
                                               <th>Description</th>
                                               <th>Image</th>
                                               <th>File</th>
                                               <th>is_offer</th>
                                               <th>offer_discount</th>
                                                <th>controle</th>



                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($products as $product)
                                               <tr>
                                                   <td>{{ $product->id }}</td>
                                                   <td>{{ $product->author->full_name  }}</td>
                                                   <td>{{ $product->category->name}}</td>
                                                   <td>{{ $product->name}}</td>
                                                   <td>{{ $product->price }}</td>
                                                   <td>{{ $product->description }}</td>

                                                 <div style="width:60px">
                                                <td> 
                                               <img style="width:130px" src="upload/{{$product->image}}" alt="img" />
                                               </td>
                                              </div>
                                                <!--  <td>{{ $product->file }}</td> --> 
                                                     <div>
                                                       <td>
                                                        <a href="upload/{{ $product->file }}" target="_blank">pdf file</a>
                                                     </td>
                                                     </div>






                                                   @if($product->is_offer==1)
                                                   <td>YES</td>
                                                   @else($product->is_offer==0)
                                                   <td>NO</td>
                                                   @endif
                                                   <td>{{ $product->offer_discount }}</td>
                                                  




                                                   <td>

                                    <a href="edit_product/{{ $product->id }}/edit" class="btn btn-success">Edit</a>

                                    <br>
                                    <br>

                                     <a href="delete_product/{{ $product->id }}"class="btn btn-danger">Delete</button>
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
