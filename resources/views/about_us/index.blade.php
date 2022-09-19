@extends('extend.app')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <h1 class="text-center" style="color:09525D">All About_us</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>know_more</th>
                                            <th>our_joruny</th>
                                            <th>video</th>
                                            <th>controle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($aboutuss as $aboutus)
                                            <tr>
                                                <td>{{ $aboutus->id }}</td>
                                                <td>{{ $aboutus->know_more }}</td>
                                                <td>{{ $aboutus->our_joruny }}</td>
                                                <div>
                                                    <td>
    
     <a style="font-size:20px" href="https://{{  $aboutus->video_link}}" target="_blank">video</a>
                                                    </td>
                                                </div>
                                                <td>
                                                    <a href="edit_aboutus/{{ $aboutus->id }}/edit"
                                                        class="btn btn-success">Edit</a>
                                                    <br>
                                                    <br>
                                                    <a href="/delete_aboutus/{{ $aboutus->id }}"class="btn btn-danger">Delete</button>
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
