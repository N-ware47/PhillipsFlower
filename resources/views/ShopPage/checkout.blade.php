@include ('header')


<style>
    .cart_update{
        width: 100px;
    padding-left: 30px;
    height: 40px;
    outline: none;
    box-shadow: none;
    }
</style>


<!--Alert Notification -->

 <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

 <!--================Cart Area =================-->
 <section class="cart_area">
      <div class="container" style="max-width:50%;">
        <div class="cart_inner">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
              @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php 

                if($details['discount']!=null){
                  $total += $details['discount'] * $details['quantity'];
                }else{
                  $total += $details['price'] * $details['quantity'];
                }
                
              
                @endphp
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img
                          src="{{ asset('/FlowerImages') }}/{{ $details['photo'] }}"
                          alt="" style="width: 152px;"/>
                      </div>
                      <div class="media-body">
                        <p>{{ $details['product_name'] }}</p> 

                          <!--Delete button -->
                <table id="cart" class="">
                  <tr data-id="{{ $id }}">
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm me-1 mb-2 cart_remove"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>

                @php
               
                
                
                @endphp
              </table>
                <!--Delete button -->
                      </div>
                    </div>
                  </td>
                  <td>
                    <!--test-->
                    <!-- <h2>$149.99</h2> -->
              <div class="mt-3 d-flex">
                 @if ($details['discount']!=null)                             
                <h2 class="mr-4"> ${{ $details['discount']}}</h2>       
                <del style="display:none;">${{$details['price']}}</del>
                @else
                <h2 class="mr-4">${{$details['price']}}</h2>
                @endif
                </div>
                    <!--test-->
                    <!-- <h5>${{ $details['price'] }}</h5>
                     -->
                  </td>
                  <td>
                    <div class="product_count">
                      
                    <table id="cart" class="">
              <tbody>
             <tr data-id="{{ $id }}">
                <td data-th="Quantity" style="border:0px !important;">
                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                </td>          
                </tr>
              </tbody>
          </table>

                    </div>
                  </td>
                  <td>
                  @if ($details['discount']!=null)  
                  <h5>${{ $details['discount'] * $details['quantity'] }}</h5>
                  @else
                    <h5>${{ $details['price'] * $details['quantity'] }}</h5>
                    @endif
                  </td>
                </tr>

                @endforeach
                <!-- Checking iF there is cart -->       
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Subtotal</h5>
                  </td>
                  <td>
                    <h5>${{ $total }}</h5>
                  </td>
                </tr>
            
                <tr class="out_button_area">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="checkout_btn_inner">
                      <a class="gray_btn" href="{{ url('/product-shop') }}">Continue Shopping</a>
                    
                      <!-- <a class="main_btn" href="#">Proceed to checkout</a> -->
                      <form action="/checkout" method="POST">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <button class="btn  btn-lg btn-block main_btn" type="submit" id="checkout-live-button">Shipping To</button>
                      </form>
                      <!-- <form action="/delivery" method="POST">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <button class="btn  btn-lg btn-block main_btn" type="submit" id="checkout-live-button">Deliver</button>
                      </form> -->


                      <a class="btn  btn-lg btn-block main_btn" href="{{ route('deliverypagelink') }}"> Deliver To</a>



                    </div>
                    
                    @else
                <div>   <a class="nav-link navHover" href="{{ url('/product-shop') }}" style="color:#71cd14;"><h1 class="text-center" style="color:#71cd14;">Your cart is empty.</a></div>
                <!-- Checking iF there is cart -->
             @endif
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--================End Cart Area =================-->

<!-- 
    <div class="container">
    <button class="btn  btn-lg btn-block main_btn" type="submit" id="checkout-live-button">Proceed to checkout</button>
    <a class="btn  btn-lg btn-block main_btn" href="{{url('alertTest')}}"> test</a>
    </div>


     -->


  


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
    
    $(".cart_update").change(function (e) {
        e.preventDefault();
    
        var ele = $(this);
    
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
    
    $(".cart_remove").click(function (e) {
        e.preventDefault();
    
        var ele = $(this);
    
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
    
</script>


@include ('footer');