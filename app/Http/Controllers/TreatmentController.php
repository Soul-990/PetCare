<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use App\Models\Pet;
use App\Models\Vet;
use App\Models\User;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = auth()->user()->role;
        if($role == 0){
            $pets = Pet::all();
            $treat = Treatment::all();
            $user = User::all();
            $vet = Vet::all();
            return view('PO.treatments', compact('pets', 'treat', 'vet', 'user'));
            }else if($role == 1){
                $pets = Pet::all();
                $treat = Treatment::all();
                $vet = Vet::all();
                return view('Vets.treatments', compact('pets', 'treat', 'vet'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pet = Pet::all();
        $vet = Vet::all();
        return view('Vets.treatmentInvoice', compact('pet', 'vet'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $t = new Treatment();
        $t->pet_id = $request->pet_id;
        $t->vet_id = $request->vet_id;
        $t->type = $request->type;
        $t->next_appointment = $request->next;
        $t->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Treatment $treatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Treatment $treatment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Treatment $treatment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Treatment $treatment)
    {
        //
    }
}
