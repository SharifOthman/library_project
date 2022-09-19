@extends('extend.app')
       @section('content')
    
          <div class="main-content">

         <div class="page-content">
          <h1 class="text-center" style="color:09525D">Edit author</h1>

                    <div class="container-fluid">

                       

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                       

                                        <div class="box">
                        <form action="/update_author/{{$author->id}}/update"  method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                        <label for="full_name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" id="name" name="full_name" value="{{$author->full_name}}">
                        </div>
                        <br>
                         <br>
                         <div class="form-group">
                        <label for="birth_date">Birth_date:</label>
                        <input type="date" class="form-control" placeholder="Enter birth_date" id="name" name="birth_date"  value="{{$author->birth_date}}">
                        </div>
                        <br>

                          <div class="form-group">
                        <label for="death_date">Death_date:</label>
                        <input type="date" class="form-control" placeholder="Enter death_date" id="name" name="death_date" value="{{$author->death_date}}">
                        </div>
                        <br>

                          <div class="form-group">
                        <label for="resum">Resume:</label>
                        <textarea name="resum" class="form-control">  </textarea>
                        </div>

                        <br>
                         
                        <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file"  name="image">
                        </div>
                        <br>
                         <div class="form-group">
                        <label for="facebook_link">facebook_link:</label>
                        <input type="text" class="form-control" placeholder="Enter facebook_link" id="name" name="facebook_link"   value="{{$author->facebook_link}}">
                        </div>
                        <br>
                         <div class="form-group">
                        <label for="instagram_link">instagram_link:</label>
                        <input type="text" class="form-control" placeholder="Enter instagram_link" id="name" name="instagram_link" value="{{$author->instagram_link}}">
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="twitter_link">twitter_link:</label>
                        <input type="text" class="form-control" placeholder="Enter twitter_link" id="name" name="twitter_link" value="{{$author->twitter_link}}" >
                        </div>
                       
                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
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
