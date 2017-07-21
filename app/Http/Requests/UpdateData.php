<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateData extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $model = $this->getModel($this->route('model'));
        $fields = $model::$fields;
        $validation = [];
        foreach ($fields as $f => $field) {
            $validation[$f] = $field['validation'];
        };
        return $validation;
    }

    public function getModel($model)
    {
        return $model = '\\App\\' . $model;
    }
}
