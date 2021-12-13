<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;
use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{
    function documentos() {
        $documentos = Documento::all();

        // Registra no log channel documentos, cadastrado em config/logging.php
        Log::channel('documentos')->info('Os documentos foram consultados');

        return view('documento', compact('documentos'));
    }

    function exibe($id) {
        $documento = Documento::find($id);

        Log::channel('documentos')->info("O documento {$id} foi consultado.");

        return view('exibedoc', compact('documento'));

    }
}