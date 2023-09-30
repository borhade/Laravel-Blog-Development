
    <!-- Main content -->
  <?php $__env->startSection("content"); ?>
  <div class="row">
    <div class="col-12">
    
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>&nbsp;&nbsp;
            <a href="<?php echo e(route('category.create')); ?>" class="btn btn-sm bg-gradient-primary "><i class="fas fa-edit"></i></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Post Count</th>
                <th style="width: 40px">Action</th>
              </tr>
              </thead>
              <tbody>
                <?php if($category_details): ?>
                <?php $__currentLoopData = $category_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($category_data['name']); ?></td>
                <td><?php echo e($category_data['slug']); ?></td>
                <td><?php echo e($category_data['description']); ?></td>
                <td><a href="<?php echo e(route('category.edit',[$category_data->id])); ?>" class="btn btn-sm bg-gradient-primary "><i class="fas fa-edit"></i></a>
                  <a href="/delete_category/<?php echo e($category_data['id']); ?>" class="btn btn-sm btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
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
<?php $__env->stopSection(); ?>
   

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-crud\crud-api\resources\views/admin/category/index.blade.php ENDPATH**/ ?>