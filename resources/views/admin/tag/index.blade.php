@extends("layouts.admin")
 @section("content") 
 <div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 10px">row no</th>
              <th>Name</th>
              <th>Slug</th>
              <th style="width: 40px">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Name</td>
              <td>Slug</td>
              <td>Action</td>
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
</div> 
@endsection