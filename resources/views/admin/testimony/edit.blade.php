@extends('admin.layout.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Testimonials</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add New
                            </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">New Testimonials Comment</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{route('admin.testimony.update',$testimony)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                <input name="name" value="{{$testimony->name}}" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter the name ">
                </div>
                @error('name')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                 </span>
                @enderror
                <div class="form-group">
                  <label for="exampleInputEmail1">Job Title</label>
                  <input name="job_title" value="{{$testimony->job_title}}" type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter the Title">
                </div>
                @error('title')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                 </span>
                @enderror
                <div class="form-group">
                  <label for="exampleInputPassword1">Comment</label>
                  <textarea name="comment" id="exampleInputPassword1" class="form-control @error('disc') is-invalid @enderror" rows="6" cols="60">
                    {{$testimony->comment}}
                  </textarea>
                </div>
                @error('comment')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                 </span>
                @enderror
                <div class="form-group">
                  <div class="input-group">
                    <div class="">
                        <label for="exampleInputFile">Choose Avater</label>
                       <div></div>
                      <input name="photo" type="file" class=" @error('photo') is-invalid @enderror" id="exampleInputFile">
                    </div>
                  </div>
                </div>
                @error('photo')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                 </span>
                @enderror
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
