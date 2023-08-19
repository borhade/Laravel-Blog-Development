@extends('layouts.admin')
    <!-- Main content -->
  @section("content")
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Post Counnt</th>
                <th style="width: 40px">Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Gecko</td>
                <td>Mozilla 1.3</td>
                <td>Win 95+ / OSX.1+</td>
                <td><a href="button" class="btn btn-block bg-gradient-primary btn-sm"><i class="fas fa-edit"></i></a>
                  <a href="button" class="btn btn-block bg-gradient-primary  btn-sm"><i class="fas fa-edit"></i></a></td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection
   
