<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Rules\YoutubeVideoLimit;
use Illuminate\Foundation\Http\FormRequest;

class YoutubeVideoRequest extends FormRequest
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
        if ($user->hasRole(User::ROLE_SUPER_ADMIN)) {
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

        if (!request()->id) {
            $urlValidation .= '|unique:youtube_videos,url';
        }

        $organizationRules = ['required', 'integer', 'exists' => ['organization' => ['id']]];

        if ($this->method() == 'POST') {
            $organizationRules[] = new YoutubeVideoLimit;
        }

        return [
            'url' => $urlValidation,
            'organization_id' => $organizationRules
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [];
    }
}
