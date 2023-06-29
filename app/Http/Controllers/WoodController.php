<?php

namespace App\Http\Controllers;

use App\Models\Wood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $woods = $user->woods;
        return view('wood.index',compact('woods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wood.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|string|max:250',
            'type' => 'required|string|max:250',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        $user = Auth::user();
        $user->woods()->create($request->all());
        return back()->with('success','Wood has been added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $wood = Wood::find($id);
        if(!$wood){
            abort(404,'not found');
        }
        return view('wood.show',compact('wood'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $wood = Wood::find($id);
        if(!$wood){
            abort(404,'not found');
        }
        return view('wood.edit',compact('wood'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>'required|string|max:250',
            'type' => 'required|string|max:250',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        $wood = Wood::find($id);
        if(!$wood){
            abort(404,'not found');
        }
        $wood->update($request->all());
        return redirect('/wood');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $wood = Wood::find($id);
        if(!$wood){
            abort(404,'not found');
        }
        $wood->delete();
        return redirect('/wood');
    }
}
