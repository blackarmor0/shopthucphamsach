<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Tài Khoản </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}">
</head>


<header>
    <div class="container">
        <div class="row p-4">
            <div class="col">

                <div class="d-inline mt-3">

                    <span class="text-brand"><a href="{{URL::TO('/trang-chu')}}"
                            class="text-brand text-decoration-none fs-4" style="color: #ee4d2d; font-weight: bold;">Shop
                            thực phẩm sạch</a></span>

                    <p class="d-inline fs-4 fw-bold p-4 mt-3">Đăng Nhập</p>
                </div>

            </div>
            <div class="col">
                <p class="text-end mt-3" style="color: #ee4d2d;;">Bạn cần giúp đỡ ?</p>
            </div>
        </div>
    </div>
</header>

<body>

    <div id="background-login">
        <div class="form-container container-fluid">
            <div class="text-start fs-3 ms-5 mt-3">Đăng Nhập</div>
            <form id="login-form" action="{{url('/trang-chu/kiem-tra-dang-nhap')}}" method="POST">
                @csrf
                <div class="form-group">

                    <input type="text" name="username" id="username" placeholder="Tên Đăng Nhập">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Mật Khẩu">

                    <?php 
                    use Illuminate\Support\Facades\Session;
                    
                     $message=Session::get('message');
                     if($message){
                      echo "<p id='canhbao'>$message</p>";
                       Session::put("message",null); 
                     }
                     ?>
                </div>
                <input type="submit" value="Đăng Nhập">
                <div class="row">
                    <div class="col">
                        <small class="mx-5 text-primary">Quên mật khẩu</small>
                        <small class="mx-5 text-primary">đăng nhập bằng gmail</small>
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <hr style="flex-grow: 1;">
                        <small style="padding: 0 10px;">HOẶC</small>
                        <hr style="flex-grow: 1;">
                    </div>


                </div>
            </form>
            <p class="d-inline">Bạn mới biết đến thực phẩm sạch?</p><a href="dang-ki-tai-khoan"
                class="text-decoration-none">Đăng kí</a>
        </div>
    </div>
</body>

</html>