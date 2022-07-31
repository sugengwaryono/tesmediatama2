<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'email' => 'required|email|max:255|unique:users',
            'username' => 'required|min:3|max:20|alpha_dash|unique:users',
            'foto' => 'image|max:10024|mimes:jpeg,bmp,png',
            'phone' => 'required',
            'password' => 'required|min:6|max:30',
            
        ];
      case 'PUT':
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Request::get('id'),
            'username' => 'required|min:3|max:20|alpha_dash|unique:users,username,' . Request::get('id'),
            'foto' => 'image|max:10024|mimes:jpeg,bmp,png',
            'phone' => 'required',
            'password' => 'min:6|max:30',
            
        ];
      case 'PATCH':
      default:break;
      }
    }

    public function messages()
    {
        return [
            'foto.image' => 'Foto harus berjenis gambar',
            'foto.mimes' => 'Foto harus berjenis jpeg, bmp dan png.',
            'foto.max' => 'Ukuran Foto Maksimal 10MB',
            'name.required' => 'Nama tidak boleh kosong!',
            'username.required' => 'Username tidak boleh kosong!',
            'username.unique' => 'Username sudah ada yang punya',
            'username.alpha_dash' => 'username hanya dapat berisi huruf, angka, dan tanda hubung',
            'phone' => 'No. Telp tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong!',
            'password' => 'Password tidak boleh kosong',
            'email.unique' => 'Email sudah ada yang punya',
            
        ];
    }

}
