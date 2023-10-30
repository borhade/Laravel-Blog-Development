@extends("layouts.admin")
@section("content")
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Create Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('tag.update',[$updateDetails->id])}}">
          @csrf
          @method("PUT")
          <div class="card-body">
            <div class="form-group">
              <label for="category_name">Tag name</label>
              <input type="text" class="form-control" name="tag_name" value="{{$updateDetails->name}}">
            </div>
            <div class="form-group">
              <label for="category_name">slug</label>
              <input type="text" class="form-control" name="tag_slug" value="{{$updateDetails->slug}}">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="tag_description" value="{{$updateDetails->description}}">
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
