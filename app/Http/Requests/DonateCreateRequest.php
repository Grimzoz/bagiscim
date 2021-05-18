<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonateCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//OTURUM AÇIK MI KONTROLÜNÜ YAPAR
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|min:3|max:200',
            'description'=>'required',
        ];
    }

    public function attributes()
    {
        return[
            'title'=>'Bağış Başlığı',
            'description'=>'Bağış Açıklama',
        ];
    }
}
