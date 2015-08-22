<?php

namespace app\Http\Requests;

use App\Http\Requests\Request;

class CpfRequest extends Request
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
            'cpf' => 'required|cnpjcpf',
        ];
    }

    // OPTIONAL OVERRIDE
    public function forbiddenResponse()
    {
        dd('sem permissão');
    }

    // OPTIONAL OVERRIDE
    public function response(array $errors)
    {
        dd(['cpf/cnpj inválido', $errors]);
    }
}
