<?php $__env->startSection('title'); ?><?php echo e(Helper::getUserName($user->id)); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('description', clean($user->profile->description)); ?>
<?php $__env->startPush('PackageStyle'); ?>
    <link href="<?php echo e(asset('css/prettyPhoto.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.pre-loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo Helper::displayBreadcrumbs('userProfile', $user); ?>

    <div class="dc-haslayout dc-main-section" id="user-profile">
        <div class="dc-preloader-section" v-if="loading" v-cloak>
            <div class="dc-preloader-holder">
                <div class="dc-loader"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="dc-twocolumns dc-haslayout">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 float-left">
                        <div class="dc-docsingle-header">
                            <figure class="dc-docsingleimg">
                                <img src="<?php echo e(asset(Helper::getImage('uploads/users/'.$user->id.'/', $user->profile->avatar, 'medium-', 'doc-single-def.jpg'))); ?>" alt="img description">
                            </figure>
                            <div class="dc-docsingle-content">
                                <div class="dc-title">
                                    <h2>
                                        <a href="javascript:void(0);">
                                            <?php echo e(!empty($gender_title) ? Helper::getDoctorArray(clean($gender_title)) : ''); ?> 
                                            <?php echo e(Helper::getUserName($user->id)); ?> 
                                        </a> 
                                        <?php echo e(Helper::verifyUser(clean($user->id), true)); ?>

                                        <?php echo e(Helper::verifyMedical(intVal(clean($user->id)), true)); ?> 
                                        
                                    </h2>
                                    <ul class="dc-docinfo">
                                        <li>
                                            <em><?php echo e(html_entity_decode(clean($user->profile->sub_heading))); ?></em>
                                        </li>
                                    </ul>
                                    <a href="javascrip:void(0);" class="<?php echo e((in_array($user->id, $saved_hospitals) ? 'dc-like dc-clicksave dc-btndisbaled' : 'dc-like')); ?>"
                                        id="hospital-<?php echo e($user->id); ?>" @click.prevent="add_wishlist('hospital-<?php echo e($user->id); ?>', '<?php echo e($user->id); ?>', 'saved_hospitals', '')">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                                <div class="dc-description">
                                    <p><?php echo e(html_entity_decode(clean($user->profile->description))); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="dc-docsingle-holder">
                            <ul class="dc-navdocsingletab nav navbar-nav">
                                <li class="nav-item">
                                    <a id="userdetails-tab" data-toggle="tab" href="#userdetails"><?php echo e(trans('lang.user_details')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a id="onboard-docs-tab" class="active" data-toggle="tab" href="#onboard-docs"><?php echo e(trans('lang.onboard_docs')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a id="consultation-tab" data-toggle="tab" href="#consultation"><?php echo e(trans('lang.online_consultation')); ?></a>
                                </li>
                            </ul>
                            <div class="tab-content dc-haslayout">
                                <div class="dc-contentdoctab dc-userdetails-holder tab-pane" id="userdetails">
                                    <div class="dc-aboutdoc dc-aboutinfo">
                                        <div class="dc-infotitle">
                                            <h3>
                                                <?php echo e(trans('lang.about')); ?> “<?php echo e(!empty($gender_title) ? Helper::getDoctorArray(clean($gender_title)) : ''); ?> <?php echo e(Helper::getUserName($user->id)); ?>”
                                            </h3>
                                        </div>
                                        <div class="dc-description"><p><?php echo e(html_entity_decode(clean($user->profile->short_desc))); ?></p></div>
                                    </div>
                                    <?php if(!empty($gallery_images)): ?>
                                        <div class="dc-aboutgallery-holder dc-aboutinfo">
                                            <div class="dc-infotitle">
                                                <h3><?php echo e(trans('lang.gallery')); ?></h3>
                                            </div>
                                            <div class="dc-aboutgallery">
                                                <div class="dc-aboutgallery-img">
                                                    <?php $__currentLoopData = $gallery_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <figure>
                                                            <a data-rel="prettyPhoto[video]" href="<?php echo e(asset('/uploads/users/'.$user->id.'/gallery/images/'.$gallery_image)); ?>" rel="prettyPhoto[video]">
                                                                <img src="<?php echo e(asset(Helper::getImage('uploads/users/'.$user->id.'/gallery/images/', $gallery_image, 'small-', ''))); ?>" alt="image description"><i class="ti-plus"></i>
                                                            </a>
                                                        </figure>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty($gallery_videos)): ?>
                                        <div class="dc-aboutgallery-video dc-aboutinfo">
                                            <div class="dc-infotitle">
                                                <h3>Gallery Videos</h3>
                                            </div>
                                            <div class="dc-aboutgallery">
                                                <div class="dc-aboutgallery-img">
                                                    <?php $__currentLoopData = $gallery_videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery_video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <figure>
                                                            <?php 
                                                                $width 	= 367;
                                                                $height 		= 206;
                                                                $url = parse_url($gallery_video['url']);
                                                                if ( isset( $url['host'] ) && ( $url['host'] == 'vimeo.com' || $url['host'] == 'player.vimeo.com' ) ) {
                                                                    $content_exp = explode("/", $media);
                                                                    $content_vimo = array_pop($content_exp);
                                                                    echo '<iframe width="' . intval($width) . '" height="' . intval($height) . '" src="https://player.vimeo.com/video/' . $content_vimo . '" 
                                                            ></iframe>';
                                                                } elseif ( isset( $url['host'] ) && $url['host'] == 'soundcloud.com') {
                                                                    $video = wp_oembed_get($media, array('height' => intval($height)));
                                                                    $search = array('webkitallowfullscreen', 'mozallowfullscreen', 'frameborder="no"', 'scrolling="no"');
                                                                    $video = str_replace($search, '', $video);
                                                                    echo str_replace('&', '&amp;', $video);
                                                                } else {
                                                                    echo '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.str_replace("v=", '', $url['query']).'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                                                                }
                                                            ?>
                                                        </figure>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php echo $__env->make('front-end.hospitals.profile-details.offered-services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="dc-contentdoctab dc-location-holder tab-pane show active" id="onboard-docs">
                                    <?php echo $__env->make('front-end.hospitals.profile-details.onboard-doctors.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="dc-contentdoctab dc-consultation-holder tab-pane" id="consultation">
                                    <?php echo $__env->make('front-end.hospitals.profile-details.consultation.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo $__env->make('front-end.hospitals.profile-details.share-profile.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-3 float-left">
                        <?php echo $__env->make('front-end.sidebar.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('front_end_scripts'); ?>
<script src="<?php echo e(asset('js/prettyPhoto.js')); ?>"></script>
    <script>
        jQuery("a[data-rel]").each(function () {
		jQuery(this).attr("rel", jQuery(this).data("rel"));
        });
        jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal',
            theme: 'dark_square',
            slideshow: 3000,
            default_width: 800,
            default_height: 500,
            allowfullscreen: true,
            autoplay_slideshow: false,	
            social_tools: false,
            iframe_markup: "<iframe src='{path}' width='{width}' height='{height}' frameborder='no' allowfullscreen='true'></iframe>", 
            deeplinking: false
        })
        jQuery(document).ready(function (){
            /* THEME ACCORDION */
        function themeAccordion() {
            jQuery('.dc-panelcontent').hide();
            jQuery('.dc-accordion .dc-paneltitle:first').addClass('active').next().slideDown('slow');
            jQuery('.dc-accordion .dc-paneltitle').on('click',function() {
                if(jQuery(this).next().is(':hidden')) {
                    jQuery('.dc-accordion .dc-paneltitle').removeClass('active').next().slideUp('slow');
                    jQuery(this).toggleClass('active').next().slideDown('slow');
                }
            });
        }
        themeAccordion();
        function childAccordion() {
            jQuery('.dc-subpanelcontent').hide();
            jQuery('.dc-childaccordion .dc-subpaneltitle:first').addClass('active').next().slideDown('slow');
            jQuery('.dc-childaccordion .dc-subpaneltitle').on('click',function() {
                if(jQuery(this).next().is(':hidden')) {
                    jQuery('.dc-childaccordion .dc-subpaneltitle').removeClass('active').next().slideUp('slow');
                    jQuery(this).toggleClass('active').next().slideDown('slow');
                }
            });
        }
        childAccordion();
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('front-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctry\resources\views/front-end/hospitals/show.blade.php ENDPATH**/ ?>