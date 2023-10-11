<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Money\Currencies\ISOCurrencies;
use Money\Formatter\IntlMoneyFormatter;
use Money\Money;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages.Admin.Product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_kamar' => 'required|string',
        //     'harga'      => 'required|numeric',
        //     'deskripsi'  => 'required|string',
        //     'image'      => 'image|mimes: jpeg, jpg, png|max: 2048'
        // ]);

        $image = $request->file('image');
        $image->storeAs('public/storage/post', $image->hashName());

        Product::create([
            'nama_kamar' => $request->nama_kamar,
            'harga'      => $request->harga,
            'deskripsi'  => $request->deskripsi,
            'image'      => $image->hashName(),
            'lokasi'     => $request->lokasi,
            'petak'      => $request->petak,
            'set_bed'    => $request->set_bed,
            'dapur'      => $request->dapur,
            'parkir'     => $request->parkir,
            'alat_mandi' => $request->alat_mandi
        ]);

        return redirect()->route('admin')->with('success', 'Product berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('Pages.DetailRooms', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
