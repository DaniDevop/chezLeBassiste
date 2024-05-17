<?php

namespace App\Http\Controllers;

use App\Models\Custumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustumerController extends Controller
{
    //


    public function index(){
        $custumer=Custumer::all();

        return response()->json(['data'=>$custumer]);
    }


    public function addCustumer(Request $request){

        if(Custumer::where('email',$request->email)->orWhere('phone',$request->phone)->first()){
            return response()->json(['message'=>'CL utilisateur existe déjà '],409);
        }

        $custumer=new Custumer();
        $custumer->name=$request->name;
        $custumer->email=$request->email;
        $custumer->phone=$request->phone;
        $custumer->adresse=$request->adresse;
        $custumer->password= Hash::make( $request->password)  ;
        $custumer->save();

        return response()->json(['data'=>$custumer]);
    }


    public function updateCustumer(Request $request){

        $custumer=Custumer::where('email',$request->emailOrTel)->orWhere('tel',$request->emailOrtel)->first();

        if(!$custumer){
            return response()->json(['message'=>'Custumer not found'],404);
        }

        $custumer->name=$request->name;
        $custumer->email=$request->email;
        $custumer->phone=$request->phone;
        $custumer->adresse=$request->adresse;
        $custumer->password= Hash::make( $request->password)  ;
        $custumer->update();
    }
}
