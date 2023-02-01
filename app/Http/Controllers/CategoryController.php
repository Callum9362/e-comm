<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
   public function index()
   {
       return Category::all();
   }

   public function store(Request $request)
   {
       $validator = Validator::make($request->all(), [
           'name' => 'required|unique:categories|max:255',
           'description' => 'required|max:255',
       ]);

       if ($validator->fails()) {
           return response()->json(['errors' => $validator->errors()], 422);
       }

       $category = new Category;
       $category->name = $request->get('name');
       $category->description = $request->get('description');
       $category->save();

       return response()->json(['data' => $category], 201);
   }

   public function update($id, Request $request)
   {
       $category = Category::find($id);

       if(!$category) {
           return response()->json(['error' => 'Customer not found'], 404);
       }

       $validator = Validator::make($request->all(), [
           'name' => 'required|unique:categories|max:255',
           'description' => 'required|max:255',
       ]);

       if ($validator->fails()) {
           return response()->json(['errors' => $validator->errors()], 422);
       }

       $category->name = $request->get('name');
       $category->description = $request->get('description');
       $category->save();

       return response()->json([ 'msg' => "Category Updated!", 'data' => $category], 201);
   }

   public function delete($id)
   {
       $category = Category::find($id);

       if (!$category) {
           return response()->json(['error' => 'Category not found'], 404);
       }

       $category->delete();
       return response()->json(['msg' => 'Category deleted successfully'], 201);
   }


}
