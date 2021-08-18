<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Favicon -->
<link rel="icon" href="img/core-img/favicon.ico">

<!-- Bootstrap 4 core CSS -->
<link rel="stylesheet" href="{{ asset('html/assets/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('html/assets/css/font-awesome.min.css') }}">

<!-- Custom styles for this template -->
<link rel="stylesheet" href="{{ asset('html/assets/OwlCarousel2/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('html/assets/OwlCarousel2/dist/assets/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('html/assets/style.css') }}">
<link rel="stylesheet" href="{{ asset('html/assets/gesitstyle.css') }}">
<link rel="stylesheet" href="{{ asset('html/assets/stylesheet.css') }}">

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100 order-2 order-lg-1 dual-collapse2">
            <a class="nav-link hide-tablet" href="" style="position: relative;">
                <img src="{{ asset('img/gesitlogo.png') }}" width="70px" alt="" class="img-fluid">
            </a>
            {{-- <ul class="navbar-nav mr-auto">
                @php $menus = App\Menu::where('status', '1')->get(); @endphp

                @foreach ($menus as $menu)
                <li class="nav-item  @if (Request::segment(1) == $menu->slug) {{'active'}} @endif">
                <a class="nav-link header-menu" href="{{url($menu->slug)}}">
                    {!! $menu->name !!}
                </a>
                </li>
                @endforeach

            </ul> --}}
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
               
                {{-- @if ($user) --}}
                <li class="nav-item">
                    {{-- @if ($user->account_type == '4') --}}
                    <a class="nav-link header-menu" href=""></a>
                    {{-- @elseif($user->account_type=="1") --}}
                    <a class="nav-link header-menu" href=""></a>
                    {{-- @endif --}}
                </li>
                {{-- @else --}}
                <li class="nav-item">
                    <a class="nav-link header-menu" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-menu" href="{{ route('register') }}">Register</a>
                </li>
                {{-- @endif --}}
               
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg bg-blue">
    <div class="container">
        <button class="navbar-toggler col-white" type="button" data-toggle="collapse" data-target=".dual-collapse3">
            KATEGORI PRODUK
        </button>
        <div class="navbar-collapse collapse dual-collapse3">
            <ul class="navbar-nav">
                @php $category = App\Models\Kategori::all(); @endphp
                @foreach ($category as $item)
                    <li class="nav-item">
                        <a href="" class="nav-link "">
                            {{ $item->nama }}
                        </a>
                    </li>
                 @endforeach
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<div class="clearfix"></div>

<div class="copyright bg-blue">
    <div class="container">
        <div class="d-flex">
            <div class="p-2">Copyright <i class="fa fa-copyright"></i> {{ date('Y') }}. GESIT - All rights reserved
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('html/assets/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('html/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('html/assets/OwlCarousel2/dist/owl.carousel.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- ##### JS custom Area Start ##### -->
@yield('js')