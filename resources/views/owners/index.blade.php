 @extends('extend.app')
   @section('content')
       <div class="main-content">

           <div class="page-content">
               <h1 class="text-center" style="color:09525D">All Owners</h1>

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
                                               <th>Image</th>
                                               <th>facebook_link</th>
                                               <th>instagram_link</th>
                                               <th>twitter_link</th>
                                                <th>Resume</th>
                                                <th>position</th>
                                                <th>controle</th>



                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($owners as $owner)
                                               <tr>
                                                   <td>{{ $owner->id }}</td>
                                                   <td>{{ $owner->name }}</td>
                                                   <td>{{ $owner->birth_date }}</td>
                                                     <div style="width:60px">
                                                <td> 
                                               <img style="width:130px" src="upload/{{$owner->image}}" alt="img" />
                                               </td>
                                                    </div>
                                               
<td><a style="font-size:20px" href="https://{{$owner->facebook_link}}" target="_blank">facebook</a></td>
<td><a style="font-size:20px" href="https://{{$owner->instagram_link}}" target="_blank">instagram</a></td>
<td><a style="font-size:20px" href="https://{{$owner->twitter_link }}" target="_blank">twitter</a></td>

                                                    <td>{{ $owner->resum }}</td>
                                                     <td>{{ $owner->position }}</td>





                                                   <td>

                                    <a href="edit_owner/{{ $owner->id }}/edit" class="btn btn-success">Edit</a>

                                    <br>
                                    <br>

                                     <a href="delete_owner/{{ $owner->id }}"class="btn btn-danger">Delete</button>
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
