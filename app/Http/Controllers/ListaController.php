<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lista;

class ListaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $lista = Lista::all();
        return $lista;
    }

    public function store(Request $request)
    {
        $lista = new Lista();
        $lista->premio = $request->premio;
        $lista->save();
    }

    public function update(Request $request)
    {
        $lista = Lista::findOrFail($request->id);
        $lista->premio = $request->premio;
        $lista->save();
        return $lista;
    }
    public function destroy(Request $request)
    {
        $lista = Lista::destroy($request->id);
        return $lista;
    }
}
