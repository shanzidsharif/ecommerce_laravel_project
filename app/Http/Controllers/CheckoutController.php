<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use ShoppingCart;
use Session;

class CheckoutController extends Controller
{
    private  $customer, $order, $order_detail;
    public function index()
    {
        $this->customer = Customer::where('id', Session::get('customer_id'))->first();
        return view('website.checkout.index',[
            'customer' => $this->customer,
        ]);
    }
    public function cashOnDelivery(Request $request)
    {


        if(Session::get('customer_id'))
        {
            $this->customer = Customer::where('id', Session::get('customer_id'))->first();
        }
        else
        {
            $this->validate($request,[
               'name' => 'required',
               'email' => 'required|unique:customers,email',
               'mobile' => 'required|unique:customers,mobile',
               'delivery_address' => 'required',
            ]);
            $this->customer =Customer::newCustomer($request);
        }
        Session::put('customer_id',$this->customer->id );
        Session::put('customer_name',$this->customer->name );

        $this->order = Order::newOrder($request, $this->customer->id);

        $this->order_detail = OrderDetail::newOrderDetail($request, $this->order->id);

        return redirect('/complete-order')->with('message', "Your Order completed successfully. We will contact you very soon.");
    }
    public function completeOrder()
    {
        return view('website.checkout.complete');
    }

}
