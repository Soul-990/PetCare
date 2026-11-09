<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Treatment;
use App\Models\Product;
use App\Models\Appointment;
use App\Models\Vet;
use App\Models\Pet;
use App\Models\Report;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth()->user()->role;
        $user_id = Auth()->user()->id;
        if($role == 0){
            $app = Appointment::all();
            $pets = Pet::all();
            $reports = Report::all();
            return view('PO.dashboard', compact('app', 'pets', 'reports'));
        }else if($role == 1){
                $vets = Vet::all();
                $status = 0;
                foreach($vets as $v){
                    if($v->user_id == $user_id){
                        $status = 1;
                    }
                }
                if($status == 1){
                    $vet = Vet::all();
                    $treat = Treatment::all();
                    $prod = Product::all();
                    $app = Appointment::all();
                    return view('Vets.dashboard', compact('treat', 'prod', 'app', 'vet'));
                }else{
                        return view('Vets.accountFinish');
                }
        }else if($role == 2){
                $pet = Pet::all();
                return view('Shelters.dashboard', compact('pet'));
        }
        return view('home');
    }

    public function account()
    {
        $role = Auth()->user()->role;
        if($role == 0){
            return view('PO.account');
        }else if($role == 1){
            $vet = Vet::all();
            return view('Vets.account', compact('vet'));
        }else if($role == 2){
                return view('Shelters.account');
        }
        return view('home');
    }

    public function accountUpdate(String $id, Request $request){
        $user = User::find($id);
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        if(isset($request->password)){
            $user->password = $request->password;
        }
        $user->save();
        // 
        if(isset($request->vet_id)){
            $vId = $request->vet_id;
            $v = Vet::find($vId);
            $v->experience = $request->experience;
            $v->shift_start = $request->t_start;
            $v->shift_end = $request->t_end;
            $v->speciality = $request->speciality;
            $v->save();
        }
        return redirect()->route('account');
    }
}
