@extends('backend.layout.master')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $val)
                  <tr>
                    <td>{{$val->id}}</td>
                    <td>{{$val->name}}</td>
                    <td>{{$val->description}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
         </div>
    </div>
    </section>
@endsection