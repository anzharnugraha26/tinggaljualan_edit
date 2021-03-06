@extends('layout.front-end')
@section('title')
    Blog
@endsection
@section('content')

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Blog</h2>
                <div class="page_link">
                    <a href="{{url("/")}}">Blog</a>
                   
                    @if($catName == null)
                        <label style="color: white">Tidak Ada Artikel</label>
                    @else
                    <a href="#">{{$catName->category->name}} </a> 
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->
    
<!--================Blog Categorie Area =================-->
<section class="blog_categorie_area section_gap_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="{{asset('front-master/img/blog/cat-post/cat-post-3.jpg')}}" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="single-blog.html"><h5>Social Life</h5></a>
                            <div class="border_line"></div>
                            <p>Enjoy your social life together</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="{{asset('front-master/img/blog/cat-post/cat-post-2.jpg')}}" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="single-blog.html"><h5>Politics</h5></a>
                            <div class="border_line"></div>
                            <p>Be a part of politics</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="{{asset('front-master/img/blog/cat-post/cat-post-1.jpg')}}" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="single-blog.html"><h5>Food</h5></a>
                            <div class="border_line"></div>
                            <p>Let the food be finished</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Categorie Area =================-->

<!--================Blog Area =================-->
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    @foreach ($categories as $item)
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                              
                                <ul class="blog_meta list">
                                    <li><a href="#">Admin<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">{{ $item->created_at->toFormattedDateString() }}<i class="lnr lnr-calendar-full"></i></a></li>
                                   
                                    <li><a href="#">{{$item->coment}} Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="{{asset('img/blog/' .$item->image)}}" alt="">
                                <div class="blog_details">
                                    <a href="{{url('/detail-blog')}}"><h2>{{$item->title}}</h2></a>
                                    <p>{!! substr($item->content, 0, 200) !!}</p>
                                    <a href="{{url('blog/' . $item->slug)}}" class="primary_btn"><span>View More</span></a>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                 
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                         
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Posts">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                            </span>
                        </div><!-- /input-group -->
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget author_widget">
                        <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                        <h4>Charlie Barber</h4>
                        <p>Senior blog writer</p>
                        <div class="social_icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                        <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                        <div class="br"></div>
                    </aside>
                   
                    <aside class="single_sidebar_widget ads_widget">
                        <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Post Categories</h4>
                        <ul class="list cat-list">
                            @foreach ($cat as $item)
                            <li>
                                <a href="{{url('/blog/category/'.$item->id)}}" class="d-flex justify-content-between">
                                    <p>{{$item->name}}</p>
                                    <p>{{$item->jumlah}}</p>
                                </a>
                            </li>
                            @endforeach														
                        </ul>
                        <div class="br"></div>
                    </aside>
                    <aside class="single-sidebar-widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <p>
                        Here, I focus on a range of items and features that we use in life without
                        giving them a second thought.
                        </p>
                        <div class="form-group d-flex flex-row">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                            </div>
                            <a href="#" class="bbtns">Subcribe</a>
                        </div>	
                        <p class="text-bottom">You can unsubscribe at any time</p>	
                        <div class="br"></div>							
                    </aside>
                    <aside class="single-sidebar-widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            {{-- @foreach ($tags as $item)
                            <li><a href="#">{{$item->tag}}</a></li>     
                            @endforeach --}}
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
@if(Session::has('services'))
<script>
	Swal.fire(
  	'Good job!',
  	'Anda Akan Mendapat Pembaruan Melalui Email',
  	'success'
)
</script>
@endif
    
@endsection