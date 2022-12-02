<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
        
    }

    public function index(Request $request)
    {
        $departamentos = Departamento::where('nome', 'like', '%'.$request->buscaDepartamento.'%')->orderBy('nome','asc')->get();
        // $departamentos = Departamento::all();
        $totalDepartamentos = Departamento::all()->count();                          
        return view('departamentos.index', compact('departamentos', 'totalDepartamentos'));
    }

    public function create()
    {
        return view('departamentos.create');
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        Departamento::create($input);

        return redirect()->route('departamentos.index')->with('Sucesso', 'Departamento Cadastrado com Sucesso!');
    }
}
