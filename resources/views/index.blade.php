
@php use App\Models\PostBlog; @endphp
@include ('header')




<section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="imagecenter d-flex justify-content-center"  style="padding:50px 0px;" >
           <img src="file/phillips-script-logo.png" class="img-thumbnail float-start" alt="...">
        </div>
       
        <div class="banner_content row">
          <div class="col-lg-12">
    
            <h1 class="TEXT-CENTER FS-1 FW-fw-bold" style="font-size: 65px; color: #fff;">PHILLIPS</h1>
            <h1 class="TEXT-CENTER FS-1 FW-fw-bold" style="color:#fff;">FLOWER</h1>
        
          </div>
        </div>
      </div>
    </div>
  </section>


  @php $blog=PostBlog::all(); $test = "wee"; @endphp
  @foreach($blog as $blog)
  <div class="card" style="width: 18rem;">
  <img src="/Featureimg/{{$blog->feature_image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$blog->blog_title}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endforeach
  

@include ('footer')