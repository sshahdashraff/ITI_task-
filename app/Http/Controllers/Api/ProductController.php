<?php

namespace App\Http\Controllers\Api;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {

        $products=Product::get();

        return response()->json(['data'=>$products]);
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'availability' => 'required|in:available,unavailable',
            'category_id' => 'required|exists:categories,id',
            'photo' => 'required',
        ]);

        $image = $request->file('photo');
        $imageName=$request->photo;
        if ($image) {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        }
        $product=Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'availability' => $request->availability,
            'category_id' => $request->category_id,
            'photo' => $imageName,
        ]);


    return response()->json(['data'=>$product]);

}
function show($id)
    {
        $product=Product::find($id);
       if($product){
        return response()->json(['data'=>$product]);
       }
        return response()->json(['massage'=>'product not found']);

    }
    function destroy($id)
    {
       $product=Product::find($id);
       if($product){
$product->delete();
return response()->json(['massage'=>'delete sucssfully']);
       }
      else{
      return response()->json(['massage'=>'product not found']);
      }
    }


    function edit($id,Request $request)
    {

        $product = Product::find($id);

        $request->validate([
            'availability' => 'in:available,unavailable',
            'category_id' => 'exists:categories,id',
        ]);
        if($product){

            $product->update($request->all());
        return response()->json(['data'=>$product,'massage'=>'update sucssfuly']);
    }
        return response()->json(['massage'=>'product not found']);
    }
}