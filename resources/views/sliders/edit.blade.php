@extends('extend.app')
@section('content')
    
          <div class="main-content">

         <div class="page-content">
          <h1 class="text-center" style="color:09525D">Edit Slider</h1>

                    <div class="container-fluid">

                       

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                       

                                        <div class="box">
                        <form action="/update_slider/{{$slider->id}}/update"  method="POST" enctype="multipart/form-data">
                            @csrf
                         <div class="form-group">
                        <label for="image">image:</label>
                        <input type="file"  name="image">
                        </div>
                        <br>
                       
                        <div class="form-group">
                        <label for="line">line:</label>
                        <input type="text" class="form-control" placeholder="Enter line" id="name" name="line" value="{{$slider->line}}">
                        </div>
                       
                        <br>
                         <div class="form-group">
                        <label for="read_link">read_link:</label>
                        <input type="text" class="form-control" placeholder="Enter read_link" id="name" name="read_link" value="{{$slider->read_link}}">
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
