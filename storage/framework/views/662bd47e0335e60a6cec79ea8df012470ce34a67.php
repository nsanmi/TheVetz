<?php echo Form::open(['url' => '', 'class' =>'dc-formtheme', 'id' =>'submit-personal-details', '@submit.prevent'=>'submitPersonalDetails("'.$user_role.'")']); ?>

    <?php echo $__env->make('back-end.admin.profile-settings.personal-detail.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <?php echo $__env->make('back-end.admin.profile-settings.personal-detail.media', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="dc-experienceaccordion">
        <div class="dc-updatall la-updateall-holder">
            <?php echo Form::submit(trans('lang.btn_save'), ['class' => 'dc-btn']); ?>

        </div>
    </div>
<?php echo Form::close();; ?><?php /**PATH C:\xampp\htdocs\doctry\resources\views/back-end/admin/profile-settings/personal-detail/index.blade.php ENDPATH**/ ?>