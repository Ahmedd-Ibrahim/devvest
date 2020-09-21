@extends('admin.layout.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Testimonails</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Testimonails
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
            <h3 class="card-title">Testimonails</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped testys text-center">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Name
                        </th>
                        <th style="width: 30%">
                            The commet
                        </th>
                        <th>
                        Avater
                        </th>
                        <th style="width: 8%" class="text-center">
                            Job title
                        </th>
                        <th style="width: 20%">
                            status
                        </th>
                    </tr>
                </thead>
               @if (isset($testimony) && count($testimony) > 0)
               @foreach ($testimony as $testy)
               <tbody>
                <tr>
                    <td>
                       {{$testy->id}}
                    </td>
                    <td>

                            {{$testy->name}}

                    </td>
                    <td>
                     <p>
                         {{$testy->comment}}
                     </p>
                    </td>
                    <td id="avater" class="testy_progress">
                        <div>
                        <img src="{{asset('assests/uploaded/images/'.$testy->avater)}}" alt="">
                        </div>
                    </td>
                    <td class="testy-state">
                    <span class="badge badge-success">{{$testy->job_title}}</span>
                    </td>
                    <td class="testy-actions text-right">
                        <a class="btn btn-info btn-sm" href="{{route('admin.testimony.edit',$testy)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <form action="{{route('admin.testimony.destroy', $testy)}}" method="POST" style="display: inline-block" >
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
