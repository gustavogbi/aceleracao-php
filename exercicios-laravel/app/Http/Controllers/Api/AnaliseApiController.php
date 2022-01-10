<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Analise;
use App\Models\Assinatura;
use App\Models\Documento;
use Illuminate\Http\Request;

class AnaliseApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analises = Analise::paginate(15);

        return response()->json($analises);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $analise = Analise::create($request->all());

        return response()->json($analise);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Analise::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $analise = Analise::findOrFail($id);

        $analise->update($request->all());

        return response()->json($analise);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $analise = Analise::findOrFail($id);

        $analise->delete();
    }

    public function relatorio($id)
    {
        $analise = Analise::findOrFail($id);
        $documento = Documento::findOrFail($analise->id_doc);
        $assinatura = Assinatura::findOrFail($analise->id_assinatura);

        return response()->json([
            "analise" => $analise,
            "documento" => $documento,
            "assinatura" => $assinatura,
        ], 200);
    }
}
