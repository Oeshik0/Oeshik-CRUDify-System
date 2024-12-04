<?php

namespace App\Http\Controllers;

use App\Models\Akash;
use Illuminate\Http\Request;

class AkashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $akash=new Akash;
        $akash->name=$request->name;
        $akash->description=$request->description;
        $akash->salary=$request->salary;
        $akash->save();
        return redirect()->back()->with('success','POST SUCCESS!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Akash $akash)
    {
        $akash=Akash::all();
        return view('table',compact('akash'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $akash=Akash::findOrFail($id);
        return view('edit',compact('akash'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $akash = Akash::findOrFail($id);
    
        $akash->update([
            'name' => $request->name,
            'description' => $request->description,
            'salary' => $request->salary,
        ]);
    
        // Redirect with success message
       // return redirect()->route('akash.show', $akash->id)->with('success', 'Entry updated successfully!');
       $akash=Akash::all();
       return view('table',compact('akash'));
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $akash=Akash::findOrFail($id);
        $akash->delete();
        return redirect()->back();
    }
}
