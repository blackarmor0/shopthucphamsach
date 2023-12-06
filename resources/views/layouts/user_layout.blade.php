<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/grid.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Thực phẩm sạch</title>
</head>

<body>
    <style>
    #flash-message {
        position: fixed;
        margin-top: 300px;
        color: forestgreen;
        border: #26aa99;
        border-radius: 10px;
        text-align: center;
        font-size: 19px;
        width: 500px;
        height: 100px;
        background-color: #c7e1f0;
        padding-top: 17px;
        margin-left: 50%;
        transform: translateX(-50%);
        font-weight: bold;

        z-index: 9999 !important;
    }
    </style>

    <div class="header">
        <div class="container">
            <!-- navbar  -->
            <div class="navbar d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <!-- <span>Jual</span>
          <div class="hr1 mx-2"></div> -->
                    <span>Tải ứng dụng</span>
                    <div class="hr1 mx-2"></div>
                    <span class="me-2">Kết nối</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="me-2">Thông báo</span>
                    <span class="me-4">Hỗ trợ</span>
                    <style>
                    #logint:hover {
                        background-color: #ff8652;
                        border-radius: 5px;

                    }
                    </style>
                    <span class="font-weight-bold ps-1 pe-1" id="logint"> <a href="{{URL::TO('/trang-chu/login')}}"
                            style="text-decoration: none; color: #ffffff;">Đăng nhập</a></span>
                    <div class="hr1 mx-2"></div>
                    <span class="font-weight-bold ps-1 pe-1" id="logint"><a
                            href="{{URL::TO('/trang-chu/dang-ki-tai-khoan')}}"
                            style="text-decoration: none; color: #ffffff;">Đăng Ký</a></span>
                </div>
            </div>
            <div class="d-flex align-items-center mt-4">
                <div class="d-flex align-items-center">
                    {{-- <img class="brand-img mr-2" src="{{asset('frontend/assets/brand.png')}}" alt="" /> --}}
                    <span class="text-brand"><a href="{{URL::TO('/trang-chu')}}"
                            class="text-brand text-decoration-none text-white">Shopthucpham</a></span>
                </div>
                <div class="wrap-navbar-input">
                    <div class="wrap-search">
                        <form action="{{ route('pages.search') }}" method="GET">
                            <input type="text" class="form-control" name="keyword" placeholder="tìm kiếm sản phẩm" />
                            <div class="wrap-icon-s">
                                <button type="submit" class="border-0"> <img class="icon-media" class="img-fluid "
                                        src="{{asset('frontend/assets/search.png')}}" alt="" /></button>
                            </div>
                        </form>
                    </div>
                </div>

                @php $cart = session()->get('cart');
                @endphp


                <div class="header__cart">
                    <div class="header__cart-wrap">
                        @if(empty($cart))
                        <i class="header__cart-icon fas fa-shopping-cart"></i>
                        <span class="header__cart-notice">0</span>
                        @else
                        <i class="header__cart-icon fas fa-shopping-cart"></i>
                        <span class="header__cart-notice">{{ count($cart) }}</span>
                        <div class="header__cart-list ">
                            <span class="header__cart-list-no-cart-msg">
                                Chưa có sản phẩm
                            </span>
                            <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                            <ul class="header__cart-list-item">
                                @foreach($cart as $item)
                                <li class="header__cart-item">
                                    <img src="{{asset($item['image'])}}" alt="" class="header__cart-img" />
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-head">
                                            <h5 class="header__cart-item-name">
                                                {{$item['name']}}
                                            </h5>
                                            <div class="header__cart-item-price-wrap">
                                                <span
                                                    class="header__cart-item-price">{{ number_format($item['price'], 0, ',', '.') }}</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__cart-item-qnt">{{$item['quantity']}}</span>
                                            </div>
                                        </div>
                                        <div class="header__cart-item-body">
                                            {{-- <span class="header__cart-item-description">Phân loại : Bạc</span> --}}

                                            {{-- <span class="header__cart-item-remove"><a href="{{url('trang-chu/delete-cart/')}}">Xóa</a></span>
                                            --}}

                                        </div>
                                    </div>
                                </li>

                                @endforeach

                            </ul>

                            <a href="{{url('trang-chu/xem-gio-hang')}}"
                                class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session('thongbao'))
    <div id="flash-message">
        <div role="alert">
            <i class="fas fa-check-circle fa-lg fa-fw"></i> {{ session('thongbao') }}
        </div>
    </div>
    @endif

    <script>
    setTimeout(function() {
        document.getElementById('flash-message').remove();
    }, 3000);
    </script>
    <div class="content">
        <style>
        .border {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            overflow: hidden;
        }

        .box {
            position: relative;
            transform-style: preserve-3d;
            transition: all 0.5s ease;
            box-shadow: 0 -10px 10px -10px rgba(0, 0, 0, 0.5);
        }
        </style>

        <div class="container  pt-0 mt-0">
            <!-- carousel -->
            <div class="row wrap-carousel ">
                <div class="col-8 h-100 pr-1">
                    <div id="carouselExampleIndicators" class="carousel slide h-100" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner h-100 ">
                            @foreach($images as $index => $image)

                            @if($image->LUACHON==0)
                            <div class="carousel-item {{$index == 0 ? 'active' : ''}} h-100">
                                <a href="{{$image->LINK_ANH}}"><img src="{{asset($image->ANH_QC)}}"
                                        class="d-block w-100 h-100 " alt="..."></a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                </div>
                <div class="col-4 h-100 pl-0">

                    @foreach($images as $index => $image)
                    @if($image->LUACHON===1)
                    <div class="h-50 mb-1">
                        <a href="{{$image->LINK_ANH}}"> <img class="w-100 h-100" src="{{asset($image->ANH_QC)}}"
                                alt="{{$image->LINK_ANH}}" /></a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            @yield('content')
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>