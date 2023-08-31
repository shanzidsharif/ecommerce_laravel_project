<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Order extends Model
{
    private static $order;
    use HasFactory;
    public static function newOrder($request, $id)
    {
        self::$order = new Order();
        self::$order->customer_id = $id;
        self::$order->order_date = date('Y-m-d');
        self::$order->order_timestamp = strtotime(date('Y-m-d'));
        self::$order->order_total = Session::get('total');
        self::$order->tax_total = Session::get('tax') ;
        self::$order->shipping_total = Session::get('order_total');
        self::$order->delivery_address = $request->address ;
        self::$order->payment_type = $request->payment_type ;
        self::$order->save();
        return self::$order;
    }
}
