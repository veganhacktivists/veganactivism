<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Link;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LinkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'url' => 'required|url|min:5|max:255',
            'organization_id' => 'required|integer|exists:organizations,id',
            'type' => [
                'required',
                'string',
                Rule::in([
                    Link::TYPE_WEBSITE,
                    Link::TYPE_TWITTER,
                    Link::TYPE_PATREON,
                    Link::TYPE_INSTAGRAM,
                    Link::TYPE_FACEBOOK,
                    Link::TYPE_YOUTUBE
                ])
            ]
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
