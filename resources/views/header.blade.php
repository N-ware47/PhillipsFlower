 
 
 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Phillips Flower</title>
  <!-- Bootstrap CSS -->


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
<link rel="stylesheet" href="file/css/style.css" />
<link rel="stylesheet" href="file/css/responsive.css" /> 

  


 



  
</head>
 
 
 
 <!--================Header Menu Area =================-->
 <header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
              <p>Phone: 1-800-356-7257</p>
              <p>email: PhillipsFlower@gmail.com</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              <ul class="right_side">
                <li>
                  <a href="cart.html">
                    gift card
                  </a>
                </li>
                <li>
                  <a href="tracking.html">
                    track order
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="{{ url('/phillips-flower') }}">
            <img src="/file/img/logosmal.gif" style="margin: 20px; width: 200px !important; " class="img-thumbnail" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0" style="align-items: center;">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/phillips-flower') }}">Home</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="{{ url('/product-shop') }}" class="nav-link dropdown-toggle">Shop</a>
    
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="{{ url('/blog') }}" class="nav-link dropdown-toggle">Blogs</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="tracking.html">Tracking</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="elements.html">Elements</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                <div class="cart">
                @if(auth()->check())
                <a  title="Add to Cart" class="btn "style="background: rgba(86,68,176,.03);  font-weight: 600;  border-radius: 12px; margin-right: 10px;" href="#">hi @php echo Auth::User()->name @endphp</a>
                @else
                <a  title="Add to Cart" class="btn "style="background: rgba(86,68,176,.03);  font-weight: 600;  border-radius: 12px; margin-right: 10px;" href="login">Login</a>
               @endif
       
      </div>

      @include ('carticon')
       
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Menu Area =================-->