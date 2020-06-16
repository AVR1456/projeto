<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RenterRequest;
use App\Http\Controllers\Controller;
use App\Renter;
use App\RealStateAgent;

class RenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $renters = Renter::paginate(8);
        return view('renter.index', compact('renters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $agentType = new RealStateAgent;
        $agentTypes = $agentType->selectAgent();

        return view('renter.create', compact('agentTypes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RenterRequest $request)
    {
        //
        Renter::create($request->all());
        return redirect()->route('renter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $renter = Renter::findOrfail($id);
        return view ('renter.show', compact('renter'));
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
        $renter = Renter::findOrfail($id);

        $agentType = new RealStateAgent;
        $agentTypes = $agentType->selectAgent();

        
        return view('renter.edit', compact('renter', 'agentTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RenterRequest $request, $id)
    {
        $renter = Renter::findOrfail($id);
        $renter->update($request->all());

        return redirect()->route('renter.index');
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
