<?php

namespace App\Http\Controllers\WEBAPI;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Store;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Request $request){
                $data = $request->all();
                $orderItems = $request->cart;
                unset($data['cart']);
                $store_id = Store::all()->where('view_id','=',$request->store_id)->first()['id'];
                $data['store_id'] = $store_id;
                $data['order_unique_id'] = "ODR-".time();
                if(Order::create($data)){
                    $order_id = Order::all()->where('order_unique_id','=', $data['order_unique_id'])->first()['id'];
                    $items = array();
                    foreach($orderItems as $value){
                        $temp = [];
                        $temp['order_id'] = $order_id;
                        $product = Product::all()->where('id','=',$value['itemId'])->first();
                        $temp['name'] = $product['name'];
                        $temp['price'] = $product['price'];
                        $temp['quantity'] =  $value['count'];
                        $items[] = $temp;
                    }
                    if(OrderDetails::insert($items)){
                        $response_data = Order::all()->where('customer_phone','=',$request->customer_phone);
                        $response = [];
                        foreach ($response_data as $value)
                            $response[] = $value;
                        return response()->json([
                            "success" => true,
                            "status" => "success",
                            "payload" => [
                                'data' => $response
                            ]
                        ], 200);
                    }

                 }
    }
    public function fetch(Request $request){
            $response_data = Order::all()->where('customer_phone','=',$request->customer_phone)->sortByDesc('id');
            $response = [];

            foreach ($response_data as $value) {
                $value['store_name'] = Store::all()->where('id','=',$value['store_id'])->first()['store_name'];
                $response[] = $value;
            }
            return response()->json([
                "success" => true,
                "status" => "success",
                "payload" => [
                    'data' => $response
                ]
            ], 200);
        }

}
