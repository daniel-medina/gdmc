<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActionRequest extends FormRequest
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
            'nom' => 'filled|min:2',
            'description' => 'filled|min:2',
            'alert' => 'boolean',
            'date_creation' => 'date_format:d/m/Y',
            'date_realisation' => 'date_format:d/m/Y',
            'date_butoire' => 'date_format:d/m/Y',
        ];
    }
}