<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ArtistManagementDetailsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'label_name'        => 'bail|required|string|unique:labels,name',
            'label_logo'        => 'bail|image|max:2000000',
            'label_rep'         => 'bail|required|string|max:100',
            'label_email'       => 'bail|required|email|max:100',
            'label_telephone'   => 'bail|required|digits:10',
            'label_website'     => 'url',
            'management_name'        => 'bail|required|string|unique:labels,name',
            'management_logo'        => 'bail|image|max:2000000',
            'management_rep'         => 'bail|required|string|max:100',
            'management_email'       => 'bail|required|email|max:100',
            'management_telephone'   => 'bail|required|digits:10',
            'management_website'     => 'url',
        ];
    }
}
