@extends('installer.app')
@section('title','Thank you')
@section('content')
    <section class="login_content">

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 style="float: none;">نظام إدارة مكتب محاماة</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                            {{ csrf_field() }}

                            <p> <h2> مرحباً بك في صفحة التنصيب</h2></p>
                            <p class="text-justify">نظام أفوكات هو نظام متكامل بل ومبدع في إدارة شئون القضايا والخدمات المقدمه لعملائك فمع كثرة الأعباء والإجراءات التي تتلبها طبيعة عمل المحامي تحتاج إلى مساعد ذكي يتيع المساعدة الجديه والتنبية بكافة الإجراءات  والجلسات بل والتذكير بمواعيد الطعون بل والمذكرات بخلاف الجانب المالي الذي يوفر فكر جديد في طريقة  تحصيل الأتعاب تساعد على تنظيم وترشيد النفقات ومعرفة حسابات كل عميل والتنبيه بالمطالبة ، نعدكم بتجربة ممتعة يمكن الإستفادة منها بشكل حقيقي </p>
                            <div>
                                <a href="{{route('check.requirements')}}" class="btn btn-default pull-left">
                                    التالى
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