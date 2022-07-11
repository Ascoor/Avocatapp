@extends('installer.app')
@section('title','DB Information')
@push('css')
    <link href="{{asset('assets/css/install.css') }}" rel="stylesheet">
@endpush
@section('content')
    <section class="login_content">
        <form class="form-horizontal" id="installerForm" role="form" method="POST"
              action="{{ route('run.installer') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="float: none;">معلومات النظام </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            @if (session('status'))
                                <div class="alert alert-danger">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <span class="section pull-left">معلومات البرنامج</span>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">إسم البرنامج
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="app_name" name="app_name" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="app_url">عنوان الموقع <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="app_url" name="app_url" required="required"
                                           class="form-control">
                                </div>
                            </div>
                            <span class="section pull-left">معلومات قاعدة البيانات</span>
                            <!-- <div class="item form-group">
                               <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Upload SQL File <span class="required">*</span>
                               </label>
                               <div class="col-md-6 col-sm-6 ">
                               <input type="text" id="first-name" required="required" class="form-control ">
                               </div>
                               </div>
                                -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="db_host">إسم الخادم المحلي <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="db_host" name="db_host" required="required"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="db_port">منفذ قاعدة البيانات
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="db_port" name="db_port" required="required"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="db_database">إسم قاعدة البيانات <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="db_database" name="db_database" required="required"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="db_username">إسم المستخدم  بقاعدة البيانات<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="db_username" name="db_username" required="required"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="db_password">كلمة مرور قاعدة البيانات <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="db_password" name="db_password" class="form-control">
                                </div>
                            </div>
                            <span class="section pull-left">بيانات المسؤل</span>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_name">الإسم <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="user_name" name="user_name" required="required"
                                           class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_email">الإميل <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="user_email" name="user_email" required="required"
                                           class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_pwd">كلمة المرور
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="password" id="user_pwd" name="user_pwd" required="required"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_cpwd">أعد كتابة كلمة المرور <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="password" id="user_cpwd" name="user_cpwd" required="required"
                                           class="form-control">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default pull-right" id="show_loader">
                                  أبدأ التصيب
                                </button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <!--  <p class="change_link">New to site?
                                   <a href="#signup" class="to_register"> Create Account </a>
                                   </p> -->
                                <div class="clearfix"></div>
                                <br/>
                                <div>
                <center>
                  <h1><i class="fa fa-gavel type=submit"></i>A V O C A T</h1>
                  <p>©2022 جميع الحقوق محفوظة لدي مكتب أفوكات للمحاماة</p>
                </center>
              </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
@push('js')
    <script src="{{asset('assets/admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/install-validation.js') }}"></script>
@endpush