<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/dist/bootstrap-5.2.3/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <title>
        Student:
        <?php if($student): ?>
            <?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?>

        <?php else: ?>
            Not Found
        <?php endif; ?>
    </title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php if($student): ?>
                    <!-- Valid Student -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Student: <span class="text-success"><?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?></span></h2>
                        <a href="<?php echo e(route('student_index')); ?>" class="btn btn-outline-success">All Students</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus fuga, illo nesciunt quas rem soluta.</p>
                    <table class="table table-hover table-student-info">
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td><?php echo e($student->id); ?></td>
                            </tr>
                            <tr>
                                <td>First name</td>
                                <td><?php echo e($student->first_name); ?></td>
                            </tr>
                            <tr>
                                <td>Last name</td>
                                <td><?php echo e($student->last_name); ?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <?php if($student->is_male): ?>
                                        <span>Male</span>
                                    <?php else: ?>
                                        <span>Female</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php else: ?>
                    <!-- Invalid Student -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2 class="text-danger">Student Not Found</h2>
                        <a href="<?php echo e(route('student_index')); ?>" class="btn btn-outline-success">All Students</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-demo-2023-10-08-master\laravel-demo-2023-10-08-master\resources\views/student/show.blade.php ENDPATH**/ ?>