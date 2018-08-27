<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBroadcasterRequest extends FormRequest
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
            "name"      =>  "bail|required|min:2|max:30",
            "frequency" =>  "bail|required|min:4|max:6",
            "tags"      =>  "bail|required|exists:tags,id",
            "country"   =>  "bail|required|exists:countries,id",
            "region"    =>  "bail|required|exists:regions,id",
            "tag.ling"  =>  "bail|string|min:3",
            "type"      =>  "bail|required|in:radio,tv",
            "stream_id" =>  "bail|required|string|min:4|max:16",
            "city"      =>  "bail|required|min:2",
            "telephone" =>  "numeric|min:9|max:12",
            "logo"      =>  "bail|image|max:2000"
        ];
    }
}
