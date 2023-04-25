@extends('backend.layout.master')
@section('content')
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
               
                <!-- /.card-header -->
                <!-- form start -->
                <form action={{route('blogs.store')}} method="POST" enctype="multipart/form-data">
                @csrf
                
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name">
                        @if($errors->has('name')) 
                            <span class="text-danger"> {{ $errors->first('name') }} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control" name="description">
                         @if($errors->has('description')) 
                            <span class="text-danger"> {{ $errors->first('description') }} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                         @if($errors->has('image')) 
                            <span class="text-danger"> {{ $errors->first('image') }} </span>
                        @endif
                      
                        </div>
                    </div>
                  
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>

            <!-- general form elements -->
@endsection