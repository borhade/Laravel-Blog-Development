<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">        
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>email</th>
        <th>Address</th>
        <th>Action</th>
  
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <td><?php echo e($member["name"]); ?></td>
          <td><?php echo e($member["email"]); ?></td>
          <td><?php echo e($member["address"]); ?></td>
          <td><a href='<?php echo e("delete/".$member["id"]); ?>'>Delete</a>|<a href='<?php echo e("edit/".$member["id"]); ?>'>Edit</a></td>
      </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>

</body>
</html>
<?php /**PATH D:\laravel-crud\curd-api\resources\views/userlist.blade.php ENDPATH**/ ?>