@extends('master') 
@section('title', 'Trang chủ') 
@section('content')
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        @foreach($slide as $sl)
        <div class="slider-item" style="background-image: url('source/image/slide/{{$sl->image}}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">{{$sl->link}}</h1>
                        <p><a href="{{route('producttype', 0)}}" class="btn btn-primary">Xem chi tiết sản phẩm</a></p>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Free Shipping</h3>
                        <span>On order over $100</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Always Fresh</h3>
                        <span>Product well package</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Superior Quality</h3>
                        <span>Quality Products</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Support</h3>
                        <span>24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex fadeInUp ftco-animated" style="background-image: url(source/image/product/crepe-chuoi.jpg);">
                            <div class="text text-center">
                                <h2>CakeStore</h2>
                                <p>Protect the health of every home</p>
                                <p><a href="#" class="btn btn-primary">Shop now</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end fadeInUp ftco-animated" style="background-image: url(source/image/product/crepe-chocolate.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Pizza</a></h2>
                            </div>
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end fadeInUp ftco-animated" style="background-image: url(source/image/product/crepe-traxanh.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Cupcake</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end fadeInUp ftco-animated" style="background-image: url(source/image/product/Macaron9.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Crepe Cake</a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end fadeInUp ftco-animated" style="background-image: url(source/image/product/Peach-Cake_3294.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Dried</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="space60">&nbsp;</div>
        <div class="row">
            <div class="col-sm-12">
                <div class="beta-products-list">
                    <h4>Sản phẩm mới</h4>
                    <div class="beta-products-details">
                        <p class="pull-left">Có {{$count_new}} sản phẩm mới</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row" id="table_data_new_product">
                        @include('layouts.pagination_new_product')
                    </div>
                </div>

                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Sản phẩm khuyến mãi</h4>
                    <div class="beta-products-details">
                        <p class="pull-left">Có {{$count_sale}} sản phẩm đang sale</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row" id="data_sale_product">
                        @include('layouts.pagination_sale_product')
                    </div>
                </div> <!-- .beta-products-list -->
            </div>

        </div>
    </div>
</div>
</section>

<section class="ftco-section img" style="background-image: url(source/image/product/234.jpg);">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                <span class="subheading">Best Price For You</span>
                <h2 class="mb-4">Deal of the day</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                <h3><a href="#">Spinach</a></h3>
                <span class="price">$10 <a href="#">now $5 only</a></span>
                <div id="timer" class="d-flex mt-5">
                    <div class="time" id="days"></div>
                    <div class="time pl-3" id="hours"></div>
                    <div class="time pl-3" id="minutes"></div>
                    <div class="time pl-3" id="seconds"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">Our satisfied customer says</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(theme/images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(theme/images/person_2.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Interface Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(theme/images/person_3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(theme/images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(theme/images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">System Analyst</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr> 
@endsection

@section('script')
<script>
    $(document).ready(function() {    
        $(document).on('click', '#newProductPagination > .pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) 
        {
            $.ajax({
                url:"/fetch_data?page=" + page,
                success:function(data) 
                {
                    $('#table_data_new_product').html(data);
                },
            })
        }

        $(document).on('click', '#saleProductPagination > .pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data_sale_product(page);
        });

        function fetch_data_sale_product(page) 
        {
            $.ajax({
                url:"/fetch_data_sale_product?page=" + page,
                success:function(data) 
                {
                    $('#data_sale_product').html(data);
                },
            })
        }

        $(document).on('click', '#newProduct, #saleProduct, #delete_cart', function(event){
            event.preventDefault();
            var page = $(this).attr('href');
            make_request(page);
            count_cart();
        });

        function make_request(page) 
        {
            $.ajax({
                url:page,
                success:function(data) 
                {
                    $('#ajax_cart').html(data);

                },
            })
        } 

        function count_cart() 
        {
            $.ajax({
                url:"/count_cart",
                success:function(data) 
                {
                    $('#count_cart').html(data);
                },
            })
        }  
    })
</script>
@endsection
