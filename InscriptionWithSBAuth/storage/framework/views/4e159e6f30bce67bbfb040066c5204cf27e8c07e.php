

<?php $__env->startSection('content'); ?>
    <h1>Listes des utilisateur enregistrer : </h1>
    <ul>
        <?php foreach($users as $user): ?>
            <li>
                <div class="">
                    <h3 class="text-info"><?php echo e($user->name); ?> <small>Addresse Email : <?php echo e($user->email); ?></small></h3>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>