<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    //


    public function index(){

        $produit=Product::all();
        return response()->json(['produit'=>$produit]);
    }

    public function addProduct(Request $request){

        $produit= new Product();
        $produit->designation=$request->designation;
        $produit->stock=$request->stock;
        $produit->description=$request->description;
        $produit->price=$request->price;
        $produit->profile_one="";
        $produit->profile_two="";
        $produit->profile_third="";
        if($request->hasFile('image_1')){
            $produit->profile_one=$request->file('image_1')->store('image','public');

        }
        if($request->hasFile('image_2')){
            $produit->profile_two=$request->file('image_1')->store('image','public');

        }
        if($request->hasFile('image_3')){
            $produit->profile_third=$request->file('image_1')->store('image','public');

        }
        $produit->save();

        return response()->json(['data'=>$produit],201);
    }


    public function updateProduct(Request $request,$id){

        $produit= Product::find($id);
        if(!$produit){

            return response()->json(['message'=>'produit not found'],404);
        }


        $produit->designation=$request->designation;
        $produit->stock=$request->stock;
        $produit->description=$request->description;
        $produit->price=$request->price;
        if($request->hasFile('image_1')){
            $produit->profile_one=$request->file('image_1')->store('image','public');
            Storage::delete('storage/'. $produit->profile_one);

        }
        if($request->hasFile('image_2')){
            $produit->profile_two=$request->file('image_2')->store('image','public');
            Storage::delete('storage/'. $produit->profile_two);


        }
        if($request->hasFile('image_3')){
            $produit->profile_third=$request->file('image_3')->store('image','public');
            Storage::delete('storage/'. $produit->profile_third);

        }
        $produit->save();

        return response()->json(['data'=>$produit],201);
    }
}
