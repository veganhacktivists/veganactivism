<?php

namespace App\Http\Requests;

use App\Models\BackpackUser;
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

        if (!$this->youtubeVideo) {
            $urlValidation .= '|unique:youtube_videos,url';
        }

        return [
            'url' => $urlValidation,
            'organization_id' => 'required|integer|exists:organizations,id',
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
        ];
    }
}
