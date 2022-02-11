 <!--blog body area start-->
 <div class="blog_details mt-60">
     <div class="container">
         <div class="row">
             <div class="col-lg-9 col-md-12">
                 <!--blog grid area start-->
                 <div class="blog_wrapper">
                     <article class="single_blog">
                         <figure>
                             <div class="post_header">
                                 <h3 class="post_title">{{ $blog->title }}</h3>
                                 <div class="blog_meta">
                                     <span class="author">Posted by : <a
                                             href="{{route('blog')}}">{{ $blog->posted_by }}</a> / </span>
                                     <span class="post_date"><a href="{{route('blog')}}">Sep 20, 2019</a></span>
                                 </div>
                             </div>
                             <div class="blog_thumb">
                                 <a href="{{route('blog')}}"><img src="{{ asset('storage/Blog_image/'.$blog->image) }}"
                                         alt="{{ $blog->image }}"></a>
                             </div>
                             <figcaption class="blog_content">
                                 <div class="post_content">
                                     <p>{{ $blog->short_description }}</p>
                                     <blockquote>
                                         <p>A blog on "{{ $blog->title }}"</p>
                                     </blockquote>
                                     <p>{{ $blog->description }}</p>
                                 </div>
                                 <div class="entry_content mt-5">
                                     <div class="post_meta">
                                         <span>Tags: </span>
                                         <span><a href="{{route('blog')}}">Drone, </a></span>
                                         <span><a href="{{route('blog')}}">Sky, </a></span>
                                         <span><a href="{{route('blog')}}">Fly</a></span>
                                     </div>
                                     <div class="social_sharing">
                                         <p>share this post:</p>
                                         <ul>
                                             <li><a href="{{route('blog')}}" title="facebook"><i
                                                         class="fa fa-facebook"></i></a></li>
                                             <li><a href="{{route('blog')}}" title="twitter"><i
                                                         class="fa fa-twitter"></i></a></li>
                                             <li><a href="{{route('blog')}}" title="pinterest"><i
                                                         class="fa fa-pinterest"></i></a></li>
                                             <li><a href="{{route('blog')}}" title="google+"><i
                                                         class="fa fa-google-plus"></i></a></li>
                                             <li><a href="{{route('blog')}}" title="linkedin"><i
                                                         class="fa fa-linkedin"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </figcaption>
                         </figure>
                     </article>
                     <div class="comments_box">
                         <h3>3 Comments </h3>
                         <div class="comment_list">
                             <div class="comment_thumb">
                                 <img src="asset/frontend/assets/img/blog/comment3.png.jpg" alt="">
                             </div>
                             <div class="comment_content">
                                 <div class="comment_meta">
                                     <h5><a href="{{route('blog')}}">Admin</a></h5>
                                     <span>October 16, 2018 at 1:38 am</span>
                                 </div>
                                 <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                                 <div class="comment_reply">
                                     <a href="{{route('blog')}}">Reply</a>
                                 </div>
                             </div>

                         </div>
                         <div class="comment_list list_two">
                             <div class="comment_thumb">
                                 <img src="asset/frontend/assets/img/blog/comment3.png.jpg" alt="">
                             </div>
                             <div class="comment_content">
                                 <div class="comment_meta">
                                     <h5><a href="{{route('blog')}}">Demo</a></h5>
                                     <span>October 16, 2018 at 1:38 am</span>
                                 </div>
                                 <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                 <div class="comment_reply">
                                     <a href="{{route('blog')}}">Reply</a>
                                 </div>
                             </div>
                         </div>
                         <div class="comment_list">
                             <div class="comment_thumb">
                                 <img src="asset/frontend/assets/img/blog/comment3.png.jpg" alt="">
                             </div>
                             <div class="comment_content">
                                 <div class="comment_meta">
                                     <h5><a href="{{route('blog')}}">Admin</a></h5>
                                     <span>October 16, 2018 at 1:38 am</span>
                                 </div>
                                 <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at</p>
                                 <div class="comment_reply">
                                     <a href="{{route('blog')}}">Reply</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="comments_form">
                         <h3>Leave a Reply </h3>
                         <p>Your email address will not be published. Required fields are marked *</p>
                         <form action="{{route('blog')}}">
                             <div class="row">
                                 <div class="col-12">
                                     <label for="review_comment">Comment </label>
                                     <textarea name="comment" id="review_comment"></textarea>
                                 </div>
                                 <div class="col-lg-4 col-md-4">
                                     <label for="author">Name</label>
                                     <input id="author" type="text">

                                 </div>
                                 <div class="col-lg-4 col-md-4">
                                     <label for="email">Email </label>
                                     <input id="email" type="text">
                                 </div>
                                 <div class="col-lg-4 col-md-4">
                                     <label for="website">Website </label>
                                     <input id="website" type="text">
                                 </div>
                             </div>
                             <button class="button" type="submit">Post Comment</button>
                         </form>
                     </div>

                 </div>
                 <!--blog grid area start-->
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
