




@include ('header')





<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


<div class="container">
  <!-- <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Checkout form</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div> -->

  <div class="row">
 
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">  {{ count((array) session('cart')) }}</span>
      </h4>
        <ul class="list-group mb-3">
      @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
    
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{ $details['product_name'] }}</h6>
            <small class="text-muted color:#71cd14;">Quantity: <span style="color:#71cd14;">{{ $details['quantity']}}</span></small>
          </div>
          <span class="text-muted">${{ $details['price'] * $details['quantity'] }}</span>
        </li>
        @endforeach
      @endif
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>${{ $total }}</strong>
        </li>
      
     
    </ul>
      <div class="checkout">
      <!-- <form action="/session" method="POST">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <button class="btn btn-primary btn-lg btn-block" type="submit" id="checkout-live-button"> Go to Checkout</button>
      </form> -->
      </div>
     
<!-- 
      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form> -->
    </div>
   



    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form  action="{{url('/shippingDetailstest')}}" method="POST" enctype="multipart/form-data">
@csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="companyName">Company Name <span class="text-muted">(Optional)</span></label>
          <div class="input-group">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" name="companyName" id="companyName" placeholder="" required="">
            <div class="invalid-feedback" style="width: 100%;">
            companyName is Optional.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required="">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <input type="text" class="form-control" name="country" id="country" placeholder="" required="">
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <input type="text" class="form-control" name="state" id="state" placeholder="" required="">
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" name="zip" id="zip" placeholder="" required="">
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <label for="phoneNUmber">Phone Number</label>
            <input type="tel" class="form-control" name="phoneNUmber" id="phoneNUmber" placeholder="" required="">
            <div class="invalid-feedback">
             Phone Number required
            </div>
          </div>
        </div>
        <hr class="mb-4">

        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>

      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>





  
<!-- 
<a class="btn btn-primary">Send Email Test</a> -->

@include ('footer');







































