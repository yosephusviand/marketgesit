@extends('layouts.user')

@section('content')

    <!-- CATEGORIES -->
    <section id="categories">
        <div class="container">
            <div class="categories-slide owl-carousel owl-theme">
                @foreach ($kategori as $item)
                    <div class="item">
                        <a href="">
                            <img src="{{ route('kategori.displayImage', $item->id) }}" alt="" class="img-fluid">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="books">
        <div class="container">
            <div class="books-box">
                <div class="books-box-inside">
                    <div class="section-title">
                        <h2 class="pull-left"><span class="col-white bg-dark-blue" style="width:50px">NEW</span> ITEMS</h2>
                        <a href="" class="pull-right hide-tablet" style="color:black">
                            MORE PRODUCTS
                            <span class="fa fa-caret-right fa-lg"></span>
                        </a>
                    </div>
                    
                    <div class="clearfix"></div>
                    <div class="new-items owl-carousel owl-theme">
                        @foreach ($barang as $brg)
                            <div class="item">
                                <div class="book-content">
                                    <div class="box-description">
                                        <a href="">
                                            <img src="{{ route('barang.displayImage', $brg->id) }}" alt="" height="250px" class="book-img">
                                            <div class="book-title-box">
                                                <a href="" class="book-title">
                                                    {{ $brg->nama }}
                                                </a>
                                            </div>
                                            <div class="book-price-box">
                                                <span >Rp. {{ number_format($brg->harga, 0, ".", ".") }}</span>

                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div style="margin-top: 10px;">
                        <a href="" class="text-center button-blue shown-tablet">More Product </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- @foreach ($featured as $item)
    <section class="highlight">
        <div class="container">
            <div class="row">
                <div class="col-12 image shown-tablet">
                    <img src="{{ asset($item->image) }}" alt="" class="w-100">
                </div>
                <div class="col-md-6 text" style="padding:10% 10% 0">
                    <p>{{$item->name}}</p>
                    @if ($item->price_promo != null)
                        <span class="strike-through col-red">Rp. {{ number_format($item->price_promo, 0, ".", ".") }}</span>
                        <br>
                        <h4><span>Rp. {{ number_format($item->price, 0, ".", ".") }}</span></h4>
                    @else
                        <h4><span>Rp. {{ number_format($item->price, 0, ".", ".") }}</span></h4>
                    @endif
                    <br>
                    <a href="{{ url('products', $item->slug) }}" class="btn button-blue round">
                        SHOP
                    </a>
                </div>
                <div class="col-md-6 image hide-tablet">
                    <img src="{{ asset($item->image) }}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>
    @endforeach --}}

    <!-- NEW ITEMS  -->
    {{-- <section class="books">
        <div class="container">
            <div class="books-box">
                <div class="books-box-inside">
                    <div class="section-title">
                        <h1 class="pull-left"><span class="col-white bg-dark-blue" style="width:50px">NEW</span> ITEMS</h1>
                        <a href="{{url('products')}}" class="pull-right hide-tablet" style="color:black">
                        MORE PRODUCTS
                        <span class="fa fa-caret-right fa-lg"></span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="new-items owl-carousel owl-theme">
                        @foreach ($new as $item)
                        @php
                            if(Auth::user()){
                                $user_id = Auth::user()->id;
                                $wishlists = App\Wishlist::where('product_id',$item->id)
                                        ->where('user_id',$user_id)
                                        ->first();
                                $status = 0;
                                if($wishlists){
                                    $status = 1;
                                }else{
                                    $status=0;
                                }
                            }

                            if($item->price != 0){
                                $discount = (((int)$item->price_promo-(int)$item->price)/(int)$item->price*100);
                            }else{
                                $item->price = 0;
                            }
                        @endphp
                        <div class="item">
                            <div class="book-content">
                                @if ($item->price_promo != '')
                                <div class="discount-badge">{{number_format($discount,1)}}%</div>
                                @endif
                                <div class="product-star">
                                    @if (Auth::user())

                                        @if ($status == 0)
                                        <a href="javascript:void(0)" id="fav{{$item->id}}"
                                            class="button-favorite fav-class" data-id="{{$item->id}}"
                                            data-user="{{$user_id}}">
                                            <span class="fa fa-star"></span>
                                        </a>
                                        @else
                                        <a href="javascript:void(0)" id="fav{{$item->id}}"
                                            class="button-favorite active fav-class" data-id="{{$item->id}}"
                                            data-user="{{$user_id}}">
                                            <span class="fa fa-star"></span>
                                        </a>
                                        @endif

                                    @endif
                                </div>
                                <div class="box-description">
                                    <a href="{{ url('products', $item->slug) }}">
                                <img src="{{ asset($item->image) }}" alt="" class="book-img">
                                <div class="book-title-box">
                                    <a href="{{ url('products', $item->slug) }}" class="book-title">
                                        {{ $item->name }}
                                    </a>
                                </div>
                                <div class="book-price-box">
                                    @if ($item->price_promo != null)
                                        <span class="strike-through col-red">Rp. {{ number_format($item->price_promo, 0, ".", ".") }}</span>
                                        <br>
                                        <span>Rp. {{ number_format($item->price, 0, ".", ".") }}</span>
                                    @else
                                        <span>Rp. {{ number_format($item->price, 0, ".", ".") }}</span>
                                    @endif
                                </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div style="margin-top: 10px;">
                        <a href="{{url('products')}}" class="text-center button-blue shown-tablet">More Product </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ARTIKEL  -->
    {{-- <section class="books">
        <div class="container">
            <div class="books-box">
                <div class="books-box-inside">
                    <div class="section-title">
                        <h1 class="pull-left"><span class="col-white bg-dark-blue" style="width:50px">ARTICLES</h1>
                        <a href="" class="pull-right hide-tablet" style="color:black">
                        MORE PRODUCTS
                        <span class="fa fa-caret-right fa-lg"></span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="new-items owl-carousel owl-theme">
                        @php 
                            $post = \App\Post::where('status', '1')->limit(6)->get();
                        @endphp
                        @foreach ($post as $posts)
                        <div class="item">
                            <div class="book-content">
                                <div class="box-description">
                                    <a href="">
                                    <img src="" alt="" class="book-img">
                                <div class="book-title-box">
                                    <a href="
                                    </a>
                                </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div style="margin-top: 10px;">
                        <a href="" class="text-center button-blue shown-tablet">More Product </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection

<style>
    .book-header {
        text-align: center;
    }

    .book-header img,
    #banner .promo img {
        max-height: 600px;
        width: auto;
        margin: auto;
    }

</style>


@section('js')
    <!-- OWL -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.promo').owlCarousel({
                center: true,
                items: 1,
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 3000
            })

            $('.categories-slide').owlCarousel({
                center: true,
                items: 1,
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    600: {
                        items: 4
                    }
                }
            })

            $('.flash-sale-items').owlCarousel({
                items: 1,
                loop: true,
                margin: 30,
                nav: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                responsive: {
                    600: {
                        items: 4
                    }
                }
            })

            $('.new-items').owlCarousel({
                items: 1,
                loop: true,
                margin: 30,
                autoHeight: true,
                nav: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                responsive: {
                    600: {
                        items: 4
                    }
                }
            })
        });
    </script>

@endsection
