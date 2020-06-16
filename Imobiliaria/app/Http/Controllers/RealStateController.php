<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Requests\RealstateRequest;
use App\Http\Controllers\Controller;
use App\RealState;

class RealStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $realstates = RealState::paginate(5);
        return view('realstate.index', compact('realstates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('realstate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RealstateRequest $request)
    {
        RealState::create($request->all());
        flash('Message')->success();
       return redirect()->route('realstate.index')->with('success','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $realstate = RealState::find($id);
       
       return view('realstate.show' , compact('realstate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $realstate = RealState::find($id);
        
        return view('realstate.edit', compact('realstate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RealstateRequest $request, $id)
    {
        $realstate = RealState::find($id);
        $realstate->update($request->all());
        
        flash('Message')->success();
        return redirect()->route('realstate.index')->with('message', 'Alterações realizadas com sucesso');
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
