<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documento::create([
            'titulo' => "Título 1",
            'tamanho' => 1,
            'assinaturas' => 10,
            'assinatura_do_responsavel' => "Responsável 1",
            'qtd_paginas' => '1',
        ]);

        Documento::create([
            'titulo' => "Título 2",
            'tamanho' => 2,
            'assinaturas' => 20,
            'assinatura_do_responsavel' => "Responsável 2",
            'qtd_paginas' => '10',
        ]);

        Documento::create([
            'titulo' => "Título 3",
            'tamanho' => 3,
            'assinaturas' => 30,
            'assinatura_do_responsavel' => "Responsável 3",
            'qtd_paginas' => '10',
        ]);
    }
}
