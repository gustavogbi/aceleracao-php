<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStoreAssinaturas;
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

    public function store(UpdateStoreAssinaturas $request) {
        $assinatura = Assinatura::create($request->all());

        if (!$assinatura) dd($assinatura);

        return redirect()->route('assinatura.index')
            ->with('mensagem', "Assinatura criada com sucesso!");
    }

    public function remove($id) {
        $assinatura = Assinatura::find($id);

        if (!$assinatura) dd($assinatura);

        $assinatura->delete();

        return redirect()->route('assinatura.index')
            ->with('mensagem', "Assinatura removida com sucesso!");
    }
}
