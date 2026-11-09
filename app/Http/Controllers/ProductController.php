<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Vet;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role == 1){
            $prod = Product::all();
            $vet = Vet::all();
            return view('Vets.products', compact('prod', 'vet'));
        }
    }

    public function products()
    {
            $prod = Product::all();
            $vet = Vet::all();
            $user = User::all();
            return view('products', compact('prod', 'vet', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->role == 1){
            $vet= Vet::all();
            return view('Vets.productAdd', compact('vet'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $p = new Product();
        $p->vet_id = $request->vet_id;
        $p->name = $request->name;
        $p->price = $request->price;
        $p->link = "https://wa.me/". auth()->user()->phone ."?text=Hello!%20I%20am%20interested%20in%20your%20product%20".$request->name.".%20Let's%20talk%20more.";
        $imagename = time() . "." . $request->image->extension();
        $request->image->move(public_path("products"), $imagename);
        $p->image = $imagename;
        $p->save();
        return redirect()->route('prod');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $p = Product::find($id);
        $p->delete();
        return back();
    }
}
