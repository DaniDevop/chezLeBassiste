<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //



    public function index(){

        $category=Category::all();

        return $category;
    }


    public function addCategory(Request $request){

        $category=new Category();
        $category->category=$request->category;
        $category->save();
        return response()->json(['data'=>$category],201);
    }

    public function updateCategory(Request $request,$id){

        $category=Category::find($id);
        if(!$category){
            return response()->json(['message'=>'Category not found'],404);
        }
        $category->category=$request->category;
        $category->touch();
        $category->save();
        return response()->json(['data'=>$category],201);
    }

    public function getCategoryById( $id){


        $category=Category::find($id);
       if( !$category){
        return response()->json(['message'=>'Category not found'],404);
       }
        return  $category;
    }
}
