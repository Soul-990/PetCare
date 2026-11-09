<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Pet;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all();
        $pets= Pet::all();
        return view('PO.reports', compact('reports', 'pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pet = Pet::all();
        return view('PO.ReportsAdd', compact('pet'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $report = new Report();
        $report->pet_id = $request->p_id;
        $report->name = $request->name;
        $imagename = time() . "." . $request->report->extension();
        $request->report->move(public_path("reports"), $imagename);
        $report->report = $imagename;
        $report->save();
        return redirect()->route('reports');
    }

    /**
     * Display the specified resource.
    */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $pet = Pet::all();
        $r = Report::find($id);
        return view('PO.ReportsEdit', compact('r', 'pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $report = Report::find($id);
        $report->pet_id = $request->p_id;
        $report->name = $request->name;
        if(isset($request->report)){
            $imagename = time() . "." . $request->report->extension();
            $request->report->move(public_path("reports"), $imagename);
            $report->report = $imagename;
        }
        $report->save();
        return redirect()->route('reports');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $report = Report::find($id);
        $report->delete();
        return back();
    }
}
