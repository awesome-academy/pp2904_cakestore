<?php
namespace App\Contracts\Repositories;

use App\Models\Product;
use App\Contracts\Interfaces\ProductInterface;
use App\Http\Requests\ProductFormRequest;

class ProductRepository implements ProductInterface
{
    public function getAll()
    {
        return Product::all();
    }

    public function createNew(ProductFormRequest $request)
    {
        return Product::create([
            'name' => $request->get('name'),
            'id_type' => $request->get('id_type'),
            'description' => $request->get('description'),
            'unit_price' => $request->get('unit_price'),
            'promotion_price' => $request->get('promotion_price'),
            'image' => $request->get('image'),
            'unit' => $request->get('unit'),
            'new' => $request->get('new')
        ]);
    }

    public function findById($id)
    {
        return Product::find($id);
    }

    public function updateExist(ProductFormRequest $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->get('name');
        $product->id_type = $request->get('id_type');
        $product->description = $request->get('description');
        $product->unit_price = $request->get('unit_price');
        $product->promotion_price = $request->get('promotion_price');
        $product->image = $request->get('image');
        $product->unit = $request->get('unit');
        $product->new = $request->get('new');

        $product->save();
    }

    public function deleteById($id)
    {
        $product = Product::find($id);

        $product->delete();
    }




}