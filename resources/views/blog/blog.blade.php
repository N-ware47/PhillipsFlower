@include ('header')














<div class="container">
  <main>
    <div class="py-5 text-center">

    <img src="/blogflower.jpg"  class="img-fluid" alt="">     
    </div>

    <div class="row g-5">
        
                
     <div class="col-md-5 col-lg-4 order-md-last"> 
        @foreach($blog as $blog)
        <a href="{{url('singleBLog',$blog->id)}}">
            <div class="card" style="width: 9vw;">
            <img style="width: 192px; border:none;" class="img-thumbnail" src="/Featureimg/{{$blog->feature_image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$blog->blog_title}}</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
            </div>
        </a>
      @endforeach
        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        
           test

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
    
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>