<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Link;
use App\Models\BackpackUser;
use App\Organization;
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
        $isLoggedIn = backpack_auth()->check();

        if (!$isLoggedIn) {
            return false;
        }

        $user = backpack_user();

        // authorize super admins
        if ($user->hasRole(BackpackUser::ROLE_SUPER_ADMIN)) {
            return true;
        }

        // verify that the user is an admin for the organization
        $organization = $user->organizations()->where('id', $this->input('organization_id'))->first();

        return $organization ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $urlValidation = 'required|url|min:5|max:255';

        if (!$this->link) {
            $urlValidation .= '|unique:links,url';
        }

        return [
            'url' => $urlValidation,
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
