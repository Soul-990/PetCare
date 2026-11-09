<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Vet;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = Auth()->user()->role;
        if($role == 0){
            $vets = Vet::all();
            $users = User::all();
            return view('PO.appoint', compact('vets', 'users'));
        }else if($role == 1){
            $vet = Vet::all();
            return view('Vets.account', compact('vet'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(String $id)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $app = new Appointment();
        $app->vet_id = $request->vet_id;
        $app->user_id = $request->user_id;
        $app->user_email = $request->user_email;
        $app->user_phone = $request->user_phone;
        $app->status = $request->status;
        $app->save();
        return view('PO.appointConfirm');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $role = auth()->user()->role;
        if($role == 0){
            $app = Appointment::all();
            $user = User::all();
            $vet = Vet::all();
            return view('PO.appointments', compact('app', 'user', 'vet'));
        }else if($role == 1){
            $app = Appointment::all();
            $user = User::all();
            $vet = Vet::all();
            return view("Vets.appointments", compact('app', 'user', 'vet'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    public function status(String $id){
        $app = Appointment::find($id);
        if($app->status == 0){
            $app->status = 1;
            $app->save();
        }else if($app->status == 1){
            $app->status = 0;
            $app->save();
        }
        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
