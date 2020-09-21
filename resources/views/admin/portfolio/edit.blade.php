@extends('admin.layout.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Portfolio</h1>
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
              <h3 class="card-title">New Portfolio</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.portfolio.destroy', $portfolio)}}" method="POST" style="display: inline-block" enctype="multipart/form-data" >
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                <input name="title" type="text" value="{{$portfolio->title}}" class="form-control  @error('title') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter the Title">
                </div>
                @error('title')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                 </span>
                @enderror
                <div class="form-group">
                  <label for="exampleInputPassword1">Discription</label>
                  <textarea name="disc"  id="exampleInputPassword1" class="form-control @error('disc') is-invalid @enderror" rows="6" cols="60">
                    {{$portfolio->disc}}
                  </textarea>
                </div>
                @error('disc')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                 </span>
                @enderror
                <div class="form-group">
                    <label for="exampleFormControlFile1">project photo</label>
                <input name="photo" type="file" class=" @error('photo') is-invalid @enderror" id="exampleInputFile">
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
