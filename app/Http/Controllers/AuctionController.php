<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuctionController extends Controller
{
    public function index()
    {
        $auction = Auction::where(['status' => 1])->get();

        return view('auction.index', ['auction' => $auction]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Product $assset
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        // filter id nya

        return view('admin.auctions.create', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $auction = new Auction;

        if ($product->user->id != Auth::user()->id) {
            redirect()->route('products.index');
        }

        $request->validate([
            'harga_awal' => 'required|integer|min:1',
            'waktu_berakhir' => 'required|date|after:now',
        ]);

        $auction->asset_id = $product->id;
        $auction->harga_awal = $request->harga_awal;
        $auction->harga_sekarang = $request->harga_awal;
        $auction->waktu_berakhir = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $request->waktu_berakhir)));
        $auction->status = 1;

        $auction->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function show(Auction $auction)
    {
        return view('auction.show', ['auction' => $auction]);
    }

    /**
     * Mulai menawar auction
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function tawar(Auction $auction)
    {
        return view('auction.tawar', ['auction' => $auction]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auction $auction)
    {
        $request->validate([
            'harga_tawaran' => 'required|integer|min:' . $auction->harga_sekarang,
        ]);

        $auction->harga_sekarang = $request->harga_tawaran;
        $auction->save();

        return redirect()->action('LelangController@show', [$auction->id]);
    }

    /**
     * Akhiri auction spesifik.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function akhiri(Auction $auction)
    {
        $auction->status = false;
        $auction->save();

        return redirect()->action('AssetController@index');
    }
}
