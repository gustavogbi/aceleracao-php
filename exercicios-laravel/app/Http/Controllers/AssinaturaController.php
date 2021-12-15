<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Assinatura;

class AssinaturaController extends Controller
{
    public function index() {
        $assinaturas = Assinatura::all();

        return view('assinatura.index', compact('assinaturas'));
    }

    public function show($id) {
        $assinatura = Assinatura::find($id);
        
        if (!$assinatura) return "Assinatura não encontrada.";

        return view('assinatura.show', compact('assinatura'));
    }

    public function novo() {
        return view('assinatura.create');
    }

    public function store(Request $request) {
        $assinatura = Assinatura::create($request->all());

        if (!$assinatura) dd($assinatura);

        return redirect()->route('assinatura.index')
            ->with('mensagem', "Assinatura criada com sucesso!");
    }
}
