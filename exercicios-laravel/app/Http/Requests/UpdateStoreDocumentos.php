<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreDocumentos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "titulo" => "required|min:10|max:200",
            "tamanho" => "required|min:1|max:3",
            "assinaturas" => "required|min:1|max:2",
            "assinatura_do_responsavel" => "required|min:10|max:200",
            "qtd_paginas" => "required|min:1|max:2",
        ];
    }

    public function messages() {
        return [
            "titulo.required" => "O campo Título é obrigatório",
            "titulo.min" => "O campo Título deve possuir no mínimo 10 caracteres",
            "titulo.max" => "O campo Título deve possuir no máximo 200 caracteres",
            
            "tamanho.required" => "O campo Tamanho é obrigatório",
            "tamanho.min" => "O campo Tamanho deve possuir no mínimo 1 caractere",
            "tamanho.max" => "O campo Tamanho deve possuir no máximo 2 caracteres",

            "assinaturas.required" => "O campo Assinaturas é obrigatório",
            "assinaturas.min" => "O campo Assinaturas deve possuir no mínimo 1 caractere",
            "assinaturas.max" => "O campo Assinaturas deve possuir no máximo 2 caracteres",

            "assinatura_do_responsavel.required" => "O campo Assinatura do Responsável é obrigatório",
            "assinatura_do_responsavel.min" => "O campo Assinatura do Responsável deve possuir no mínimo 10 caracteres",
            "assinatura_do_responsavel.max" => "O campo Assinatura do Responsável deve possuir no máximo 200 caracteres",

            "qtd_paginas.required" => "O campo Quantidade de Páginas é obrigatório",
            "qtd_paginas.min" => "O campo Quantidade de Páginas deve possuir no mínimo 1 caractere",
            "qtd_paginas.max" => "O campo Quantidade de Páginas deve possuir no máximo 2 caracteres",
        ];
    }
}
