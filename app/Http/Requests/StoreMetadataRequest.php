<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMetadataRequest extends FormRequest
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
            "title"     =>  "bail|required|min:2|max:100",
            "artist"    =>  "bail|required|exists:artists,id",
            "featured"  =>  "bail|exists:artists,id",
            "genres"    =>  "bail|required|exists:genres,id",
            "producers" =>  "bail|required|exists:producers,id",
            "album"     =>  "bail|required|exists:albums,id",
            "label"     =>  "bail|required|exists:labels,id",
            "release"   =>  "bail|required|date_format:y-m-d",
            "art"       =>  "bail|image|max:2000",
            "version"   =>  "bail|required|in:r,o,c"
        ];
    }
}
