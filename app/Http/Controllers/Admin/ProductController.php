<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreProduct;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    private $products;

    public function __construct(Product $products)
    {
        $this->products = $products;
    }

    public function index()
    {
        $products = $this->products->all();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = \App\Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(StoreProduct $product)
    {

        $productData = $product->all();
        $productData['value'] = str_replace(',', '.', $productData['value']);

        try {
            $productObj = $this->products->create($productData);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->withErrors('msg', 'Erro ao inserir');
        };

        $photos = $product->allFiles()['photos'];
        foreach ($photos as $photo) {
            try {
                $name = rand(11111111, 99999999) . '.' . $photo->getClientOriginalExtension();
                $photo->move('img', $name);
                $productObj->photos()->create(['url' => url('/img/'.$name)]);
            } catch (\Exception $e) {
                dd($e->getMessage());
            }
        }

        return redirect()->back()->with('success', 'Produto cadastrado');
    }
}
