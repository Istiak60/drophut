<!--blog body area start-->
<div class="blog_details mt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog_wrapper">
                    <div class="section-title">
                        <h2>All Blog</h2>
                    </div>
                    <div class="row">
                        @foreach ($blogs as $blog)
                        <div class="col-lg-6 col-md-6">
                            <article class="single_blog mb-60">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="{{ route('blog-details',$blog->id) }}"><img
                                                src="{{ asset('storage/Blog_image/'.$blog->image) }}"
                                                alt="{{ $blog->image }}"></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <h3><a href="{{ route('blog-details',$blog->id) }}">{{ $blog->title }}</a></h3>
                                        <div class="blog_meta">
                                            <span class="author">Posted by : <a href="{{route('blog')}}">{{ $blog->posted_by }}</a> /
                                            </span>
                                            <span class="post_date">On : <a href="{{route('blog')}}">April 10, 2019</a></span>
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
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="blog_sidebar_widget">
                    <div class="widget_list widget_search">
                        <h3>Search</h3>
                        <form action="{{route('blog')}}">
                            <input placeholder="Search..." type="text">
                            <button type="submit">search</button>
                        </form>
                    </div>
                    <div class="widget_list widget_post">
                        <h3>Recent Posts</h3>
                        @foreach ($blogs as $blog)
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="{{ route('blog-details',$blog->id) }}"><img
                                        src="{{ asset('storage/Blog_image/'.$blog->image) }}"
                                        alt="{{ $blog->image }}"></a>
                            </div>
                            <div class="post_info">
                                <h3><a href="{{ route('blog-details',$blog->id) }}">{{ $blog->title }}</a></h3>
                                <span>March 16, 2018 </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="widget_list widget_tag">
                        <h3>Tag products</h3>
                        <div class="tag_widget">
                            <ul>
                                <li><a href="{{route('blog')}}">Drone</a></li>
                                <li><a href="{{route('blog')}}">Sky</a></li>
                                <li><a href="{{route('blog')}}">Fly</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--blog section area end-->
