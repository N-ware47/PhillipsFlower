

@include ('header')



<link rel="stylesheet" href="/file/css/bootstrap.css" />





<link rel="stylesheet" href="{{asset('file/css/bootstrap.css')}}" />
<link rel="stylesheet" href="{{asset('/file/vendors/linericon/style.css')}}" />
<link rel="stylesheet" href="{{asset('file/css/themify-icons.css')}}" />
<link rel="stylesheet" href="{{asset('file/css/flaticon.css')}}" />
<link rel="stylesheet" href="{{asset('file/vendors/owl-carousel/owl.carousel.min.css')}}" />
<link rel="stylesheet" href="{{asset('file/vendors/lightbox/simpleLightbox.css')}}" />
<link rel="stylesheet" href="{{asset('file/vendors/nice-select/css/nice-select.css')}}" />
<link rel="stylesheet" href="{{asset('file/vendors/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('file/vendors/jquery-ui/jquery-ui.css')}}" />


<link rel="stylesheet" href="{{asset('file/css/style.css')}}" />
<link rel="stylesheet" href="{{asset('file/css/responsive.css')}}" />




<!--custom style -->
<style>
    .imageProductDetails{
        background-color: #fff;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
    }
    .product_image_area {
    padding: 120px 0px !important;
}


/* Custom CSS */
.zoom-container {
    overflow: hidden;
    position: relative;
    width: 100%;
  }

  .zoom-container img {
    transition: all 0.3s linear;
  }

  .zoom-container:hover img {
    transform: scale(1.1); /* You can adjust the scale value as needed */
  }


  @keyframes zoom-container {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.5, 1.5);
  }
  100% {
    transform: scale(1, 1);
  }
}
</style>
<!--custom style -->
<!--================Single Product Area =================-->

<div class="product_image_area bg-light">
      <div class="container">
<!--Alert Notification -->
<div class="container">
    
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
    
    @yield('content')
</div>
<!--Alert Notification -->
        <div class="row s_product_inner">
          <div class="col-lg-6 imageProductDetails">
            <div class="s_product_img d-flex justify-content-center zoom-container " >
            <img src="  /FlowerImages/{{$product->image}}" class="img-fluid"  alt=""/>
          
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
              <h3>{{$product->product_name}}</h3>
              <!--pricec-->
              <!-- <h2>$149.99</h2> -->
              <div class="mt-3 d-flex">
                 @if ($product->discount_price!=null)                             
                <h2 class="mr-4"> ${{$product->discount_price}}</h2>       
                <del style="display:none;">${{$product->price}}</del>
                @else
                <h2 class="mr-4">${{$product->price}}</h2>
                @endif
                </div>
              
              <!--pricec-->
              
              <ul class="list">
                <li>
                  <a class="active" href="#">
                    <span>Category</span> : Household</a
                  >
                </li>
                <li>
                  <a href="#"> <span>Availibility</span> : In Stock</a>
                </li>
              </ul>
              <p>
              {{$product->description}}
              </p>
              <div class="TEST">
              <LABel>Quantity</LABel>
              <form action="{{ url('addCartQuanty', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <div class="row">
                                     <div class="col-6 d-flex align-items-center">
                                       
                                    <input class="form-control main_btn" name="qunty" type="number" value="1">
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn  main_btn">Add to Cart Quanty </button>
                                    <!-- <a  href="{{ url('add_to_cart', $product->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> -->
                                </div>
                                </div>
                               
                            </div>
                            
                            
                         </form>
              </div>
              <!-- <div class="card_area">
                <a class="main_btn" href="#">Add to Cart</a>
                <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-diamond"></i>
                </a>
                <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-heart"></i>
                </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

 
    <!--================End Single Product Area =================-->


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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





  <script src="{{asset('file/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('file/js/popper.js')}}"></script>
  <script src="{{asset('file/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('file/js/stellar.js')}}"></script>
  <script src="{{asset('file/vendors/lightbox/simpleLightbox.min.js')}}"></script>
  <script src="{{asset('file/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('file/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('file/vendors/isotope/isotope-min.js')}}"></script>
  <script src="{{asset('file/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('file/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('file/vendors/counter-up/jquery.counterup.js')}}"></script>
  <script src="{{asset('file/js/mail-script.js')}}"></script>
  <script src="{{asset('file/js/theme.js')}}"></script>
  





    @include ('footer')
