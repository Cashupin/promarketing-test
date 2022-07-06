<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGamePost extends FormRequest
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
            'name' => 'required|unique:games',
            'description' => 'required',
            'status_id' => 'required',
            'url_game' => 'required',
            'url_image' => 'required_without:file',
            'file' => 'required_without:url_image',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.unique' => 'El campo nombre debe ser unico',
            'description.required' => 'El campo descripcion es requerido',
            'status_id.required' => 'El campo estado es requerido',
            'url_game.required' => 'El campo URL_GAME es requerido',
            'url_image.required' => 'El campo URL_IMAGE es requerido',
        ];
    }
}
