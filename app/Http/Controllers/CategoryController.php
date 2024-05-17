<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //



    public function index(){

        $category=Category::all();

        return response()->json(['data'=>$category],200);
    }


    public function addCategory(Request $request){

        $category=new Category();
        $category->category=$request->name;
        $category->save();
        return response()->json(['data'=>$category],201);
    }

    public function updateCategory(Request $request,$id){

        $category=Category::find($id);
        if(!$category){
            return response()->json(['message'=>'Category not found'],404);
        }
        $category->category=$request->name;
        $category->save();
        return response()->json(['data'=>$category],201);
    }
}
