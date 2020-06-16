<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AgentRequest;
use App\Http\Controllers\Controller;
use App\RealStateAgent;
use App\RealState;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = RealStateAgent::paginate(10);

        return view("agent.index", compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $realstateType = new RealState;
        $realstateTypes = $realstateType->selectRealState();

        return view('agent.create', compact('realstateTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgentRequest $request)
    {
      RealStateAgent::create($request->all());

      return redirect()->route('agent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent = RealStateAgent::findOrfail($id);
        return view('agent.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent = RealStateAgent::findOrfail($id);

        $realstateType = new RealState();
        $realstateTypes = $realstateType->selectRealState();
        
        return view('agent.edit', compact('agent', 'realstateTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AgentRequest $request, $id)
    {
        $agent = RealStateAgent::findOrfail($id);
        $agent->update($request->all());

        return redirect()->route('agent.index')->with('message', 'Alteraçoes Realizadas com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agent = RealStateAgent::findOrfail($id);

        $agent->delete();

        return redirect()->route('agent.index');
    }
}
