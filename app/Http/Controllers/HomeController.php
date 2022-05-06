<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lista;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lista = Lista::orderBy('id', 'asc')->paginate();
        
        return view('lista.index', compact('lista'));
        
    }

    public function create()
    {
        return view('lista.create');
    }
    public function store(Request $request, Lista $lista)
    {
        $request->validate([
            'premio' => 'required',
            
        ]);
        $lista->premio = $request->premio;
        $lista->save();
        return redirect()->route('home');
    }
}
