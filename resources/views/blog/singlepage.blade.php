@php use App\Models\PostBlog; @endphp
@include ('header');


<link rel="stylesheet" href="/file/css/bootstrap.css" />
  <link rel="stylesheet" href="/file/vendors/linericon/style.css" />
  <link rel="stylesheet" href="/file/css/font-awesome.min.css" />
  <link rel="stylesheet" href="/file/css/themify-icons.css" />
  <link rel="stylesheet" href="/file/css/flaticon.css" />
  <link rel="stylesheet" href="/file/vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="/file/vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="/file/vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="/file/vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="/file/vendors/jquery-ui/jquery-ui.css" />


  <!-- main css -->
<link rel="stylesheet" href="/file/css/style.css" />
<link rel="stylesheet" href="/file/css/responsive.css" /> 








<div class="container bg-light ps-20 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row">
        <div class="col-12"><h1 class="fs-1 text-center"> BLOG</h1></div>
    </div>
</div>






  <!--================Blog Area =================-->
	<section class="blog_area single-post-area section_gap ">
			<div class="container">
					<div class="row">
							<div class="col-lg-8 posts-list ">
									<div class="single-post">
													<div class="feature-img shadow-sm p-3 mb-5 bg-body rounded">
															<img class="img-fluid" src="/Featureimg/{{$blog->feature_image}}" alt="">
													</div>
											<div class="blog_details">
													<h2>{{$blog->blog_title}}</h2>
                          <ul class="blog-info-link">
                              <li><a href="#"><i class="ti-user"></i> {{$blog->blog_tags}}</a></li>
                              <li><a href="#"><i class="ti-comments"></i> 0 Comments</a></li>
                              <li><a href="#"><i class="ti-bookmark"></i> {{$blog->blog_category}}</a></li>
                            </ul>
							
													<p class="excert" style="word-wrap: break-word; padding:20px 0px; font-size:18px;">{{$blog->blog_description}}</p>
                          <!-- <div class="quote-wrapper">
                            <div class="quotes">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.
                            </div>
                          </div> -->
                          
                  
											</div>
                  </div>
             
                 

								
									<div class="comment-form">
											<h4>Leave a Reply</h4>
											<form class="form-contact comment_form" action="#" id="commentForm">
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="main_btn">Send Message</button>
                        </div>
                      </form>
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
                                    <p>(21)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Health Care</p>
                                    <p>(21)</p>
                                </a>
                            </li>
                        </ul>
                      </aside>

                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Recent Post</h3>
                        

                            @php $blog=PostBlog::all(); $test = "wee"; @endphp
                            @foreach($blog as $blog)
                          <div class="media post_item">
                              <img  src="/Featureimg/{{$blog->feature_image}}" class="card-img-top-recent" style="width: 73px;" alt="post">
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











<script src="/file/js/jquery-3.2.1.min.js"></script>
  <script src="/file/js/popper.js"></script>
  <script src="/file/js/bootstrap.min.js"></script>
  <script src="/file/js/stellar.js"></script>
  <script src="/file/vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="/file/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="/file/vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="/file/vendors/isotope/isotope-min.js"></script>
  <script src="/file/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="/file/js/jquery.ajaxchimp.min.js"></script>
  <script src="/file/vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="/file/vendors/counter-up/jquery.counterup.js"></script>
  <script src="/file/js/mail-script.js"></script>
  <script src="/file/js/theme.js"></script>






@include ('footer');