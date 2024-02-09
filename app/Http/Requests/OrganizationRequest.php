<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\BackpackUser;
use App\Models\Organization;
use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
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
        if ($this->organization) {
            $organization = $user->organizations()->where('id', $this->organization)->first();

            return !is_null($organization);
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slug' => 'required|string|min:5|max:255',
            'title' => 'required|string|min:5|max:255',
            'image_full_url' => 'required|url',
            'call_to_action' => 'required|string|max:65',
            'card_content' => 'required|string|max:125',
            'about' => 'required|string',
            'activism' => 'required|string'
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
