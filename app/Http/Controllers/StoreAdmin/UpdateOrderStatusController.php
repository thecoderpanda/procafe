<?php

namespace App\Http\Controllers\StoreAdmin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateOrderStatusController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth:store');
    }
    public function updateStatus(Request $request,$id){
////        return $request;
//        return $id;

        $data = request()->validate([
            'status'=>'required'
        ]);

        if(Order::whereId($id)->update($data)){
            return back();
        }
            return back();
    }
}
