<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStoreDocumentos;
use Illuminate\Http\Request;
use App\Models\Documento;
use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{
    function documentos() {
        $documentos = Documento::paginate(15);

        // Registra no log channel documentos, cadastrado em config/logging.php
        Log::channel('documentos')->info('Os documentos foram consultados');

        return view('documento', compact('documentos'));
    }

    function exibe($id) {
        $documento = Documento::find($id);

        Log::channel('documentos')->info("O documento {$id} foi consultado.");

        return view('exibedoc', compact('documento'));
    }

    public function novo() {
        return view('criadoc');
    }

    public function insere(UpdateStoreDocumentos $request) {
        $documento = Documento::create($request->all());

        if (!$documento) dd($documento);

        return redirect()->route('documentos')
            ->with('mensagem', "Documento: {$documento->id} foi criado com sucesso!");
    }

    public function remove($id) {
        $documento = Documento::find($id);

        if (!$documento) dd($documento);

        $documento->delete();

        return redirect()->route('documentos')
            ->with('mensagem', "Documento: {$documento->id} foi removido com sucesso!");
    }

    public function login(){

        $usuario = ["name" => "Gustavo"];
        session(["usuario" => $usuario]);

        return redirect()->route('documentos')
            ->with('mensagem', "Login realizado com sucesso!");
    }

    public function logout(){
        session()->forget('usuario');

        return redirect()->route('documentos')
            ->with('mensagem', "Logout realizado!");
    }
}
