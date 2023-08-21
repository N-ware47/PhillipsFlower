












@include ('header')


 <!--================Category Product Area =================-->
 <section class="cat_product_area section_gap" style="padding: 50px 0px 10px !important;">
      <div class="container bg-light">
        <div class="row flex-row-reverse" style="height: 100%;">
          <div class="col-lg-9">
            <div class="product_top_bar">
              <div class="left_dorp">
                <select class="sorting">
                  <option value="1">Default sorting</option>
                  <option value="2">Default sorting 01</option>
                  <option value="4">Default sorting 02</option>
                </select>
                <select class="show">
                  <option value="1">Show 12</option>
                  <option value="2">Show 14</option>
                  <option value="4">Show 16</option>
                </select>
              </div>
            </div>
            
            <div class="latest_product_inner">
              <div class="row">

              @foreach($product as $product)
                <div class="col-lg-4 col-md-6">
                  <div class="single-product" style="border: 1px solid #bfbfbf; border-radius: 5px;">
                    <div class="product-img">
                      <img
                        class="card-img"
                        src="/FlowerImages/{{$product->image}}"
                        alt=""
                      />
                      <div class="p_icon">
                        <a href="{{url('product-details',$product->id)}}">
                          <i style=" top: 10px !important; position: relative;" class="ti-eye"></i>
                        </a>
                        <a href="{{url('singlepage')}}">
                          <i  style=" top: 10px !important;position: relative;" class="ti-heart"></i>
                        </a>
                        <!-- <a href="#">
                          <i class="ti-shopping-cart"></i>
                        </a> -->
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="#" class="d-block">
                        <h4>{{$product->product_name}}</h4>
                      </a>
                      <div class="mt-3">
                        <!-- <span class="mr-4">$25.00</span>
                        <del>$35.00</del> -->

                        @if ($product->discount_price!=null)
                                    
                        <span class="mr-4"> ${{$product->discount_price}}</span>       
                        <del style="display:none;">${{$product->price}}</del>
                        @else
                        <span class="mr-4">${{$product->price}}</span>
                        @endif
                        <!-- Product price-->

                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

          <div class="col-lg-3">
           
          </div>
        </div>
      </div>
    </section>
    <!--================End Category Product Area =================-->



    
@include ('footer')