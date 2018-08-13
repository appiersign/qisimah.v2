<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadSongRequest extends FormRequest
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
            "song"  =>  "bail|required|file|max:7000|mimetypes:audio/mpeg,audio/x-mpeg,audio/mp3,audio/x-mp3,audio/mpeg3,audio/x-mpeg3,audio/mpg,audio/x-mpg,audio/x-mpegaudio"
        ];
    }

    public function messages()
    {
        return [
            "song.file" => "Sorry file could not be loaded. Please try again!",
            "mimetypes" => "The file type does not match the allowed formats"
        ];
    }
}
