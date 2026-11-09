<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\User;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gal = Gallery::all();
        $pets = Pet::all();
        $role = Auth()->user()->role;
        if($role == 0){
            return view('PO.pets', compact('pets', 'gal'));
        }else if($role == 1){
                return view('Vets.dashboard');
        }else if($role == 2){
                $pet = Pet::all();
                return view('Shelters.adoptList', compact('pet'));
        }
        return view('home');
    }

    public function adopt(){
        $user = User::all();
        $pet = Pet::all();
        return view('adopt', compact('pet', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = auth()->user()->role;
        if($role == 2){
            return view('Shelters.adoptAdd');
        }else if($role == 0){
            return view('PO.petsAdd');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = auth()->user()->role;
        if($role == 2){
            $pet = new Pet();
            $pet->user_id = auth()->user()->id;
            $pet->name = $request->name;
            $pet->species = $request->species;
            $pet->breed = $request->breed;
            $pet->age = $request->age;
            $pet->gender = $request->gender;
            $pet->allergies = $request->allergies;
            $pet->adopt_status = $request->adopt_status;
            $pet->save();
            return redirect()->route('adoptList');
        }else if($role == 0){
            $pet = new Pet();
            $pet->user_id = auth()->user()->id;
            $pet->name = $request->name;
            $pet->species = $request->species;
            $pet->breed = $request->breed;
            $pet->age = $request->age;
            $pet->gender = $request->gender;
            $pet->allergies = $request->allergies;
            $pet->save();
            return redirect()->route('pets');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $pet = Pet::find($id);
        return view('PO.petsEdit', compact('pet'));
    }

    public function adoptStatus(String $id){
     $p = Pet::find($id);
     if($p->adopt_status == 0){
        $p->adopt_status = 1;
        $p->save();
     }else if($p->adopt_status == 1){
        $p->adopt_status = 0;
        $p->save();
     }
     return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $pet = Pet::find($id);
        $pet->name = $request->name;
        $pet->species = $request->species;
        $pet->breed = $request->breed;
        $pet->age = $request->age;
        $pet->gender = $request->gender;
        $pet->allergies = $request->allergies;
        $pet->save();
        return redirect()->route('pets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $pet = Pet::find($id);
        $pet->delete();
        return back();
    }
}
