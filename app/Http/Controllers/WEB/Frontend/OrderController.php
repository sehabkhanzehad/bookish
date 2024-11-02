<?php

namespace App\Http\Controllers\WEB\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use Auth;
class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderProducts')->where('user_id', Auth::id())->latest()->get();
        return view('newFrontend.pages.order-list', compact('orders'));
    }

    public function order_list($phone) // ok
    {
        $orders = Order::with('orderProducts')->where('order_phone', $phone)->latest()->get();
      	$order_inv = Order::with('orderProducts')->where('order_phone', $phone)->first();

        return view('newFrontend.pages.order-list', compact('orders', 'order_inv'));
    }
  	public function thanks_page($phone) // ok
    {
      	$order_inv = Order::with('orderProducts')->where('order_phone', $phone)->first();
        return view('newFrontend.pages.thanks', compact('order_inv'));
    }

  	public function downloadFile($orderId,$productId){
  	    $productDetails=Product::find($productId);
  	    $file=$productDetails->pdf_file;
  	    return response()->download(public_path($file));
  	}

    public function show($id) // ok
    {
        $order = Order::with('user', 'orderProducts')->findOrFail($id);

        return view('newFrontend.pages.order-details', compact('order'));
    }

    // public function print($id)
    // {
    //     $order = Order::with('user', 'orderProducts')->findOrFail($id);

    //     return view('frontend.order.print', compact('order'));
    // }
}
