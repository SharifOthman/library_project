   @extends('extend.app')
   @section('content')
    
          <div class="main-content">

         <div class="page-content">
          <h1 class="text-center" style="color:09525D">Add Article</h1>

                    <div class="container-fluid">

                       

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                       

                                        <div class="box">
                        <form action="/store_article" method="POST"  enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="name" name="title">
                        </div>
                        <br>
                          <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file"  name="image">
                        </div>
                        
                         
                        <br>
                        
                          <div class="form-group">
                        <label for="line">Line:</label>
                        <textarea name="line" class="form-control">  </textarea>
                        </div>
                        
                    
                        <br>
                       <div class="form-group">
                        <label for="owner_id">Owner:choose</label>
                        <select class="form-control" name="owner_id">
                            @foreach($owners as $owner)
                              <option value="{{$owner->id}}">{{$owner->name}}</option>
                            @endforeach
                            
                        </select>
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