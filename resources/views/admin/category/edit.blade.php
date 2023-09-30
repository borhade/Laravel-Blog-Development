@extends("layouts.admin")
@section("content")
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"> Create Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('category.update',[$updatedata->id])}}">
          @csrf
         @method("PUT")
          <div class="card-body">
            <div class="form-group">
              <label for="category_name">Category name</label>
              <input type="text" class="form-control" name="category_name" value="{{$updatedata['name']}}">
            </div>
            <div class="form-group">
              <label for="category_name">slug</label>
              <input type="text" class="form-control" name="slug" value="{{$updatedata['slug']}}">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description" value="{{$updatedata['description']}}">
            </div>
          
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
@endsection
