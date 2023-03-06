<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(6);

        $products->map(function ($product){
            if ($product->auction) {
                $a = $product->auction->waktu_berakhir->diffInMinutes(now());
                $b = $product->auction->waktu_berakhir->diffInMinutes($product->auction->created_at);
                $product->siswa_waktu_persen = ceil($a * 100 / $b);
                $product->siswa_waktu = $product->auction->waktu_berakhir->diffAsCarbonInterval(now());
                return $product;
            } else {
                return $product->siswa_waktu = null;
            }
        });

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('products.index')->with('pesan', 'Berhasil membuat product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();


        return redirect()->route('auctions.show', [$product->id])->with('pesan', 'Product berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('pesan', 'Berhasil menghapus product');
    }
}
