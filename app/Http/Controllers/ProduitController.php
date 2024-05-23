<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;


class ProduitController extends Controller
{
    //


    public function index(){


        $produit=Product::all();
        return $produit;
    }

    public function addProduct(Request $request)
    {
        $produit = new Product();
        $produit->designation = $request->designation;
        $produit->stock = $request->stock;
        $produit->description = $request->description ?: "";
        $produit->price = $request->price;
        $produit->profile_one = "";
        $produit->profile_two = "";
        $produit->profile_third = "";

        if ($request->hasFile('image_1')) {
            $file1 = $request->file('image_1');
            $file1->store('product_image');
            $produit->profile_one =  $file1->hashName() ;
        }
        if ($request->hasFile('image_2')) {
            $file2 = $request->file('image_2');
            $file2->store('product_image');
            $produit->profile_one =  $file2->hashName() ;
        }
        if ($request->hasFile('image_3')) {
            $files = $request->file('image_3');
            $files->store('product_image');
            $produit->profile_one =  $files->hashName() ;
        }

        $produit->save();

        return response()->json(['data' => $produit], 201);
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

        if ($request->hasFile('image_1')) {
            $file1 = $request->file('image_1');
            $file1->store('product_image');
            $produit->profile_one =  $file1->hashName() ;
        }
        if ($request->hasFile('image_2')) {
            $file2 = $request->file('image_2');
            $file2->store('product_image');
            $produit->profile_one =  $file2->hashName() ;
        }
        if ($request->hasFile('image_3')) {
            $files = $request->file('image_3');
            $files->store('product_image');
            $produit->profile_one =  $files->hashName() ;
        }

        $produit->save();

        return response()->json(['data'=>$produit],201);
    }

    public function getProductById($id){
        $produit= Product::find($id);
        if(!$produit){

            return response()->json(['message'=>'produit not found'],404);
        }
        return $produit;
    }

    public function getFile(Request $filename)
    {

     $file = Storage::get('storage/' . $filename->image);

    $type = Storage::mimeType('storage/' . $filename->image);

    $response = Response::make($file, 200);

    $response->header("Content-Type", $type);

    return $response;
    }


}
