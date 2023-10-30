@extends("layouts.admin")
 @section("content") 
 <div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><a href="{{route('tag.create')}}" class="btn btn-sm bg-gradient-primary ">Add</a></h3>
      
      </div>
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 10px">Name</th>
              <th>Slug</th>
              <th>Description</th>
              <th style="width: 40px">Action</th>
            </tr>
          </thead>
          <tbody>
           
              @foreach($tagsDetails as $key=>$value)
                <tr>
                  <td>{{$value['name']}}</td>
                  <td>{{$value['slug']}}</td>
                  <td>{{$value['description']}}</td>
                  <td><a href="{{route('tag.edit',[$value['id']])}}" class="btn btn-sm bg-gradient-primary"><i class="fas fa-edit"></i></a>
                    <a href="delete_tag/{{$value['id']}}" class="btn btn-sm btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
                </tr>
             @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div> 
@endsection