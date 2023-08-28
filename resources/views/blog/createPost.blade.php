
@include ('/header');


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Boostrap Script-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--Boostrap Script-->
    <title>ADD NEW PRODUCT</title>
</head>
<body>

<h1 class="text-center">ADD New Product</h1>
    





@if(Auth::User()->email !== "admin@gmail.com")
        @php return back(); @endphp


        @else

<div class="container">
    
<form  action="{{url('/create_Blog')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3" style="display:flex; flex-direction: column;">
    <label for="exampleInputEmail1" class="form-label">Blog Title</label>
    <input type="text" name="blog_title" class="form-control" id="blog_title" aria-describedby="emailHelp">

    <label for="exampleInputEmail1" class="form-label">Blog Description</label>
    <input type="text" name="blog_description" class="form-control" id="blog_description" aria-describedby="emailHelp">

    
   
    <label for="exampleInputEmail1" class="form-label">Blog Categories</label>
    
    <select style="border: 1px solid black; padding: 11px; width: 17%;" name="blog_categories" id="blog_categories">
      <option value="" select=""> Add Category</option>
      <option>New Kinds Of Flower </option>
      <option>Summer Flower</option>
      <option>Holiday Flower</option>
      <option>Top Flower</option>
    </select>
    
    <label for="exampleInputEmail1" class="form-label">Add Image</label>
    <input type="file" name="feature_image" class="form-control" id="categories" aria-describedby="emailHelp">

  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>















</body>
</html>


@endif