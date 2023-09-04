<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\insertProduct;
use App\Models\ShippingDetails;
use App\Models\PostBlog;
use Notification;


use App\Notifications\OrderNotification;


/*Email Send*/
use App\Mail\OrderEmail;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller


{
    //

     /* Admin Login */
     public function AdminControl(){
        $usertype=Auth::User()->name;
        $useremail=Auth::User()->email;

        if($useremail=='admin@gmail.com'){  
            return view('admin.dashboard');
        }else{
             return view('index');
            // return view('shipping');
            // return back()->withInput();
            // return redirect()->route('register');
          
        }
    }



    /**page url */

public function ShopPage(){

    $product=insertProduct::all();

    return view('ShopPage.product-shop',compact('product'));
}

public function createProduct(){
    return view('admin.insertProduct');
}

    /**page url */



public function index(){

    return view('index');
}



/**Insert Product */
public function adding_productAdmin(Request $request){
    $addProduct= new insertProduct;


    $addProduct->product_name=$request->product_title;
    $addProduct->product_category=$request->add_categories;

    $addProduct->product_name=$request->product_title;
    $addProduct->description=$request->product_description;
    $addProduct->price=$request->price;
    $addProduct->discount_price=$request->discount_price;
    $addProduct->quantity=$request->quantity;
    $addProduct->tags=$request->tags;
    // $addProduct->title=$request->add_categories;

    $image=$request->image;

    $imagename=time().'.'.$image->getClientOriginalExtension();

    $request->image->move('FlowerImages',$imagename);

    $addProduct->image=$imagename;
    $addProduct->save();

     return redirect()->back();
}
/**Insert Product */

/**single page */
public function productDetails($id){


    $product=insertProduct::find($id);
    // dd($product);
    return view('ShopPage.product-details', compact('product'));
}

public function singlepage(){
    return view('ShopPage.product-details');
}


public function addCartQuanty( Request $request,$id){
    
    $product = insertProduct::findOrFail($id);
    $productQuantity = insertProduct::find('quantity');
    
    $cart = session()->get('cart', []);
    if(isset($cart[$id])) {
        $cart[$id]['quantity']+=$request->qunty;
    }  else {
        $cart[$id] = [
            "product_name" => $product->product_name,
            "photo" => $product->image,
            "price" => $product->price,
            "productId" => $id,
            "discount" => $product->discount_price,
            "quantity" => $request->qunty,
        ];
    }


    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Proceed to cart - "Click The Icon"');   
}
/**single page */

/**cart */

public function cart(){
    return view('ShopPage.checkout');
}



public function update(Request $request)
{
    if($request->id && $request->quantity){
        $cart = session()->get('cart');
        $cart[$request->id]["quantity"] = $request->quantity;
        session()->put('cart', $cart);
        session()->flash('success', 'Cart successfully updated!');
    }
}

public function remove(Request $request)
{
    if($request->id) {
        $cart = session()->get('cart');
        if(isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
        session()->flash('success', 'Product successfully removed!');
    }
}

public function layoutpage(){
    
    return view('layout');
}
/**cart */


/**Shipping */

public function shippingDetailstest(Request $request){
    $shippingData = new ShippingDetails;
    
    $user = Auth::User()->name;
    
    $shippingData->first_name=$request->firstName;
    $shippingData->last_name=$request->lastName;
    $shippingData->company=$request->companyName;
    $shippingData->email_address=$request->email;
    $shippingData->address=$request->address;
    $shippingData->address2=$request->address2;
    $shippingData->country=$request->country;
    $shippingData->state=$request->state;
    $shippingData->zip=$request->zip;
    $shippingData->phone_number=$request->phoneNUmber;
    
    
    // $shippingData->save();
    $OrderMailData =[
        'user' => $user,
        'firstname' => $request->firstName,
        'lastname' => $request->lastName,
        'companyName' => $request->companyName,
        'email' => $request->email,
        'address' => $request->address,
        'address2' => $request->address2,
        'country' => $request->country,
        'state' => $request->state,
        'zip' => $request->zip,
        'phoneNumber' => $request->phoneNUmber
       ];  
      
       Mail::to("nnware6@gmail.com")->send(new OrderEmail($OrderMailData));
    // return view('Shipping.shippingDetails');
    return view('ShopPage.payment');

} 








public function sendEmail(){
    // $emailUser =  'nnware6@gmail.com';
    
    $user = ShippingDetails::select('last_name')->get();

    //  echo $email;
        

        $fistnameOrder = 'nichol';
        $lastnameOrder = 'Guinawatan';

        $details =[
            'firstname'=> $fistnameOrder,
            'lastname'=> $lastnameOrder,
        ];

    //     notification::send($user, new OrderNotification($details));


    // notification::to('nnware6@gmail.com')->send(new OrderNotification());

    Mail::to('nnware6@gmail.com')->send(new OrderEmail($details));
    // Notification::send($emailUser, new OrderNotification($details));
    return "Email sent successfully!";
     
}





public function store($request) {

 
    return redirect()->back();
}


public function mailsend(){
 
    $OrderMailData =[
        'name' => "nichol",
        'dob' => "guinawatan"
       ];  
      
       Mail::to("nnware6@gmail.com")->send(new OrderEmail($OrderMailData));
    
}


/** Post Page */

public function post(){



    return view('blog.post');
}

public function CreateBlog(){
    return view('blog.createPost');
}


public function blog(){

    $blog=PostBlog::all();
    return view('blog.blog', compact('blog'));
}


public function create_Blog(Request $request){

    $blog= new PostBlog;





    $blog->blog_title=$request->blog_title;
    $blog->blog_tags=$request->blog_tag;
    $blog->blog_description=$request->blog_description;
        $blog->blog_category=$request->blog_categories;

    $image=$request->feature_image;

    $imagename=time().'.'.$image->getClientOriginalExtension();

    $request->feature_image->move('FeatureImg',$imagename);

    $blog->feature_image=$imagename;
    $blog->save();

     return redirect()->back();
}



public function singleBLog($id){


    $blog=PostBlog::find($id);
    // dd($product);
    return view('blog.singlepage', compact('blog'));
}

/** Post Page */











}
