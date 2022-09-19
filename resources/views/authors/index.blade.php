 @extends('extend.app')
   @section('content')
       <div class="main-content">

           <div class="page-content">
               <h1 class="text-center" style="color:09525D">All Authors</h1>

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
                                               <th>Birth_date</th>
                                               <th>Death_date</th>
                                               <th>Resume</th>
                                               <th>Image</th>
                                               <th>facebook_link</th>
                                               <th>instagram_link</th>
                                               <th>twitter_link</th>
                                                <th>controle</th>



                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($authors as $author)
                                               <tr>
                                                   <td>{{ $author->id }}</td>
                                                   <td>{{ $author->full_name }}</td>
                                                   <td>{{ $author->birth_date }}</td>
                                                   <td>{{ $author->death_date }}</td>
                                                   <td>{{ $author->resum }}</td>

                                                 <div style="width:60px">
                                                <td> 
                                               <img style="width:130px" src="upload/{{$author->image}}" alt="img" />
                                             </td>
                                           </div>

<td><a style="font-size:20px" href="https://{{$author->facebook_link}}" target="_blank">facebook</a></td>
<td><a style="font-size:20px" href="https://{{$author->instagram_link}}" target="_blank">instagram</a></td>
<td><a style="font-size:20px" href="https://{{$author->twitter_link }}" target="_blank">twitter</a></td>
                                 



                                                   <td>

                                    <a href="edit_author/{{ $author->id }}/edit" class="btn btn-success">Edit</a>

                                    <br>
                                    <br>

                                     <a href="/delete_author/{{ $author->id }}"class="btn btn-danger">Delete</button>
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
