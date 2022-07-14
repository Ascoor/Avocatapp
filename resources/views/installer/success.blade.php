@extends('installer.app')
@section('title','Success')
@section('content')

    <section class="login_content">

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 style="float: none;">تم التنصيب بنجاح</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- <h1>Advocate Diary</h1> -->
                        <h2>يمكنك الأن البدأ في العمل </h2>
                        <p class="text-right">تم تحميل النظام على السيرفر الخاص بك تسطتيع تسجيل الدخول وبدأ  العمل الأن</p>
                        <div>
                            <a href="{{url('/')}}" class="btn btn-default pull-left">تسجيل الدخول</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">

                            <div class="clearfix"></div>
                            <br/>

                            <center>
                  <h1><i class="fa fa-gavel type=submit"></i>A V O C A T</h1>
                  <p>©2022 جميع الحقوق محفوظة لدي مكتب أفوكات للمحاماة</p>
                </center>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection