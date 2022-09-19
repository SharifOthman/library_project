 @extends('extend.app')
   @section('content')
    
          <div class="main-content">

         <div class="page-content">
          <h1 class="text-center" style="color:09525D">Edit Owner</h1>

                    <div class="container-fluid">

                       

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                       

                                        <div class="box">
                        <form action="/update_owner/{{$owner->id}}/update" method="POST"  enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" value="{{$owner->name}}">
                        </div>
                        <br>
                         <div class="form-group">
                        <label for="birth_date">Birth_date:</label>
                        <input type="date" class="form-control" placeholder="Enter birth_date" id="name" name="birth_date" value="{{$owner->birth_date}}">
                        </div>
                        <br>

                        <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file"  name="image">
                        </div>
   
                       
                        <br>

                        <div class="form-group">
                        <label for="facebook_link">facebook_link:</label>
                        <input type="text" class="form-control" placeholder="Enter facebook_link" id="name" name="facebook_link" value="{{$owner->facebook_link}}">
                        </div>
                        <br>
                         <div class="form-group">
                        <label for="instagram_link">instagram_link:</label>
                        <input type="text" class="form-control" placeholder="Enter instagram_link" id="name" name="instagram_link" value="{{$owner->instagram_link}}">
                        </div>
                        
                        <br>
                          <div class="form-group">
                        <label for="twitter_link">twitter_link:</label>
                        <input type="text" class="form-control" placeholder="Enter twitter_link" id="name" name="twitter_link" value="{{$owner->twitter_link}}">
                        </div>
                          <div class="form-group">
                        <label for="resum">Resume:</label>
                        <textarea name="resum" class="form-control">  </textarea>
                        </div>
                        <br>
                          <div class="form-group">
                        <label for="position">position:</label>
                        <input type="text" class="form-control" placeholder="Enter position" id="name" name="position" value="{{$owner->position}}">
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