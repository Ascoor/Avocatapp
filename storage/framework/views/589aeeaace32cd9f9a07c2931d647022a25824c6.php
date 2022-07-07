<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-left">

                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                       aria-expanded="false">
                        <?php if(Auth::guard('admin')->user()): ?>
                            <?php if(Auth::guard('admin')->user()->profile_img!=""): ?>
                                <img
                                    src='<?php echo e(asset('public/'.config('constants.CLIENT_FOLDER_PATH') .'/'. Auth::guard('admin')->user()->profile_img)); ?>'>
                            <?php else: ?>
                                <img src="<?php echo e(asset('public/upload/user-icon-placeholder.png')); ?>" width='50px' height='40px'>

                            <?php endif; ?>
                        <?php endif; ?>
                        <?php echo e(Auth::guard('admin')->user()->first_name.' '.Auth::guard('admin')->user()->last_name); ?>

                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="<?php echo e(url('admin/admin-profile')); ?>"> <i
                                    class="fa fa-user"></i>&nbsp;&nbsp;Profile</a></li>


                        <li><a href="<?php echo e(url('/admin/logout')); ?>"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i
                                    class="fa fa-sign-out"></i> Log Out</a>
                            <form id="logout-form" action="<?php echo e(url('/admin/logout')); ?>" method="POST"
                                  style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                    </ul>
                </li>

                <?php if($adminHasPermition->can(['case_list']) =="1"): ?>
                    <?php echo App\Helpers\LogActivity::generateTasks(); ?>

                    <?php echo App\Helpers\LogActivity::getNotifications(); ?>

                <?php endif; ?>


            </ul>
        </nav>
    </div>
</div>
