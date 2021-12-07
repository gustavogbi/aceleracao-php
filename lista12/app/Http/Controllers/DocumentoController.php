<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentoController extends Controller
{
    function documentos() {
        $documentos = Documento::all();
        return view('documento', compact('documentos'));
    }
}
