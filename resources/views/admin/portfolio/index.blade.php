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
                            <li class="breadcrumb-item active">Portfolio
                            </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
      <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Projects</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Project Name
                        </th>
                        <th style="width: 30%">
                            discription
                        </th>
                        <th>
                        photo
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
               @if (isset($projects) && count($projects) > 0)
               @foreach ($projects as $project)


               <tbody>
                <tr>
                    <td>
                       {{$project->id}}
                    </td>
                    <td>
                        <a>
                           {{$project->title}}
                        </a>
                        <br/>
                        <small>
                            {{$project->created_at}}
                        </small>
                    </td>
                    <td>
                     <p>
                         {{$project->disc}}
                     </p>
                    </td>
                    <td class="project_progress">
                        <div>
                        <img src="{{asset('assests/uploaded/images/'.$project->photo)}}" alt="">
                        </div>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('admin.portfolio.edit',$project)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                       
                        <form action="{{route('admin.portfolio.destroy', $project)}}" method="POST" style="display: inline-block" >
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger btn-sm">
                                  <i class="fas fa-trash">
                            </i> Delete</button>
                        </form>
                    </td>
                </tr>

            </tbody>

               @endforeach
               @endif

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
