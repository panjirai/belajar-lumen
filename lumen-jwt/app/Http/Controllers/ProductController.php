<?php
namespace App\Http\Controllers;
 
use App\Product;
use Illuminate\Http\Request;
 
class ProductController extends Controller {
 
public function index()
{
$products = Product::all();
return response()->json($products);
}
 
public function store(Request $request)
{
Product::create($request->all());
return response()->json([
'message' => 'Product Berhasil Ditambah'
]);
}
 
public function show($id)
{
$product = Product::find($id);
return response()->json($product);
}
 
public function update(Request $request, $id)
{
$product = Product::find($id);
$product->update($request->all());
 
return response()->json([
'message' => 'Product Berhasil DiUpdate'

]);
}
 
public function delete($id)
{
Product::destroy($id);
 
return response()->json([
'message' => 'Product Berhasil Di delete'

]);
}
 
 
}