   @extends('extend.app')
   @section('content')
    
          <div class="main-content">

         <div class="page-content">
          <h1 class="text-center" style="color:09525D">Add About_us</h1>

                    <div class="container-fluid">

                       

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                       

                                        <div class="box">
                        <form action="/update_aboutus/{{$aboutus->id}}/update" method="POST"  enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                        <label for="know_more">know_more:</label>
                        <input type="text" class="form-control" placeholder="Enter know_more" id="name" name="know_more"  value="{{$aboutus->know_more}}">
                        </div>
                       

                        <br>
                        <div class="form-group">
                        <label for="our_joruny">our_joruny:</label>
                        <input type="text" class="form-control" placeholder="Enter our_joruny" id="name" name="our_joruny"  value="{{$aboutus->our_joruny}}">
                        </div>
                         
                       
                        <br>
                         
                          <div class="form-group">
                        <label for="video_link">video_link:</label>
                        <input type="text" class="form-control" placeholder="Enter video_link" id="name" name="video_link" value="{{$aboutus->video_link}}">
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