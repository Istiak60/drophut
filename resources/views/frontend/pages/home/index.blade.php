@extends('frontend.layouts.app')
@section('content')
<!--slider area start-->
<section class="slider_section d-flex align-items-center" data-bgimg="asset/frontend/assets/img/slider/slider3.jpg">
    <div class="slider_area owl-carousel">
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>Next level of Drone</h1>
                            <h2>Insane Quality for use</h2>
                            <p>Special offer <span> 20% off </span> this week</p>
                            <a class="button" href="product-details.html">Buy now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="asset/frontend/assets/img/product/1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>Best Camera Included</h1>
                            <h2>100% Flexible</h2>
                            <p>exclusive offer <span> 20% off </span> this week</p>
                            <a class="button" href="product-details.html">Shop now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="asset/frontend/assets/img/product/2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>With some gifts</h1>
                            <h2>Special one for you</h2>
                            <p>exclusive offer <span> 20% off </span> this week</p>
                            <a class="button" href="product-details.html">shopping now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="asset/frontend/assets/img/product/3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider area end-->

<!--Tranding product-->
<section class="pt-60 pb-30 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-title">
                    <h2>Tranding Products</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($products as $item)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding">
                    <a href="{{ route('product.details',$item->id) }}">
                        <div class="tranding-pro-img">
                            <img src="{{ asset('storage/Product_image/'.$item->image) }}" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>{{ $item->title }}</h3>
                            <h4>Drone</h4>
                        </div>
                        <div class="tranding-pro-price">
                            <div class="price_box">
                                <span class="current_price">${{ $item->price }}</span>
                                <span class="old_price">${{ $item->old_price }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--Tranding product-->

<!--Features area-->
<section class="features-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-title">
                    <h2>Awesome Features</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-features">
                    <img src="asset/frontend/assets/img/icon/1.png" alt="">
                    <h3>Impressive Distance</h3>
                    <p>consectetur adipisicing elit. Ut praesentium earum, blanditiis, voluptatem repellendus rerum
                        voluptatibus dignissimos</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-features">
                    <img src="asset/frontend/assets/img/icon/2.png" alt="">
                    <h3>100% self safe</h3>
                    <p>consectetur adipisicing elit. Ut praesentium earum, blanditiis, voluptatem repellendus rerum
                        voluptatibus dignissimos</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-features">
                    <img src="asset/frontend/assets/img/icon/3.png" alt="">
                    <h3>Awesome Support</h3>
                    <p>consectetur adipisicing elit. Ut praesentium earum, blanditiis, voluptatem repellendus rerum
                        voluptatibus dignissimos</p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                <a href="#"><img src="asset/frontend/assets/img/product/2.png" alt=""></a>
            </div>
        </div>
    </div>
</section>
<!--Features area-->

<!--Features area-->
<section class="gray-bg pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-1">
                <div class="pro-details-feature">
                    <img src="asset/frontend/assets/img/product/1.png" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-lg-2 order-md-2 order-sm-2">
                <div class="pro-details-feature">
                    <h3>Long Lasting</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text.</p>
                    <ul>
                        <li>It is a long established fact that</li>
                        <li>Many desktop publishing</li>
                        <li>Various versions have evolved over the years, sometimes by accident</li>
                        <li>There are many variations of passages</li>
                        <li>If you are going to use a</li>
                        <li>Alteration in some form, by injected</li>
                    </ul>
                    <a href="#">$70 Buy now</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-lg-3 order-md-4 order-sm-4 order-4">
                <div class="pro-details-feature">
                    <h3>Impressive Distance</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text.</p>
                    <ul>
                        <li>It is a long established fact that</li>
                        <li>Many desktop publishing</li>
                        <li>Various versions have evolved over the years, sometimes by accident</li>
                        <li>There are many variations of passages</li>
                        <li>If you are going to use a</li>
                        <li>Alteration in some form, by injected</li>
                    </ul>
                    <a href="#">$70 Buy now</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-lg-4 order-md-3 order-sm-3 order-3">
                <div class="pro-details-feature">
                    <img src="asset/frontend/assets/img/product/1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Features area-->


<!--product details start-->
<div class="product_details mt-60 mb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <img id="zoom1" src="asset/frontend/assets/img/product/details-1.jpg"
                                data-zoom-image="asset/frontend/assets/img/product/details-1.jpg" alt="big-1">
                        </a>
                    </div>
                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="asset/frontend/assets/img/product/details-2.jpg"
                                    data-zoom-image="asset/frontend/assets/img/product/details-2.jpg">
                                    <img src="asset/frontend/assets/img/product/details-2.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="asset/frontend/assets/img/product/details-3.jpg"
                                    data-zoom-image="asset/frontend/assets/img/product/details-3.jpg">
                                    <img src="asset/frontend/assets/img/product/details-3.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="asset/frontend/assets/img/product/details-4.jpg"
                                    data-zoom-image="asset/frontend/assets/img/product/details-4.jpg">
                                    <img src="asset/frontend/assets/img/product/details-4.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="asset/frontend/assets/img/product/details-1.jpg"
                                    data-zoom-image="asset/frontend/assets/img/product/details-1.jpg">
                                    <img src="asset/frontend/assets/img/product/details-1.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">
                    <form action="#">

                        <h1>Meyoji Robast Drone Fusce ultricies massa</h1>
                        <div class=" product_ratting">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="review"><a href="#"> (250 reviews) </a></li>
                            </ul>

                        </div>
                        <div class="price_box">
                            <span class="current_price">$70.00</span>
                            <span class="old_price">$80.00</span>
                        </div>
                        <div class="product_desc">
                            <ul>
                                <li>In Stock</li>
                                <li>Free delivery available*</li>
                                <li>Sale 30% Off Use Code : 'Drophut'</li>
                            </ul>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web
                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                ipsum' will</p>
                        </div>
                        <div class="product_timing">
                            <div data-countdown="2021/6/28"></div>
                        </div>
                        <div class="product_variant color">
                            <h3>Available Options</h3>
                            <label>color</label>
                            <ul>
                                <li class="color1"><a href="#"></a></li>
                                <li class="color2"><a href="#"></a></li>
                                <li class="color3"><a href="#"></a></li>
                                <li class="color4"><a href="#"></a></li>
                            </ul>
                        </div>
                        <div class="product_variant quantity">
                            <label>quantity</label>
                            <input min="1" max="100" value="1" type="number">
                            <button class="button" type="submit">Buy now</button>

                        </div>
                        <div class="product_meta">
                            <span>Category: <a href="#">Drone</a></span>
                        </div>

                    </form>
                    <div class="priduct_social">
                        <ul>
                            <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a>
                            </li>
                            <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                            <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a>
                            </li>
                            <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i>
                                    share</a></li>
                            <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--product details end-->


<!--area-->
<section class="pt-60 pb-60 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-title">
                    <h2>Watch it now</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                        src="https://player.vimeo.com/video/136938394?color=FA5252&amp;title=0&amp;byline=0"
                        style="position:absolute;top:0;left:0;width:100%;height:100%;" allow="autoplay; fullscreen"
                        allowfullscreen></iframe></div>
                <script src="../../../player.vimeo.com/api/player.js"></script>
            </div>
        </div>
    </div>
</section>
<!--area-->


<!--Other product-->
<section class="pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-title">
                    <h2>Other collections</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($products as $item)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding">
                    <a href="{{ route('product.details',$item->id) }}">
                        <div class="tranding-pro-img">
                            <img src="{{ asset('storage/Product_image/'.$item->image) }}" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>{{ $item->title }}</h3>
                            <h4>Drone</h4>
                        </div>
                        <div class="tranding-pro-price">
                            <div class="price_box">
                                <span class="current_price">${{ $item->price }}</span>
                                <span class="old_price">${{ $item->old_price }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--Other product-->

<!--Testimonials-->
<section class="pb-60 pt-60 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="testimonial_are">
                    <div class="testimonial_active owl-carousel">
                        <article class="single_testimonial">
                            <figure>
                                <div class="testimonial_thumb">
                                    <a href="#"><img src="asset/frontend/assets/img/about/team-3.jpg" alt=""></a>
                                </div>
                                <figcaption class="testimonial_content">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45</p>
                                    <h3><a href="#">Kathy Young</a><span> - CEO of SunPark</span></h3>
                                </figcaption>

                            </figure>
                        </article>
                        <article class="single_testimonial">
                            <figure>
                                <div class="testimonial_thumb">
                                    <a href="#"><img src="asset/frontend/assets/img/about/team-1.jpg" alt=""></a>
                                </div>
                                <figcaption class="testimonial_content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even</p>
                                    <h3><a href="#">John Sullivan</a><span> - Customer</span></h3>
                                </figcaption>

                            </figure>
                        </article>
                        <article class="single_testimonial">
                            <figure>
                                <div class="testimonial_thumb">
                                    <a href="#"><img src="asset/frontend/assets/img/about/team-2.jpg" alt=""></a>
                                </div>
                                <figcaption class="testimonial_content">
                                    <p>College in Virginia, looked up one of the more obscure Latin words, consectetur,
                                        from a Lorem Ipsum passage, and going through the cites</p>
                                    <h3><a href="#">Jenifer Brown</a><span> - Manager of AZ</span></h3>
                                </figcaption>

                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Testimonials-->

<!--Blog-->
<section class="pt-60">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-title">
                    <h2>Blog Posts</h2>
                </div>
            </div>
        </div>
        <div class="row blog_wrapper">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <article class="single_blog mb-60">
                    <figure>
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="asset/frontend/assets/img/blog/blog2.jpg" alt=""></a>
                        </div>
                        <figcaption class="blog_content">
                            <h3><a href="blog-details.html">How to start drone</a></h3>
                            <div class="blog_meta">
                                <span class="author">Posted by : <a href="#">Rahul</a> / </span>
                                <span class="post_date"><a href="#">Sep 20, 2019</a></span>
                            </div>
                            <div class="blog_desc">
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less</p>
                            </div>
                            <footer class="readmore_button">
                                <a href="blog-details.html">read more</a>
                            </footer>
                        </figcaption>
                    </figure>
                </article>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <article class="single_blog blog_bidio mb-60">
                    <figure>
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="asset/frontend/assets/img/blog/blog1.jpg" alt=""></a>
                        </div>
                        <figcaption class="blog_content">
                            <h3><a href="blog-details.html">See the tutorial</a></h3>
                            <div class="blog_meta">
                                <span class="author">Posted by : <a href="#">Rahul</a> / </span>
                                <span class="post_date">On : <a href="#">Aug 25, 2019</a></span>
                            </div>
                            <div class="blog_desc">
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less</p>
                            </div>
                            <footer class="readmore_button">
                                <a href="blog-details.html">read more</a>
                            </footer>
                        </figcaption>
                    </figure>
                </article>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <article class="single_blog mb-60">
                    <figure>
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="asset/frontend/assets/img/blog/blog-details.jpg"
                                    alt=""></a>
                        </div>
                        <figcaption class="blog_content">
                            <h3><a href="blog-details.html">How to start drone</a></h3>
                            <div class="blog_meta">
                                <span class="author">Posted by : <a href="#">Rahul</a> / </span>
                                <span class="post_date"><a href="#">Sep 20, 2019</a></span>
                            </div>
                            <div class="blog_desc">
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less</p>
                            </div>
                            <footer class="readmore_button">
                                <a href="blog-details.html">read more</a>
                            </footer>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </div>
</section>
<!--/Blog-->

<!--shipping area start-->
<section class="shipping_area">
    <div class="container">
        <div class=" row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="asset/frontend/assets/img/about/shipping1.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h2>Free Shipping</h2>
                        <p>Free shipping on all US order</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="asset/frontend/assets/img/about/shipping2.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h2>Support 24/7</h2>
                        <p>Contact us 24 hours a day</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="asset/frontend/assets/img/about/shipping3.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h2>100% Money Back</h2>
                        <p>You have 30 days to Return</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="asset/frontend/assets/img/about/shipping4.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h2>Payment Secure</h2>
                        <p>We ensure secure payment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shipping area end-->

@endsection
