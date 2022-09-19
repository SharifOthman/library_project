@extends('extend.app')
@section('content')
    
          <div class="main-content">

         <div class="page-content">
          <h1 class="text-center" style="color:09525D">Add Footer</h1>

                    <div class="container-fluid">

                       

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                       

                                        <div class="box">
                        <form action="/store_footer"  method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                        <label for="term_of_use">term_of_use:</label>
                        <input type="text" class="form-control" placeholder="Enter term_of_use" id="name" name="term_of_use" >
                        </div>
                        <br>
                         <br>
                         <div class="form-group">
                        <label for="birth_date">term_of_sale:</label>
                        <input type="text" class="form-control" placeholder="Enter term_of_sale" id="name" name="term_of_sale">
                        </div>
                        <br>

                          <div class="form-group">
                        <label for="location">location:</label>
                        <input type="text" class="form-control" placeholder="Enter location" id="name" name="location">
                        </div>
                        <br>

                         
                         <div class="form-group">
                        <label for="facebook_link">facebook_link:</label>
                        <input type="text" class="form-control" placeholder="Enter facebook_link" id="name" name="facebook_link" >
                        </div>
                        <br>
                         <div class="form-group">
                        <label for="instagram_link">instagram_link:</label>
                        <input type="text" class="form-control" placeholder="Enter instagram_link" id="name" name="instagram_link">
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="twitter_link">twitter_link:</label>
                        <input type="text" class="form-control" placeholder="Enter twitter_link" id="name" name="twitter_link" >
                        </div>
                       
                        <br>
                         <div class="form-group">
                        <label for="opining_time">opining_time:</label>
                        <input type="text" class="form-control" placeholder="Enter opining_time" id="name" name="opining_time" >
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
