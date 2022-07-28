<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">

        <ul class="nav side-menu">
            @if($adminHasPermition->can(['dashboard_list'])=="1")
                <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-tachometer"></i> لوحة التحكم</a></li>
            @endif

            @if($adminHasPermition->can(['client_list']) =="1")
                <li><a href="{{ route('clients.index') }}"><i class="fa fa-user-plus"></i> الموكلين</a></li>
            @endif

            @if($adminHasPermition->can(['case_list']) =="1")
                <li><a href="{{ route('case-running.index') }}"><i class="fa fa-gavel"></i> القضايا</a></li>

            @endif
            @if($adminHasPermition->can(['task_list']) =="1")
                <li><a href="{{ route('tasks.index') }}"><i class="fa fa-tasks"></i> الإجراءات</a></li>
            @endif


            @if($adminHasPermition->can(['appointment_list']) =="1")
                <li><a href="{{ route('appointment.index') }}"><i class="fa fa-calendar-plus-o"></i> المواعيد</a>
                </li>
                <li><a><i class="fa fa-users"></i>محكمة النقض<span class="fa fa-chevron-down"></span></a>

            @endif
            @if(\Auth::guard('admin')->user()->user_type=="Admin")
                <li><a><i class="fa fa-users"></i> أعضاء المكتب <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ url('admin/client_user') }}"> فريق العمل</a></li>
                        <li><a href="{{ route('role.index') }}">الصلاحيات</a></li>

                    </ul>
                </li>
            @endif
            @if($adminHasPermition->can(['service_list']) == "1" || $adminHasPermition->can(['invoice_list'])=="1")
                <li><a><i class="fa fa-money"></i> الإيرادات <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        @if($adminHasPermition->can(['service_list']) == "1")
                            <li><a href="{{ url('admin/service') }}">الخدمات وتسعيرها</a></li>
                        @endif

                        @if($adminHasPermition->can(['invoice_list']) == "1")
                            <li><a href="{{ url('admin/invoice') }}">كشف حساب موكل</a>
                        @endif


                    </ul>
                </li>
            @endif
            @if($adminHasPermition->can(['vendor_list']) =="1")
                <li><a href="{{ route('vendor.index') }}"><i class="fa fa-user-plus"></i> الموردين</a></li>
            @endif

            @if($adminHasPermition->can(['expense_type_list'])=="1" || $adminHasPermition->can(['expense_list'])=="1")
                <li><a><i class="fa fa-money"></i> المصروفات <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                        @if($adminHasPermition->can(['expense_type_list']) =="1")
                            <li><a href="{{ url('admin/expense-type') }}">أنواع المصروفات</a></li>
                        @endif


                        @if($adminHasPermition->can(['expense_list']) =="1")
                            <li><a href="{{ url('admin/expense') }}">إضافة مصروف</a></li>
                        @endif

                    </ul>
                </li>

            @endif


            @if($adminHasPermition->can(['case_type_list'])=="1"
            || $adminHasPermition->can(['court_type_list'])=="1"
            || $adminHasPermition->can(['court_list'])=="1"
            || $adminHasPermition->can(['case_status_list'])=="1"
            || $adminHasPermition->can(['judge_list'])=="1"
            || $adminHasPermition->can(['tax_list'])=="1"
            || $adminHasPermition->can(['general_setting_edit'])=="1")
                <li><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                        @if($adminHasPermition->can(['case_type_list']) == "1")
                            <li><a href="{{ url('admin/case-type') }}">Case Type</a></li>
                        @endif

                        @if($adminHasPermition->can(['court_type_list']) == "1")
                            <li><a href="{{ url('admin/court-type') }}">Court Type</a></li>
                        @endif

                        @if($adminHasPermition->can(['court_list']) == "1")
                            <li><a href="{{ url('admin/court') }}">Court</a></li>
                        @endif

                        @if($adminHasPermition->can(['case_status_list']) == "1")
                            <li><a href="{{ url('admin/case-status') }}">Case Status</a></li>
                        @endif

                        @if($adminHasPermition->can(['judge_list']) == "1")
                            <li><a href="{{ url('admin/judge') }}">Judge</a></li>
                        @endif

                        @if($adminHasPermition->can(['tax_list']) == "1")
                            <li><a href="{{ url('admin/tax') }}">Tax</a></li>
                        @endif


                        @if($adminHasPermition->can(['general_setting_edit']) == "1")
                            <li><a href="{{ url('admin/general-setting') }}">General Setting</a></li>
                        @endif
                        @if(\Auth::guard('admin')->user()->user_type=="Admin")
                            <li><a href="{{ url('admin/database-backup') }}">Database Backup</a></li>
                        @endif

                    </ul>
                </li>
            @endif

        </ul>
    </div>
</div>