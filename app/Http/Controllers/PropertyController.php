<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PropertyRequest;
use App\Http\Controllers\Controller;
use App\Property;
use App\Owner;
use App\Rent;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $properties = Property::paginate(8);

        return view('property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ownerType = new Owner;
        $ownerTypeList = $ownerType->selectOwner();

        $rentType = new Rent;
        $rentTypeList = $rentType->selectRent();
        return view('property.create', compact('ownerTypeList', 'rentTypeList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequest $request)
    {
        Property::create($request->all());

        return redirect()->route('property.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::findOrfail($id);
       
       return view('property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $property = Property::findOrfail($id);

        $ownerType = new Owner;
        $ownerTypeList = $ownerType->selectOwner();

        $rentType = new Rent;
        $rentTypeList = $rentType->selectRent();

        return view('property.edit', compact('property', 'ownerTypeList' ,'rentTypeList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyRequest $request, $id)
    {
        //
        $property = Property::findOrfail($id);
        $property->update($request->all());

        return redirect()->route('property.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
