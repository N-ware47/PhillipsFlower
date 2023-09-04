
@php use App\Models\PostBlog; @endphp
@include ('header')





<style>
.blog_item_img img {
    width: 60%;
}


</style>















    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Blog</h2>
              <p>Happiness held is the seed; Happiness shared is the flower.</p>
            </div>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="blog.html">Blog </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

  <!--================Blog Area =================-->
  <section class="blog_area section_gap">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">

                  @foreach($blog as $blog)
                      <article class="blog_item">
                        <div class="blog_item_img">
                          <a href="{{url('singleBLog',$blog->id)}}">

                          
                        
                          <img class="card-img rounded-0" src="{{ asset('/FeatureImg/'.$blog->feature_image) }}" alt="">  
                         </a>
                          <a href="#" class="blog_item_date">
                            <h3>Phillips</h3>
                            <p>Flower</p>
                          </a>
                        </div>
                        
                        <div class="blog_details">
                            <a class="d-inline-block" href="{{url('singleBLog',$blog->id)}}">
                                <h2>{{$blog->blog_title}}</h2>
                            </a>
                            <p style="word-wrap: break-word;">{{$blog->blog_description}}</p>
                            <ul class="blog-info-link">
                              <li><a href="#"><i class="ti-user"></i> {{$blog->blog_tags}}</a></li>
                              <li><a href="#"><i class="ti-comments"></i> 0 Comments</a></li>
                              <li><a href="#"><i class="ti-bookmark"></i> {{$blog->blog_category}}</a></li>
                            </ul>
                        </div>
                      </article>
                      @endforeach
                     
                      


                      <nav class="blog-pagination justify-content-center d-flex">
                          <ul class="pagination">
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Previous">
                                      <span aria-hidden="true">
                                          <span class="ti-arrow-left"></span>
                                      </span>
                                  </a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link">1</a>
                              </li>
                              <li class="page-item active">
                                  <a href="#" class="page-link">2</a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Next">
                                      <span aria-hidden="true">
                                          <span class="ti-arrow-right"></span>
                                      </span>
                                  </a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <aside class="single_sidebar_widget search_widget">
                          <form action="#">
                            <div class="form-group">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Keyword">
                                <div class="input-group-append">
                                  <button class="btn" type="button"><i class="ti-search"></i></button>
                                </div>
                              </div>
                            </div>
                            <button class="main_btn rounded-0 w-100" type="submit">Search</button>
                          </form>
                      </aside>

                      <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Resaurant food</p>
                                    <p>(37)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Travel news</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Modern technology</p>
                                    <p>(03)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Product</p>
                                    <p>(11)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Inspiration</p>
                                    <p>21</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Health Care (21)</p>
                                    <p>09</p>
                                </a>
                            </li>
                        </ul>
                      </aside>

                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Recent Post</h3>
                        
                          @php $blog=PostBlog::all(); $test = "wee"; @endphp
                            @foreach($blog as $blog)
                          <div class="media post_item">
                              <img  src="{{ asset('/FeatureImg/'.$blog->feature_image) }}" class="card-img-top-recent" style="width: 73px;" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>{{$blog->blog_title}}</h3>
                                      <h3>{{$blog->created_at}}</h3>
                                  </a>
                                  <p>{{$blog->created_at}}</p>
                                 
                              </div>
                          </div>
                          @endforeach
                      </aside>
                      <aside class="single_sidebar_widget tag_cloud_widget">
                          <h4 class="widget_title">Tag Clouds</h4>
                          <ul class="list">
                          @php $blog=PostBlog::all(); $test = "wee"; @endphp
                          @foreach($blog as $blog)
                              <li>
                                  <a href="#">{{$blog->blog_tags}}</a>
                              </li>
                               @endforeach
                          </ul>
                         
                      </aside>


      


                      <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email" required>
                          </div>
                          <button class="main_btn rounded-0 w-100" type="submit">Subscribe</button>
                        </form>
                      </aside>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================Blog Area =================-->


  @include ('footer');