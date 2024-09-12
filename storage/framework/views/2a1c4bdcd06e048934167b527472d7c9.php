<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit Admin</title>
</head>
<body>
<div class="container mt-5">
    <h2>Edit Admin</h2>

    <!-- Display Validation Errors -->
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.update', $admin)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control" value="<?php echo e(old('username', $admin->username)); ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo e(old('email', $admin->email)); ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password (Leave blank to keep current password)</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update Admin</button>
    </form>

    <a href="<?php echo e(route('admin.index')); ?>" class="btn btn-secondary mt-3">Back to List</a>
</div>
</body>
</html>
<?php /**PATH C:\laragon\www\user-management\resources\views/admin/edit.blade.php ENDPATH**/ ?>