<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
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
          'artist' => 'required',
          'name'   => 'required',
          'text'   => 'required|min:50|max:5000',
          'image'  => 'image|required',
          'song'   => 'required|file|mimes:mp3,aac,wav ',
        ];

    }
}
