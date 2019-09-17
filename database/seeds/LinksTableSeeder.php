<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $linksForSlug = [
            'anonymous-for-the-voiceless' => [
                \App\Link::TYPE_WEBSITE => 'https://www.anonymousforthevoiceless.org',
                \App\Link::TYPE_FACEBOOK => 'https://www.facebook.com/anonymousforthevoiceless',
            ],
            'the-save-movement' => [
                \App\Link::TYPE_WEBSITE => 'https://thesavemovement.org',
                \App\Link::TYPE_FACEBOOK => 'https://www.facebook.com/savemovement/',
            ],
            'meat-the-victims' => [
                \App\Link::TYPE_WEBSITE => 'https://meat-the-victims.org',
            ],
            'direct-action-everywhere' => [
                \App\Link::TYPE_WEBSITE => 'https://www.directactioneverywhere.com/get-active-main#get-active-sub',
                \App\Link::TYPE_FACEBOOK => 'https://www.facebook.com/directactioneverywhere/',
            ],
        ];

        foreach ($linksForSlug as $slug => $linksArr) {
            $org = \App\Organization::where(['slug' => $slug])->first();

            foreach ($linksArr as $type => $url) {
                $org->links()->create([
                   'type' => $type,
                   'url' => $url,
                ]);
            }
        }
    }
}
