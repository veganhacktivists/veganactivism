<?php

namespace App\Rules;

use App\Models\Organization;
use Illuminate\Contracts\Validation\Rule;

class YoutubeVideoLimit implements Rule
{
    const VIDEO_LIMIT = 3;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value Organization id
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Organization::where('id', $value)->has('youtubeVideos', '<', self::VIDEO_LIMIT)->first() ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This organization cannot have more than ' . self::VIDEO_LIMIT . ' YouTube videos';
    }
}
