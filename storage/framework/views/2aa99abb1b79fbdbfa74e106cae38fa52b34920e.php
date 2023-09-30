
<?php $__env->startSection("content"); ?>
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
        <form role="form" method="POST" action="<?php echo e(route('category.update',[$updatedata->id])); ?>">
          <?php echo csrf_field(); ?>
         <?php echo method_field("PUT"); ?>
          <div class="card-body">
            <div class="form-group">
              <label for="category_name">Category name</label>
              <input type="text" class="form-control" name="category_name" value="<?php echo e($updatedata['name']); ?>">
            </div>
            <div class="form-group">
              <label for="category_name">slug</label>
              <input type="text" class="form-control" name="slug" value="<?php echo e($updatedata['slug']); ?>">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description" value="<?php echo e($updatedata['description']); ?>">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-crud\curd-api\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>