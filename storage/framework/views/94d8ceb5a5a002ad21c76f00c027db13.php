<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/dist/bootstrap-5.2.3/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <title>Students</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Students</h2>
                    <a href="<?php echo e(route('student_create')); ?>" class="btn btn-success">Add Student</a>
                </div>
                <p>Good All Day!!</p>

                <!-- Student List -->
                <div class="list-group">
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="list-group-item" href="<?php echo e(route('student_show', ['id' => $student['id']])); ?>"><?php echo e($student['first_name']); ?> <?php echo e($student['last_name']); ?></a>
                        </a>
                       <td> <a href="edit_record/<?php echo e($student->id); ?>" class="btn btn-primary">Edit</a>  </td> 
                       <td> <a href="delete_record/<?php echo e($student->id); ?>" class="btn btn-danger">Delete</a> </td>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-demo-2023-10-08-master\laravel-demo-2023-10-08-master\resources\views/student/index.blade.php ENDPATH**/ ?>