
       @extends('extend.app')
       @section('content')
    
          <div class="main-content">

         <div class="page-content">
          <h1 class="text-center" style="color:09525D">Add Category</h1>

                    <div class="container-fluid">

                       

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                       

                                        <div class="box">
                        <form action="/store_category" method="POST">
                            @csrf
                        <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
                        </div>
                        <br>
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


     <!--<div class="container">
         <h1 class="text-center">Add Category</h1>
        <div class="box">
            <form action="/store_category" method="POST">
                @csrf
            <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
            </form>

        </div>


    </div> -->
