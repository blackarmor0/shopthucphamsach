<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('backend/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{ asset('backend/js/jquery2.0.3.min.js') }}"></script>
</head>

<body id="trangtri">
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>shopthucphamsach</h2>
            <form action="{{ route('admin.submit') }}" method="post">
                @csrf
                <input type="text" class="ggg" name="username" placeholder="Tên Đăng Nhập" required="">
                <input type="password" class="ggg" name="password" placeholder="Password" required="">
                <?php
                use Illuminate\Support\Facades\Session;
                
                $message = Session::get('message');
                if ($message) {
                    echo "<p id='canhbao'>$message</p>";
                    Session::put('message', null); //chỉ cho message hiển thị một lần thôi
                }
                ?>
                <span><input type="checkbox" />Nhớ Tài Khoản</span>
                <h6>Quên Mật Khẩu?</h6>
                <div class="clearfix"></div>
                <input type="submit" style="background-color: #f6402e; color: #761d1f; font-weight: bold;"
                    value="Đăng Nhập" name="login">
            </form>
            <p>bạn chưa có tài khoản<a href="registration.html">tạo tài khoản</a></p>
        </div>
    </div>
    <script src="{{ asset('backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.nicescroll.js') }}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
</body>

</html>
