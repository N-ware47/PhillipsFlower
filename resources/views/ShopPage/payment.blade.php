@include ('header');



<div class="container d-flex justify-content-center">
    <div class="row">
    <form action="/session" method="POST">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <button class="btn btn-primary btn-lg btn-block" type="submit" id="checkout-live-button">Payment</button>
      </form>
    </div>
</div>

@include ('footer');
