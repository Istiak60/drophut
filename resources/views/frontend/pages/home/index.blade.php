@extends('frontend.layouts.app')
@section('content')
<!--slider area start-->
<section class="slider_section d-flex align-items-center" data-bgimg="asset/frontend/assets/img/slider/slider3.jpg">
    <div class="slider_area owl-carousel">
        @foreach ($sliders as $slider)
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>{{ $slider->title }}</h1>
                            <h2>{{ $slider->subtitle}}</h2>
                            <p>{{ $slider->offer }}</p>
                            <a class="button" href="#">Buy now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="{{ asset('storage/Slider_image/'.$slider->image) }}" alt="{{ $slider->image }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
            @foreach ($products as $product)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding">
                    <a href="{{ route('product.details',$product->id) }}">
                        <div class="tranding-pro-img">
                            <img src="{{ asset('storage/Product_image/'.$product->image) }}" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>{{ $product->title }}</h3>
                            <h4>Drone</h4>
                        </div>
                        <div class="tranding-pro-price">
                            <div class="price_box">
                                <span class="current_price">${{ $product->price }}</span>
                                <span class="old_price">${{ $product->old_price }}</span>
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
            @foreach ($blogs as $blog)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <article class="single_blog mb-60">
                    <figure>
                        <div class="blog_thumb">
                            <a href="{{ route('blog-details',$blog->id) }}"><img
                                    src="{{ asset('storage/Blog_image/'.$blog->image) }}" alt="{{ $blog->image }}"></a>
                        </div>
                        <figcaption class="blog_content">
                            <h3><a href="{{ route('blog-details',$blog->id) }}">{{ $blog->title }}</a></h3>
                            <div class="blog_meta">
                                <span class="author">Posted by : {{ $blog->posted_by }} / </span>
                                <span class="post_date">Sep 20, 2019</span>
                            </div>
                            <div class="blog_desc">
                                <p>{{ $blog->short_description }}</p>
                            </div>
                            <footer class="readmore_button">
                                <a href="{{ route('blog-details',$blog->id) }}">read more</a>
                            </footer>
                        </figcaption>
                    </figure>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--/Blog-->

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
                        src="https://www.youtube.com/embed/vXJBv3wQeGo"
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
            @foreach ($products as $product)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding">
                    <a href="{{ route('product.details',$product->id) }}">
                        <div class="tranding-pro-img">
                            <img src="{{ asset('storage/Product_image/'.$product->image) }}" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>{{ $product->title }}</h3>
                            <h4>Drone</h4>
                        </div>
                        <div class="tranding-pro-price">
                            <div class="price_box">
                                <span class="current_price">${{ $product->price }}</span>
                                <span class="old_price">${{ $product->old_price }}</span>
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
