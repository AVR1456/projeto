<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InstitucionalController extends Controller
{
    public function sobre() {
        return view('sobre');
    }

    public function contato() {
        return view('contato');
    }

    public function contatoEnviado(Request $request) {
        return $request->all();
    }
}
