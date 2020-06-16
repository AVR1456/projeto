<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\OwnerRequest;
use App\Http\Controllers\Controller;
use App\Owner;
use App\RealState;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //função para listar dados
    {
        $owners = Owner::paginate(8);
        return view ('owner.index', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //função para exibir formulário para inserção de novos dados
    {
       $realstateType = new RealState;
       $realstateTypes = $realstateType->selectRealState();

       return view('owner.create', compact('realstateTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnerRequest $request) //função para salvar dados no BD
    {
        //
        
        Owner::create($request->all());

        return redirect()->route('owner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) // função para exibir detalhes dos dados cadastrados
    {
        //
        $owner = Owner::findOrfail($id);
        return view('owner.show', compact('owner'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //função para exibir o formulário para editar dados cadastrados
    {
        //
        
        $owner = Owner::findOrfail($id);
        $realstateType = new RealState;
        $realstateTypes = $realstateType->selectRealState();
        
        return view('owner.edit', compact('owner', 'realstateTypes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OwnerRequest $request, $id) //funcão para atualização de dados 
    {
        //
        $owner = Owner::findOrfail($id);
        $owner->update($request->all());

        return redirect()->route('owner.index')->with('message', 'Alterações realizadas com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //função para exclusão dos dados
    {
        //
    }
}
