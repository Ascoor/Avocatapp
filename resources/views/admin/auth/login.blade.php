<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>أفوكات | تسجيل دخول </title>
  @if($image_logo->favicon_img!='')
  <link rel="shortcut icon" href="{{URL::asset(config('constants.FAVICON_FOLDER_PATH') .'/'. $image_logo->logo_img)}}">
  @endif
  <!-- Bootstrap -->
  <link href="{{URL::asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{URL::asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{URL::asset('assets/admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
  <!-- Animate.css -->
  <link href="{{URL::asset('assets/admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&family=Cairo:wght@500;600&display=swap" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{URL::asset('assets/admin/build/css/custom.min.css') }}" rel="stylesheet">
  <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
  <style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
    width: 100%;
    height: 100%;
    /*background: #0413298*/
    }
    main#main{
    width:100%;
    height: calc(100%);
    background:white;
    }
    #login-right{
    position: absolute;
    right:0;
    width:40%;
    height: calc(100%);
    background:linear-gradient(#041329, #0c2244, #08224b);
    display: flex;
    align-items: center;
    color:#ffffff;
    }
    #login-left{
    position: absolute;
    left:0;
    width:60%;
    height: 100vh;

    background:linear-gradient(#041329, #0c2244, #08224b);

    display: flex;
    align-items: center;
    }
    #login-right .card{
    margin: auto;
    background: rgba(255, 255, 255, .1);
border-radius: 10%

    }
    .fa-gavel:before{
    content: "\f0e3";
    color: #ec1c23;

    }
    .logo {
    margin: auto;
    font-size: 8rem;
    padding: 0.0em 0.8em;
    color: #ffffffb3;


    }

    </style>
</head>




  <body>

    <div id="login-left">
  <div class="logo">
    <img src="assets/logo.png"></div>
    </div>
    <div id="login-right">
      <div class="card col-md-8">
        <div class="card-body ">
          <div class="logo">
            <center> <img src="assets/vvv.png">
          </div>

          <h1 class=" text-center"><b>أفوكات</b></h1>
          <h2 class=" text-center"><b>نظام إدارة مكاتب المحاماة والإدارات القانونية</b></h2>
          </center>
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
            {{ csrf_field() }}

            @if($image_logo->logo_img!='')
            <img src="{{asset(config('constants.LOGO_FOLDER_PATH') .'/logo.gif'. $image_logo->logo)}}"
              style="margin-bottom: 20px;">
            @else

            @endif
            <center>
              <h2> تسجيل الدخول </h2>
            </center>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus
                placeholder="الأميل">

              @if ($errors->has('email'))
              <span class="help-block text-left">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" type="password" class="form-control" name="password" autocomplete="off"
                placeholder="كلمة المرور">

              @if ($errors->has('password'))
              <span class="help-block text-left">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
            <div>

              <button type="submit" class="btn btn-danger"> تسجيل دخول</button>

              <button href="/admin/password/reset" class="btn btn-success" role="umit">فقدت كلمة السر</button>
              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>

              </div>
              <center>
                  <h1><i class="fa fa-gavel type=submit"></i>A V O C A T</h1>
                  <p>©2022 جميع الحقوق محفوظة لدي مكتب أفوكات للمحاماة</p>
                </center>

              </div>
            </div>
        </div>
        </form>
        </section>


      </div>
    </div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('assets/admin/vendors/jquery/dist/jquery.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
          "use strict";
          $(".fill-login").click(function () {
            $("#email").val($(this).data("email"));
            $("#password").val($(this).data("password"));
          });

        });
    </script>




  </body>

</html>
