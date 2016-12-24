@extends('layouts.backend')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-push-2">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Create Pages</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="another">Password</label>
              <input type="text" name="another" class="form-control" id="another" placeholder="Another">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <div class="col-md-4 col-md-push-8">
              <button type="submit" class="btn btn-primary btn-block pull-right">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (right) -->
  </div>
@endsection