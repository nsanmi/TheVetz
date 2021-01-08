<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.pre-loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9" id="account_settings">
            <div class="dc-preloader-section" v-if="is_loading" v-cloak>
                <div class="dc-preloader-holder">
                    <div class="dc-loader"></div>
                </div>
            </div>
            <div class="dc-dashboardbox dc-dashboardtabsholder">
                <div class="dc-dashboardboxtitle">
                    <h2><?php echo e(trans('lang.add_new_user')); ?></h2>
                </div>
                <div class="dc-dashboardtabs">
                    <ul class="dc-tabstitle nav navbar-nav">
                        <li class="nav-item">
                            <a class="active show" data-toggle="tab" href="#dc-skills"><?php echo e(trans('lang.new_user')); ?></a>
                        </li>
                    </ul>
                </div>
                <div class="dc-tabscontent tab-content">
                    <div class="dc-personalskillshold tab-pane active fade show" id="dc-skills">
                        <?php echo Form::open(['url' => '', 'class' =>'dc-formtheme', 'id' =>'create-user-details', '@submit.prevent'=>'createUser']); ?>

                            <div class="dc-yourdetails dc-tabsinfo">
                                <div class="dc-tabscontenttitle">
                                    <h3> <?php echo e(trans('lang.user_detail')); ?> </h3>
                                </div>
                                <div class="dc-formtheme dc-userform">
                                    <fieldset>
                                        <div class="form-group form-group-half">
                                            <?php echo Form::text( 'first_name', null, ['class' =>'form-control', 'placeholder' => trans('lang.ph.first_name')] ); ?>

                                        </div>
                                        <div class="form-group form-group-half">
                                            <?php echo Form::text( 'last_name', null, ['class' =>'form-control', 'placeholder' => trans('lang.ph.last_name')] ); ?>

                                        </div>
                                        <div class="form-group form-group-half">
                                            <?php echo Form::email( 'email', null, ['class' =>'form-control', 'placeholder' => trans('lang.ph.email')] ); ?>

                                        </div>
                                        <div class="form-group form-group-half">
                                            <?php echo Form::password('password', ['class' => 'form-control','placeholder' => trans('lang.ph.newpass')]); ?>

                                        </div>
                                        <div class="form-group">
                                            <?php if(!empty($roles)): ?>
                                                <ul class="dc-startoption">
                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(!in_array($role['id'] == 1, $roles)): ?>
                                                            <li>
                                                                <span class="dc-radio">
                                                                    <input id="dc-company-<?php echo e($key); ?>" type="radio" name="role" value="<?php echo e($role['role_type']); ?>">
                                                                    <label for="dc-company-<?php echo e($key); ?>"><?php echo e($role['name']); ?></label>
                                                                </span>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group dc-btnarea"><?php echo Form::submit(trans('lang.btn_save'), ['class' => 'dc-btn']); ?></div>
                                    </fieldset>
                                </div>
                            </div>
                        <?php echo Form::close();; ?>

                    </div>    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctry\resources\views/back-end/admin/users/create/index.blade.php ENDPATH**/ ?>