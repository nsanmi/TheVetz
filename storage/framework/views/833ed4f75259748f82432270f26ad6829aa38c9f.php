<div class="la-inner-pages dc-haslayout">
    <?php echo Form::open(['class' =>'dc-formtheme dc-userform', 'id' =>'homepage-seo-form', '@submit.prevent'=>'submitSeoSettings']); ?>

        <div class="dc-doctorlisting dc-tabsinfo">
            <div class="dc-tabscontenttitle">
                <h3><?php echo e(trans('lang.seo_settings')); ?></h3>
            </div>
            <div class="dc-sidepadding">
                <div class="dc-settingscontent">
                    <div class="dc-description"><p><?php echo e(trans('lang.seo_meta_title')); ?></p></div>
                    <div class="dc-formtheme dc-userform">
                        <fieldset>
                            <div class="form-group">
                                <?php echo Form::text('meta_title', e($meta_title), array('class' => 'form-control')); ?>

                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="dc-settingscontent">
                    <div class="dc-description"><p><?php echo e(trans('lang.seo_meta_desc')); ?></p></div>
                    <div class="dc-formtheme dc-userform">
                        <fieldset>
                            <div class="form-group">
                                <?php echo Form::textarea('meta_desc', e($meta_desc), array('class' => 'form-control')); ?>

                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <div class="dc-experienceaccordion">
            <div class="dc-updatall la-updateall-holder mb-5 mt-0">
                <?php echo Form::submit(trans('lang.btn_save'),['class' => 'dc-btn']); ?>

            </div>
        </div>
    <?php echo Form::close(); ?>

</div>
<?php /**PATH C:\xampp\htdocs\doctry\resources\views/back-end/admin/settings/home-page-settings/seo-settings.blade.php ENDPATH**/ ?>