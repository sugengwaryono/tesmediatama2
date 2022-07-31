<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VideoRequest extends Request
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
      switch($this->method())
      {
      case 'GET':
      case 'DELETE':
      {
          return [];
      }
      case 'POST':
        return [
            'name' => 'required',
            'url' => 'required',
            
            
        ];
      case 'PUT':
        return [
            'name' => 'required',
            'url' => 'required',
            
            
        ];
      case 'PATCH':
      default:break;
      }
    }

    public function messages()
    {
        return [
           
            'name.required' => 'Nama tidak boleh kosong!',
            'url.required' => 'URL tidak boleh kosong!',
            
            
        ];
    }

}
