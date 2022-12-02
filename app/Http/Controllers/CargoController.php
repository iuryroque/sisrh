<?php

namespace App\Http\Controllers;
use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
        
    }
    
    public function index(Request $request){
        $cargos = Cargo::where('descricao', 'like', '%'.$request->buscaCargo.'%')->orderBy('descricao','asc')->get();
        // $cargos = Cargo::all();
        $totalCargos = Cargo::all()->count();  
        // return view('cargos.index', compact('cargos'));                        
        return view('cargos.index', compact('cargos', 'totalCargos'));

    }
    
    public function create(){
        return view('cargos.create');
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        Cargo::create($input);

        return redirect()->route('cargos.index')->with('Sucesso', 'Cargo Cadastrado com Sucesso!');
    }
}
