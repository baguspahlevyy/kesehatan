<?php $__env->startSection('content'); ?>
 
                        

<form id="zarvi" class="login100-form zarvi validate-form" method="POST" action="<?php echo e(route('login')); ?>">
<?php echo csrf_field(); ?>


                   
                    <span class="login100-form-title p-b-34 p-t-27">
                        <img src="<?php echo e(asset('images/indomaret.png')); ?>" alt="" class="img-responsive" width="250" />
                    </span>
                    <hr/>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text"  placeholder="Username" class="form-control <?php echo e($errors->has('username') || $errors->has('email') ? ' is-invalid' : ''); ?>" name="login" value="<?php echo e(old('username') ?: old('email')); ?>" required >

                        <span class="focus-input100" data-placeholder="&#xf207;"></span> 

                    </div>
                      <?php if($errors->has('username') || $errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('username') ?: $errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100  <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" type="password" name="password" placeholder="Password">

                                <span class="focus-input100" data-placeholder="&#xf191;"></span> 
                    </div>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?> 

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
 
                </form>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kesehatan/zarvisystem/resources/views/auth/login.blade.php ENDPATH**/ ?>