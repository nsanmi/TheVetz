<div class="dc-searchresult-holder">
    <div class="dc-searchresult-head">
        <div class="dc-title"><h4><?php echo e(trans('lang.all_onboard_docs')); ?></h4></div>
    </div>
    <?php if(!empty($user->approvedTeams) && $user->approvedTeams->count() > 0): ?>
        <div class="dc-searchresult-grid dc-searchresult-list dc-searchvlistvtwo">
            <?php $__currentLoopData = $user->approvedTeams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $slots = unserialize($doctor->slots);
                    $doctor_obj = App\User::find($doctor->doctor_id);
                    $services = !empty($slots['services']) ? $slots['services'] : array();
                    $appointment_days = !empty($slots['days']) ? $slots['days'] : array();
                    $specialities = $doctor_obj->services->count() > 0 ? DB::table('user_service')->select('speciality')
                        ->where('user_id', $doctor_obj->id)->groupBy('speciality')->get()->pluck('speciality')->random(1)->toArray() : '';
                    $avg_rating = \App\Feedback::where('user_id', $doctor_obj->id)->pluck('avg_rating')->first();
                    $stars  = $avg_rating != 0 ? $avg_rating/5*100 : 0;
                    
                ?>
                <?php if(Helper::getRoleTypeByUserID($doctor_obj->id) == 'doctor'): ?>
                    <div class="dc-docpostholder">
                        <div class="dc-docpostcontent">
                            <div class="dc-searchvtwo">
                                <figure class="dc-docpostimg">
                                    <img src="<?php echo e(asset(Helper::getImage('uploads/users/'.$doctor_obj->id, $doctor_obj->profile->avatar, 'small-', 'user.jpg'))); ?>" alt="<?php echo e(trans('lang.img_desc')); ?>">
                                </figure>
                                <div class="dc-title">
                                    <?php if(!empty($specialities)): ?>
                                        <?php $__currentLoopData = $specialities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user_speciality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $speciality = Helper::getSpecialityByID($user_speciality); ?>
                                            <?php if(!empty($speciality)): ?>
                                                <a href="<?php echo e(url('/search-results?speciality='.clean($speciality->slug))); ?>" class="dc-docstatus"><?php echo e(html_entity_decode(clean($speciality->title))); ?></a>  
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    <h3>
                                        <a href="<?php echo e(route('userProfile', ['slug' => clean($doctor_obj->slug)])); ?>">
                                            <?php echo e(!empty($doctor_obj->profile->gender_title) ? Helper::getDoctorArray($doctor_obj->profile->gender_title) : ''); ?> 
                                            <?php echo e(Helper::getUserName($doctor_obj->id)); ?> 
                                        </a>
                                        <?php echo e(Helper::verifyUser(clean($doctor_obj->id), true)); ?>

                                        <?php echo e(Helper::verifyMedical(clean($doctor_obj->id), true)); ?> 
                                    </h3>
                                    <ul class="dc-docinfo">
                                        <li><em><?php echo e(html_entity_decode(clean($doctor_obj->profile->sub_heading))); ?></em></li>
                                        <li>
                                            <span class="dc-stars">
                                                <span style="width: <?php echo e(clean($stars)); ?>%;"></span>
                                            </span>
                                            <em><?php echo e(clean($doctor_obj->feedbacks->count())); ?> <?php echo e(trans('lang.feedbacks')); ?></em>
                                        </li>
                                    </ul>
                                </div>
                                <?php if($doctor_obj->services->count() > 0): ?>
                                    <div class="dc-tags">
                                        <ul>
                                            <?php $__currentLoopData = $doctor_obj->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($key <= 4): ?>
                                                    <li>
                                                        <a href="javascript:void(0);"><?php echo e(html_entity_decode(clean($service->title))); ?></a>
                                                    </li> 
                                                <?php else: ?>
                                                    <li style="display:none">
                                                        <a href="javascript:void(0);"><?php echo e(html_entity_decode(clean($service->title))); ?></a>
                                                    </li>    
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($doctor_obj->services->count() >= 6): ?>
                                                <li class="dc-viewall-services">
                                                    <a href="javascript:;" id="view-service-<?php echo e($doctor_obj->id); ?>" class="dc-tagviewall" v-on:click="displayServices('view-service-<?php echo e($doctor_obj->id); ?>')"><?php echo e(trans('lang.view_all')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="dc-doclocation dc-doclocationvtwo">
                                <?php if(!empty($doctor_obj->location->title)): ?>
                                    <span><i class="ti-direction-alt"></i> <?php echo e(html_entity_decode(clean($doctor_obj->location->title)) ?? ''); ?></span>
                                <?php endif; ?>
                                <span>
                                    <?php if(!empty($appointment_days)): ?>
                                        <span><i class="ti-calendar"></i>
                                            <?php $__currentLoopData = Helper::getAppointmentDays(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(!in_array($key, $appointment_days)): ?>
                                                    <em class="dc-dayon"><?php echo e(html_entity_decode(clean($day['title']))); ?></em>
                                                <?php else: ?>
                                                    <?php echo e(html_entity_decode(clean($day['title']))); ?>,
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </span>
                                    <?php endif; ?>
                                </span>
                                <span><i class="ti-thumb-up"></i><?php echo e(empty($doctor_obj->profile->votes) ? 0 : clean($doctor_obj->profile->votes)); ?> <?php echo e(trans('lang.votes')); ?></span>
                                <span><i class="ti-wallet"></i> <?php echo e(trans('lang.starting_from')); ?> $<?php echo e(clean($doctor_obj->profile->starting_price) ?? ''); ?></span>
                                <span><i class="ti-clipboard"></i> <em class="dc-available">
                                    <?php echo e(in_array(strtolower(Carbon\Carbon::now()->format('D')), $appointment_days)
                                    ? trans('lang.available_today') : trans('lang.not_available_today')); ?></em></span>
                                <div class="dc-btnarea">
                                    <a href="<?php echo e(url('profile/'.$doctor_obj->slug)); ?>" class="dc-btn"><?php echo e(trans('lang.view_more')); ?></a>
                                    <?php if(in_array($doctor_obj->id, $saved_doctors)): ?>
                                        <a href="javascrip:void(0);" class="dc-like dc-clicksave dc-btndisbaled">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    <?php else: ?>
                                        <a href="javascrip:void(0);" class="dc-like" id="doctor-<?php echo e($doctor_obj->id); ?>" @click.prevent="add_wishlist('doctor-<?php echo e($doctor_obj->id); ?>', '<?php echo e($doctor_obj->id); ?>', 'saved_doctors', '')" v-cloak>
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <?php echo $__env->make('errors.no-record', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\doctry\resources\views/front-end/hospitals/profile-details/onboard-doctors/index.blade.php ENDPATH**/ ?>