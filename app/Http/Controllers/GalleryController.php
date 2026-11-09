<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Pet;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gal = Gallery::all();
        $pet = Pet::all();
        return view('PO.gallery', compact('pet', 'gal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pet = Pet::all();
        return view('PO.galleryAdd', compact('pet'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $g = new Gallery();
        $g->user_id = $request->user_id;
        $g->pet_id = $request->p_id;
        $g->image = $request->p_id;
        $imagename = time() . "." . $request->image->extension();
        $request->image->move(public_path("petimages"), $imagename);
        $g->image = $imagename;
        $g->save();
        return redirect()->route('Gallery');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
