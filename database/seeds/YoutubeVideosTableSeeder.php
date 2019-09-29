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
