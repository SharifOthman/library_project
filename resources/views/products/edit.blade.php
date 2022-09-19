   @extends('extend.app')
   @section('content')
    
          <div class="main-content">

         <div class="page-content">
          <h1 class="text-center" style="color:09525D">Edit Product</h1>

                    <div class="container-fluid">

                       

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                       

                                        <div class="box">
                        <form action="/update_product/{{$product->id}}/update" method="POST"  enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" value="{{$product->name}}">
                        </div>
                        <br>
                         <div class="form-group">
                        <label for="price">price:</label>
                        <input type="text" class="form-control" placeholder="Enter price" id="name" name="price" value="{{$product->price}}">
                        </div>
                        <br>
                        
                          <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" class="form-control">  </textarea>
                        </div>
                        
                        <br>
                         <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file"  name="image">
                        </div>
                        <br>
                          <div class="form-group">
                        <label for="file">file:</label>
                        <input type="file"  name="file">
                        </div>
                        

                        <br>
                         <div class="form-group">
                        <label for="is_offer">is_offer:choose</label>
                        <select  class="form-control"  name="is_offer" >
                            <option value="1">YES</option>
                            <option value="0">NO</option>

                        </select>
                        </div>
                      
                        <br>
                           <div class="form-group">
                        <label for="offer_discount">offer_discount:</label>
                        <input type="text" class="form-control" placeholder="Enter offer_discount" id="name" name="offer_discount" value="{{$product->offer_discount}}">
                        </div>
                    
                        <br>
                       <div class="form-group">
                        <label for="category_id">Category:choose</label>
                        <select class="form-control" name="category_id">
                            @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            
                        </select>
                        </div>
                        
                        <br>
                                <div class="form-group">
                    <label for="author_id">Author:choose</label>
                    <select class="form-control" name="author_id">
                        @foreach($authors as $author)
                          <option value="{{$author->id}}">{{$author->full_name}}</option>
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