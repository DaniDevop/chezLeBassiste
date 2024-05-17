<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    //



    public function index(){

        $orderAll=Order::all();
        return response()->json(['data'=>$orderAll]);
    }


    public function addCommandes(){}
}
