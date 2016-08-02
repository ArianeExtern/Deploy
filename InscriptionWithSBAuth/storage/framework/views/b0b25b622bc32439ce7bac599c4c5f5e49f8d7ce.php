

<?php $__env->startSection('content'); ?>

<div class="panel panel-info">
	  <div class="panel-heading">
			<h3 class="panel-title text-center"><b>S'enregistrer !</b></h3>
	  </div>
	  <div class="panel-body">
        <div class="login">
            <div class="heading">
                <form method="post" action="auth/register">
                    <!-- Affichage de l'erreur lors de l'interaction avec la base de données. -->
                    <?php if(count($errors) and count($errors->get('dbError'))): ?>
                        <span class="text-danger"><?php echo e($errors->get('dbError')[0]); ?></span>
                    <?php endif; ?>


                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Nom..." name="name" value="<?php echo e(Request::old('name')); ?>">
                        </div>

                        <!--Affichage du message d'erreurs password1-->
                        <?php if(count($errors) > 0 and count($errors->get('name'))): ?>
                            <span class="text-danger"><?php echo e($errors->get('name')[0]); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <input type="email" class="form-control" placeholder="Email..." name="email" value="<?php echo e(Request::old('email')); ?>" />
                        </div>

                        <!--Affichage du message d'erreurs password1-->
                        <?php if(count($errors) > 0 and count($errors->get('email'))): ?>
                            <span class="text-danger"><?php echo e($errors->get('email')[0]); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Mot de passe..." name="password">
                        </div>

                        <!--Affichage du message d'erreurs password1-->
                        <?php if(count($errors) > 0 and count($errors->get('password'))): ?>
                            <span class="text-danger"><?php echo e($errors->get('password')[0]); ?></span>
                        <?php endif; ?>

                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Ressaisir le mot de passe..." name="password1">
                        </div>

                        <!--Affichage du message d'erreurs password1-->
                        <?php if(count($errors) > 0 and count($errors->get('password1'))): ?>
                            <span class="text-danger"><?php echo e($errors->get('password1')[0]); ?></span>
                        <?php endif; ?>

                    </div>
                    <div class="form-group pull-right">
                        <!--<a href="/login" class="btn btn-primary"><b>Log in</b></a>-->
                        <button type="submit"  class="btn btn-warning"><b>Sauvegarder</b></button>
                        <a href="/" class="btn btn-danger"><b>Annuler</b></a>
                    </div>

                </form>
            </div>
        </div>
	  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>