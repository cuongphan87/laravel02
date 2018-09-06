<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhanvienRequest extends FormRequest
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
            'hoten' => 'required | max:20'
            
        ];
    }
    
    public function messages()
    {
        return [
            'required'=>':attribute Không được để trống',
            'max'=>':attribute Không được quá :max ký tự',
        ];
    }
}
