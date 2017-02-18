<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequests extends FormRequest {
    public function authorize() {
        return true;
    }
    public function rules() {
        return  [
                    'url' => 'required',
                ];
    }

    public function messages(){

        $messages  = [
            'url.required' => 'Title Field is Required',
        ];

        return $messages;

    }
}
