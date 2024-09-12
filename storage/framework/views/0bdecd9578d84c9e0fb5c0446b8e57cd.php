<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Admin Management</title>
</head>
<body>
<div class="container mt-5">
    <h2>Admin Management</h2>

    <!-- Logout Button -->
    <form action="<?php echo e(route('logout')); ?>" method="POST" class="mb-4">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

    <a href="<?php echo e(route('admin.create')); ?>" class="btn btn-success mb-3">Add Admin</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($admin->id); ?></td>
                <td><?php echo e($admin->username); ?></td>
                <td><?php echo e($admin->email); ?></td>
                <td>
                    <a href="<?php echo e(route('admin.edit', $admin)); ?>" class="btn btn-primary">Edit</a>
                    <form action="<?php echo e(route('admin.destroy', $admin)); ?>" method="POST" style="display: inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</body>
</html>
<?php /**PATH C:\laragon\www\user-management\resources\views/admin/index.blade.php ENDPATH**/ ?>