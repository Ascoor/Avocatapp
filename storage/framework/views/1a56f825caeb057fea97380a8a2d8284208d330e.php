<?php $__env->startSection('title','Success'); ?>
<?php $__env->startSection('content'); ?>

    <section class="login_content">

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 style="float: none;">Success</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- <h1>Advocate Diary</h1> -->
                        <h2> System install successfully. </h2>
                        <p class="text-left">Now your system is install successfully on your server.now click on below login button with your credentials</p>
                        <div>
                            <a href="<?php echo e(url('/')); ?>" class="btn btn-default pull-right">Login Now</a>
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