<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advance Relations</title>
</head>
<body>
   <table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Country Name</th>
    </tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <tr>
    <li><?php echo e($user->name); ?></li>
    <li><?php echo e($user->email); ?></li>
    <li><?php echo e($user->country->country_name); ?></li>
   </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </table>
</body>
</html><?php /**PATH E:\Laravel\AdvanceRelation\resources\views/home.blade.php ENDPATH**/ ?>