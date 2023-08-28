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






<div style="padding:0px 0px 50px;" class="head text-center"><h1>BLOG</h1></div>




<div class="container bg-light ps-20 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row">
        <div class="col-12"><h1 class="fs-1 text-center"> {{$blog->blog_title}}</h1></div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-6 ">
        <img src="/Featureimg/{{$blog->feature_image}}" class="img-fluid"  alt=""/>
        </div>
        <div class="col-6 d-flex justify-content-center flex-column">
        <p>{{$blog->blog_description}}</p>
        </div>
    </div>
</div>











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