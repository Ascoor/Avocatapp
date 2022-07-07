<?php $__env->startSection('title','Thank you'); ?>
<?php $__env->startSection('content'); ?>
    <section class="login_content">

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 style="float: none;">Thank you for purchase</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/admin/login')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <h2> Welcome to setup wizard </h2>
                            <p class="text-left">Thanks you for purchasing LawOffice,LawOffice System Is A Web Based Application For Advocates And Law Firm To Maintain Their Office. This Software Is Very Easy To Operate And Light On System Tool To Maintain Information About Clients, Cases, Hearings Etc.</p>
                            <div>
                                <a href="<?php echo e(route('check.requirements')); ?>" class="btn btn-default pull-right">
                                    Next
                                </a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">

                                <div class="clearfix"></div>
                                <br/>

                                <div>

                                    <p>©2019 All Rights Reserved. LawOffice</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('installer.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>