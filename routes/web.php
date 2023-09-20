<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Mail\OrderEmail;
use Illuminate\Support\Facades\Mail;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/admin',[AdminController::class,'AdminControl']);

Route::get('/admin',[AdminController::class,'AdminControl']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




/**home page */
Route::get('/phillips-flower',[AdminController::class,'index']);
/**home page */



/**page url */
Route::get('/product-shop',[AdminController::class,'ShopPage']);
Route::get('/create-product',[AdminController::class,'createProduct']);
/**page url */

/** create product post */
Route::POST('/createProduct',[AdminController::class,'adding_productAdmin']);

Route::POST('/test',[AdminController::class,'test']);

/**single product page details */
Route::get('/product-details/{id}',[AdminController::class,'productDetails']);
Route::get('/singlepage',[AdminController::class,'singlepage']);

Route::post('/addCartQuanty/{id}',[AdminController::class,'addCartQuanty']);


/**cart page */
Route::get('/cart',[AdminController::class,'cart'])->name('cartpage');
Route::patch('update-cart', [AdminController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [AdminController::class, 'remove'])->name('remove_from_cart');
/**cart page */

/**Shipping  */
// Route::post('/ship',[AdminController::class,'ship']);

/**Shipping  */




/**Stripe Payment */
Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::post('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');
Route::get('/payment',[StripeController::class,'payment']);
/**Stripe Payment */





Route::post('/posts', 'AdminController@store')->name('posts');



Route::POST('/shippingDetailstest',[AdminController::class,'shippingDetailstest']);




Route::get('/sendEmail',[AdminController::class,'sendEmail']);



Route::get('/mailsend',[AdminController::class,'mailsend']);


Route::get('mailsend', function () {
    
   $OrderMailData =[
    'name' => "nichol",
    'dob' => "guinawatan"
   ];  
  
   Mail::to("nnware6@gmail.com")->send(new OrderEmail($OrderMailData));
  dd("email send");   

//WORK CODE 
// $OrderMailData = "Nichol";
// Mail::to('nnware6@gmail.com')->send(new OrderEmail());
// return view('index');
//END WORK CCODE



});


/**post Page */

Route::get('/post',[AdminController::class,'post']);
Route::get('/CreateBlog',[AdminController::class,'CreateBlog']);
Route::get('/blog',[AdminController::class,'blog']);



Route::POST('/create_Blog',[AdminController::class,'create_Blog'])->name('blog');

Route::get('/singleBLog/{id}',[AdminController::class,'singleBLog']);



/**post Page */



/*delivery*/
Route::get('/deliverypagelink',[AdminController::class,'deliverypagelink'])->name('deliverypagelink');
Route::post('/delivery', [AdminController::class, 'delivery'])->name('delivery');
/*end delivery*/