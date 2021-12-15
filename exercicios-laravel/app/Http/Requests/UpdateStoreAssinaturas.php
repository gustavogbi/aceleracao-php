<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreAssinaturas extends FormRequest
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
            "qnt_assinaturas" => "required|min:1|max:200",
            "assinatura_padrao" => "required|min:10|max:200",
            "vezes_usada" => "required|min:1|max:2",
        ];
    }

    public function messages() {
        return [
            "qnt_assinaturas.required" => "O campo Quantidade de Assinaturas é obrigatório",
            "qnt_assinaturas.min" => "O campo Quantidade de Assinaturas deve possuir no mínimo 1 caracteres",
            "qnt_assinaturas.max" => "O campo Quantidade de Assinaturas deve possuir no máximo 200 caracteres",

            "assinatura_padrao.required" => "O campo Assinatura Padrão é obrigatório",
            "assinatura_padrao.min" => "O campo Assinatura Padrão deve possuir no mínimo 10 caractere",
            "assinatura_padrao.max" => "O campo Assinatura Padrão deve possuir no máximo 200 caracteres",

            "vezes_usada.required" => "O campo Vezes Usada é obrigatório",
            "vezes_usada.min" => "O campo Vezes Usada deve possuir no mínimo 1 caractere",
            "vezes_usada.max" => "O campo Vezes Usada deve possuir no máximo 2 caracteres",
        ];
    }
}
