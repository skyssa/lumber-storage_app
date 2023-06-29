<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $resources = $user->resources;
        return view('resource.index',compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resource.create');
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
        $user->resources()->create($request->all());
        return back()->with('success','Resource has been added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $resource = Resource::find($id);
        if(!$resource){
            abort(404,'not Found');
        }
        return view('resource.show',compact('resource'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $resource = Resource::find($id);
        if(!$resource){
            abort(404,'not Found');
        }
        return view('resource.edit',compact('resource'));
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
        $resource = Resource::find($id);
        if(!$resource){
            abort(404,'not Found');
        }
        $resource->update($request->all());
        return redirect('/resource');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $resource = Resource::find($id);
        if(!$resource){
            abort(404,'not Found');
        }
        $resource->delete();
        return redirect('/resource');
    }
}
