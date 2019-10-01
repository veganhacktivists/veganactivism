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
            'the-vegan-society' => [
                \App\Link::TYPE_WEBSITE => 'https://www.vegansociety.com/get-involved/volunteering-vegan-society',
                \App\Link::TYPE_VOLUNTEER => 'https://www.vegansociety.com/get-involved/volunteering-vegan-society/volunteering-application-form',
                \App\Link::TYPE_FACEBOOK => 'https://www.facebook.com/TheVeganSociety/',
                \App\Link::TYPE_CONTACT => 'https://www.vegansociety.com/contact-us',
            ],
            'mercy-for-animals' => [
              \App\Link::TYPE_WEBSITE => 'https://mercyforanimals.org/action-center',
                \App\Link::TYPE_EVENTS => 'https://mercyforanimals.org/action-center',
                \App\Link::TYPE_FACEBOOK => 'https://www.facebook.com/mercyforanimals/',
                \App\Link::TYPE_CONTACT => 'https://mercyforanimals.org/contact-us',
            ],
            'challenge-22' => [
                \App\Link::TYPE_WEBSITE => 'https://db.challenge22.com/mentor-application-form.php',
                \App\Link::TYPE_VOLUNTEER => 'https://db.challenge22.com/mentor-application-form.php',
                \App\Link::TYPE_FACEBOOK => 'https://www.facebook.com/ChallengeTwentyTwo/',
                \App\Link::TYPE_CONTACT => 'https://www.facebook.com/ChallengeTwentyTwo/',
            ],
            'the-humane-league' => [
              \App\Link::TYPE_WEBSITE => 'https://thehumaneleague.org/fast-action-network/',
                \App\Link::TYPE_EVENTS => 'https://thehumaneleague.org/events/',
                \App\Link::TYPE_FACEBOOK => 'https://www.facebook.com/thehumaneleague/',
                \App\Link::TYPE_CONTACT => 'https://thehumaneleague.org/take-action',
            ],
            'hen-hero' => [
              \App\Link::TYPE_WEBSITE => 'https://mercyforanimals.org/hen-heroes',
                \App\Link::TYPE_CONTACT => 'https://mercyforanimals.org/contact-us',
            ],
            'animal-protectors' => [
              \App\Link::TYPE_WEBSITE => 'http://www.animalprotectors.net',
                \App\Link::TYPE_EVENTS => 'http://www.animalprotectors.net/events.html',
                \App\Link::TYPE_FACEBOOK => 'https://www.facebook.com/animalprotectorsofav',
                \App\Link::TYPE_CONTACT => 'http://www.animalprotectors.net/contact-us',
            ],
            'animal-ethics' => [
              \App\Link::TYPE_WEBSITE => 'http://www.animal-ethics.org/volunteer/',
              \App\Link::TYPE_EVENTS => 'http://www.animal-ethics.org/volunteer/',
              \App\Link::TYPE_FACEBOOK => 'https://www.facebook.com/Animal-Ethics-1424658461139957/',
              \App\Link::TYPE_CONTACT => 'http://www.animal-ethics.org/contact-us/',
            ],
            'peta-activism' => [
              \App\Link::TYPE_WEBSITE => 'https://www.peta.org/about-peta/volunteer',
                \App\Link::TYPE_EVENTS => 'https://www.facebook.com/pg/official.peta/events/',
                \App\Link::TYPE_FACEBOOK => 'https://www.facebook.com/official.peta/',
                \App\Link::TYPE_CONTACT => 'https://www.peta.org/about-peta/contact-peta/contact-options/',
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
