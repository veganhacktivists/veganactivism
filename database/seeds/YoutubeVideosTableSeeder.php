<?php

use Illuminate\Database\Seeder;

class YoutubeVideosTableSeeder extends Seeder
{
    public function run()
    {
        $linksForSlug = [
            'anonymous-for-the-voiceless' => [
                'https://www.youtube.com/embed/OdFksQGJv24',
            ],
            'the-save-movement' => [
                'https://youtu.be/TgczQju9sbY',
                'https://youtu.be/vW8dFUceTl8',
            ],
            'meat-the-victims' => [],
            'direct-action-everywhere' => [
                'https://youtu.be/DwjRdfibk7M',
            ],
            'the-vegan-society' => [
                'https://youtu.be/SOX_Xsk-deM',
            ],
            'mercy-for-animals' => [
                'https://youtu.be/YMKUsOcvTHI',
            ],
            'challenge-22' => [],
            'the-humane-league' => [
                'https://youtu.be/pznxe5g2yUc',
            ],
            'hen-hero' => [],
            'animal-protectors' => [],
            'animal-ethics' => [],
            'peta-activism' => [],
            'vegan-outreach' => [],
            'adopt-a-college' => [
                'https://youtu.be/dz7orBrpYqU',
                'https://youtu.be/hs2xclms_tc',
            ],
            'digital-vegan-activists' => [],
            'vegfund-activism' => [
                'https://youtu.be/CApk2OgXjnY',
            ],
            'narn-activism' => [
                'https://youtu.be/pznxe5g2yUc',
            ],
            'reddit-activism' => [],
            'food-not-bombs' => [],
            'vegan-mentorship-program' => [],
            '5-minutes-5-vegans' => [],
            'veganuary-activism' => [],
            'vegan-hacktivists' => [],
        ];

        foreach ($linksForSlug as $slug => $linksArr) {
            $org = \App\Organization::where(['slug' => $slug])->first();

            foreach ($linksArr as $youtubeVideoUrl) {
                $org->youtubeVideos()->create([
                    'url' => $youtubeVideoUrl,
                ]);
            }
        }
    }
}
