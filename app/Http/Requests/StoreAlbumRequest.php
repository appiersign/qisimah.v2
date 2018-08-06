<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlbumRequest extends FormRequest
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
            'title' =>  'bail|required|min:2|max:50',
            'year'  =>  'bail|digits:4',
            'label' =>  'bail|exists:labels,id',
            'artist'    =>  'bail|required|exists:artists,id',
            'art'   =>  'bail|img|size:2000000'
        ];
    }
}
