   @extends('extend.app')
   @section('content')
    
          <div class="main-content">

         <div class="page-content">
          <h1 class="text-center" style="color:09525D">Add User</h1>

                    <div class="container-fluid">

                       

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                       

                                        <div class="box">
                       
                                      <form action="/store_register" method="POST"  enctype="multipart/form-data">
                            @csrf
                                
                                             <div class="form-group">
                                             <label for="name"></label>

                                            <input type="text" name="name" class="form-control" placeholder="Enter name">
                                           </div>

                                            <div class="form-group">
                                             <label for="phone_number"></label>
                                            <input type="text" name="phone_number" class="form-control" placeholder="Enter phone_number" id="name" >
                                           </div>

                                           <div class="form-group">
                                            <label for="image"></label>
                                            <input type="file"  name="image">
                                           </div>

                                             <div class="form-group">
                                            <label for="email"></label>
                                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                            </div>

                                            <div class="form-group">
                                            <label for="password"></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" id="name" >
                                            </div>



                     
                        
                        <button type="submit" class="btn btn-primary">Add</button>
                    
                        </form>

          </div>

                                             
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
  






     @endsection