@extends('installer.app')
@section('title','Thank you')
@section('content')
    <section class="login_content">

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 style="float: none;">شكراً لإستخدام نظام أفوكات</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                            {{ csrf_field() }}

                            <h2> مرحباً بك في صفحةالتنصيب</h2>
                            <p class="text-right">نظام أفوكات هو نظام متكامل بل ومبدع  في إدارة شئون القضايا والخدمات المقدمه لعملائك فمع كثرة الأعباء والإجراءات  التي تتلبهابيعةعمل المحامي تحتا إلى ماعد ذكي يتيع الماعدة الجديه والتنبية بكافة الإجراءات  والجلسات بل والتذكير بمواعيد العون بل والمذكرات بخلاف الجانب المالي الذي يوفر فكر جديدفي طريقة  تحصيل الأعاب تاعد على تنظيموترشيد النفقات ومعرفة حسابات كل عميل والتنبيه بالمطالبة تعدكم بتجربة ممتعة يمكن الإتفادة منها بشكل حقيقي </p>
                            <div>
                                <a href="{{route('check.requirements')}}" class="btn btn-default pull-right">
                                    Next
                                </a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">

                                <div class="clearfix"></div>
                                <br/>

                                <div>
                <center>
                  <h1><i class="fa fa-gavel type=submit"></i>A V O C A T</h1>
                  <p>©2022 جميع الحقوق محفوظة لدي مكتب أفوكات للمحاماة</p>
                </center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection