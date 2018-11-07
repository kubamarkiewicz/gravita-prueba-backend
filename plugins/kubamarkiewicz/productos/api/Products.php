<?php namespace KubaMarkiewicz\Productos\Api;

use Illuminate\Routing\Controller;
use KubaMarkiewicz\Productos\Models\Product;

class Products extends Controller
{

    public function index()
    {
        $query = Product::select();
        $result = $query->get(); 

        return response()->json($result, 200, array(), JSON_PRETTY_PRINT);
    }

    public function get($id)
    {
        $result = Product::find($id);

        return response()->json($result, 200, array(), JSON_PRETTY_PRINT);
    }

    public function create()
    {
        $product = new Product();
        $product->name = request('name');
        $product->description = request('description');
        $product->stock = request('stock');
        $product->save();

        return response()->json($product->id, 201);
    }

    public function update($id)
    {      
        $product = Product::findOrFail($id);
        $product->name = request('name');
        $product->description = request('description');
        $product->stock = request('stock');
        $product->save();

        return response()->json('', 200);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return response()->json(null, 204);
    }

}