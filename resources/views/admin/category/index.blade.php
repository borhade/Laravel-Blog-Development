@extends('layouts.admin')
    <!-- Main content -->
  @section("content")
  <div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>&nbsp;&nbsp;
            <a href="{{route('category.create')}}" class="btn btn-sm bg-gradient-primary "><i class="fas fa-edit"></i></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Post Count</th>
                <th style="width: 40px">Actions</th>
              </tr>
              </thead>
              <tbody>
                @if($category_details)
                  @foreach($category_details as $category_data)
                    <tr>
                      <td>{{$category_data['name']}}</td>
                      <td>{{$category_data['slug']}}</td>
                      <td>{{$category_data['description']}}</td>
                      <td><a href="{{route('category.edit',[$category_data->id])}}" class="btn btn-sm bg-gradient-primary "><i class="fas fa-edit"></i></a>
                        <a href="/delete_category/{{$category_data['id']}}" class="btn btn-sm btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
                    </tr>
                @endforeach
              @endif
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card-body -->
      
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection
   
