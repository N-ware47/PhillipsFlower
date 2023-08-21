



<a href="{{ url('/cart') }}" class="btn  position-relative" style="background: rgba(86,68,176,.03);  border-radius: 12px;">
<i class="ti-shopping-cart"></i>
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill " style="background-color:none; color:#71cd14">
  {{ count((array) session('cart')) }}
    
  </span>
</a>
