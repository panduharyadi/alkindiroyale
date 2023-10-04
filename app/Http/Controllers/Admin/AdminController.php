<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages.Admin.admin');
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
        //     'harga'      => 'required',
        //     'deskripsi'  => 'required|string',
        //     'image'      => 'string'
        // ]);

        // $file = $request->file('image');
        // $filename = sprintf('%s_%s.%s', date('Y-m-d'), md5(microtime(true)), $file->extension());
        // $image_path = $file->move('storage/product', $filename);

        $path = $request->file('image')->store('image');

        Product::create([
            'nama_kamar' => $request->nama_kamar,
            'harga'      => $request->harga,
            'deskripsi'  => $request->deskripsi,
            'image'      => $path
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