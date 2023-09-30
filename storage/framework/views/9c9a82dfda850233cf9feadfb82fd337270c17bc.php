<!DOCTYPE HTML>
<html>  
<body>

<form action="/update" method="POST">
<?php echo csrf_field(); ?>
Name:<input type="text" name="name" value="<?php echo e($memberResult['name']); ?>"><br>
<input type="hidden" name="id" value="<?php echo e($memberResult['id']); ?>">
E-mail:<input type="text" name="email" value="<?php echo e($memberResult['email']); ?>"><br>
Address:<input type="text" name="address" value ="<?php echo e($memberResult['address']); ?>"><br>
<button type="submit">Submit</button>
</form>
</body>
</html><?php /**PATH D:\laravel-crud\curd-api\resources\views/edit.blade.php ENDPATH**/ ?>