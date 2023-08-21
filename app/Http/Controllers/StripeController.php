<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use App\Models\order;
use App\Models\User;

class StripeController extends Controller
{
    public function checkout(Request $request){
         
        if(Auth::id()){
        foreach (session('cart') as $id => $details) {
//   $usr=Auth::User()->id;
            $order = new order;

            $OrderName= $details['product_name'];
            $OrderPrice= $details['price'];
            $OrderQuantity= $details['quantity'];
            $OrderPhoto= $details['photo'];
            $order->order_product_title_name = $OrderName;
            $order->order_product_title_name = $OrderPrice;
            $order->order_product_title_name = $OrderQuantity;
            $order->order_product_title_name = $OrderPhoto;
        
            $usr=Auth::user()->email;
            $order->save();
            session()->flash('alert', 'nice');
            return view('shipping.shippingDetails');
        }
    }else{
        echo "user is not log in";
        // return redirect()->guest(route('login'))->with('alert', 'proceed to Checkout');
        return redirect()->guest(route('register'));        
        // return view('auth.register');
    }

  



}
public function session(Request $request)
{

  
    if(Auth::user()){
    
    $productItems = [];

    \Stripe\Stripe::setApiKey(config('stripe.sk'));

    foreach (session('cart') as $id => $details) {

 $product_name = $details['product_name'];
        $total = $details['price'];
        $quantity = $details['quantity'];
        $discount = $details['discount'];
  $two0 = "00";
        $unit_amount = "$total$two0";
        $unit_amountdiscount = "$discount$two0";
        if($details['discount']!=null){
            /*test*/
            $quantity = $details['quantity'];
        $productItems[] = [
            'price_data' => [
                'product_data' => [
                    'name' => $product_name,
                ],
                'currency'     => 'USD',
                'unit_amount'  => $unit_amountdiscount,
            ],
            'quantity' => $quantity
        ]; 
            /*test*/
          }else{
           /*test*/
           $quantity = $details['quantity'];
        $productItems[] = [
            'price_data' => [
                'product_data' => [
                    'name' => $product_name,
                ],
                'currency'     => 'USD',
                'unit_amount'  => $unit_amount,
            ],
            'quantity' => $quantity
        ]; 
           /*test*/
          }

       
        
        // $two0 = "00";
        // $unit_amount = "$total$two0";

        // $productItems[] = [
        //     'price_data' => [
        //         'product_data' => [
        //             'name' => $product_name,
        //         ],
        //         'currency'     => 'USD',
        //         'unit_amount'  => $unit_amount,
        //     ],
        //     'quantity' => $quantity
        // ]; 

    

     //inserting data in to order databased
     $OrderName= $details['product_name'];
     $OrderPrice= $details['price'];
     $OrderQuantity= $details['quantity'];
     $OrderPhoto= $details['photo'];

     $useremail=Auth::User()->email;
     
    $OrderTotalPrice = $OrderPrice * $OrderQuantity;

     $order= new order;
     $order->order_product_title_name = $OrderName;
     $order->order_price = $OrderPrice;
     $order->order_quantity = $OrderQuantity;
     $order->order_product_image = $OrderPhoto;

     $order->order_total_price = $OrderTotalPrice;
  
     $order->order_email = $useremail;
     $order->save();
       
    

    }

        
       

    $checkoutSession = \Stripe\Checkout\Session::create([
        'line_items'            => [$productItems],
        'mode'                  => 'payment',
        'allow_promotion_codes' => true,
        'metadata'              => [
            'user_id' => "0001"
        ],
        
        'success_url' => route('success'),
        'cancel_url'  => route('cancel'),
    ]);


       
  $request->session()->forget('cart');
  return redirect()->away($checkoutSession->url);
   

}elseif (Auth::user()){
    return view('shipping');
}

else{
    return view('auth.register');

}
}

public function success()
{
    // return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";

    return view('SuccessPayment.success');
}

public function cancel()
{
    return view('cancel');
}
}
