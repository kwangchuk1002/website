@extends('layouts.app')

@section('content')
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">Client Details</div>
        <div class="card-body">
          <table id="table1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Subject</th>
                <th>Details</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($contact as $data)
              <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->number }}</td>
                <td>{{ $data->subject }}</td>
                <td>{{ $data->message }}</td>
                <td><a href = 'delete/{{ $data->id }}'>Delete</a></td>
              </tr>   
            @endforeach 
          </table>
        </div>
      </div>
    </div><br><br>
  </div>
  @if(\Session::has('success'))
    <div class="alert alert-success">
      <p>{{\Session::get('success')}}</p>
    </div>
  @endif
  <div class="col-lg-12">
    <div class="row">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">Upload Project (screen shot)</div>
          <div class="card-body">
            <form method="post" action="{{route('home-input')}}" enctype="multipart/form-data">
            @csrf
              <div class="col-md-6">
                <label class="text-black" for="photos">Photo of Project</label>
                <input type="file" id="photos" name="photos" class="form-control" required>
              </div><br><br>
              <div class="row form-group">
                <div class="col-md-12" align="center">
                  <input type="submit" value="Post"class="btn btn-primary btn-md text-white">
                  <input type="reset" value="Cancel"class="btn btn-danger btn-md text-white">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card" >
          <div class="card-header"style="background:#e6e3e3; text-align:center;color:#black;" >
            <strong >Project completed</strong>
          </div>
          <div class="card-body">
            <div class="row">
              @foreach ($photo as $data)
                <div class="col-md-4">
                  <div class="portfolio-img"><img src="{{asset('images/'.$data->photos)}}" width="400px"height="400px;" class="img-fluid" alt=""></div><br>
                  <div align="center"><a href = 'delete/{{ $data->id }}' class="btn btn-primary">Delete</a></div>
                </div><br><br>
              @endforeach 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection

