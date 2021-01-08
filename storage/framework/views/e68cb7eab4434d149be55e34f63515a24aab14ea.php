<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.pre-loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="dc-haslayout dc-jobpostedholder dc-dbsectionspace">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="dc-insightsitem dc-dashboardbox">
                    <figure class="dc-userlistingimg">
                        <?php echo e(Helper::getDashboardImages('uploads/settings/icon', $hidden_saved_item, 'heart')); ?>

                    </figure>
                    <div class="dc-insightdetails">
                        <div class="dc-title">
                            <h3><?php echo e(trans('lang.view_saved_items')); ?></h3>
                            <a href="<?php echo e(route('getSavedItems', Helper::getAuthRoleType(Auth::user()->id))); ?>"><?php echo e(trans('lang.click_view')); ?></a>
                        </div>													
                    </div>	
                </div>
            </div>																	
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="dc-insightsitem dc-dashboardbox">
                    <figure class="dc-userlistingimg">
                        <?php echo e(Helper::getDashboardImages('uploads/settings/icon', $hidden_manage_teams, 'users')); ?>

                    </figure>
                    <div class="dc-insightdetails">
                        <div class="dc-title">
                            <h3><?php echo e(trans('lang.manage_teams')); ?></h3>
                            <a href="<?php echo e(route('manageTeams')); ?>"><?php echo e(trans('lang.click_view')); ?></a>
                        </div>													
                    </div>	
                </div>
            </div>																																	
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctry\resources\views/back-end/hospitals/dashboard.blade.php ENDPATH**/ ?>