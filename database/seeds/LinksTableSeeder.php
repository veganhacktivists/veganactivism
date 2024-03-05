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
                \App\Models\Link::TYPE_WEBSITE => [
                    'url' => 'https://www.anonymousforthevoiceless.org',
                    'click_count' => 417,
                ],
                \App\Models\Link::TYPE_FACEBOOK => [
                    'url' => 'https://www.facebook.com/anonymousforthevoiceless',
                    'click_count' => 0, ],
            ],
            'the-save-movement' => [
                \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://thesavemovement.org', 'click_count' => 299],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/savemovement/', 'click_count' => 0],
            ],
            'meat-the-victims' => [
                \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://meat-the-victims.org', 'click_count' => 11],
            ],
            'direct-action-everywhere' => [
                \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://www.directactioneverywhere.com/get-active-main#get-active-sub', 'click_count' => 247],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/directactioneverywhere/', 'click_count' => 0],
            ],
            'the-vegan-society' => [
                \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://www.vegansociety.com/get-involved/volunteering-vegan-society', 'click_count' => 192],
                \App\Models\Link::TYPE_VOLUNTEER => ['url' => 'https://www.vegansociety.com/get-involved/volunteering-vegan-society/volunteering-application-form', 'click_count' => 0],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/TheVeganSociety/', 'click_count' => 0],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://www.vegansociety.com/contact-us', 'click_count' => 0],
            ],
            'mercy-for-animals' => [
              \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://mercyforanimals.org/action-center', 'click_count' => 201],
                \App\Models\Link::TYPE_EVENTS => ['url' => 'https://mercyforanimals.org/action-center', 'click_count' => 0],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/mercyforanimals/', 'click_count' => 0],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://mercyforanimals.org/contact-us', 'click_count' => 0],
            ],
            'challenge-22' => [
                \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://db.challenge22.com/mentor-application-form.php', 'click_count' => 153],
                \App\Models\Link::TYPE_VOLUNTEER => ['url' => 'https://db.challenge22.com/mentor-application-form.php', 'click_count' => 0],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/ChallengeTwentyTwo/', 'click_count' => 0],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://www.facebook.com/ChallengeTwentyTwo/', 'click_count' => 0],
            ],
            'the-humane-league' => [
              \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://thehumaneleague.org/fast-action-network/', 'click_count' => 126],
                \App\Models\Link::TYPE_EVENTS => ['url' => 'https://thehumaneleague.org/events/', 'click_count' => 0],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/thehumaneleague/', 'click_count' => 0],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://thehumaneleague.org/take-action', 'click_count' => 0],
            ],
            'hen-hero' => [
              \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://mercyforanimals.org/hen-heroes', 'click_count' => 180],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://mercyforanimals.org/contact-us', 'click_count' => 0],
            ],
            'animal-protectors' => [
              \App\Models\Link::TYPE_WEBSITE => ['url' => 'http://www.animalprotectors.net', 'click_count' => 126],
                \App\Models\Link::TYPE_EVENTS => ['url' => 'http://www.animalprotectors.net/events.html', 'click_count' => 0],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/animalprotectorsofav', 'click_count' => 0],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'http://www.animalprotectors.net/contact-us', 'click_count' => 0],
            ],
            'animal-ethics' => [
              \App\Models\Link::TYPE_WEBSITE => ['url' => 'http://www.animal-ethics.org/volunteer/', 'click_count' => 148],
              \App\Models\Link::TYPE_EVENTS => ['url' => 'http://www.animal-ethics.org/volunteer/', 'click_count' => 0],
              \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/Animal-Ethics-1424658461139957/', 'click_count' => 0],
              \App\Models\Link::TYPE_CONTACT => ['url' => 'http://www.animal-ethics.org/contact-us/', 'click_count' => 0],
            ],
            'peta-activism' => [
              \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://www.peta.org/about-peta/volunteer', 'click_count' => 125],
                \App\Models\Link::TYPE_EVENTS => ['url' => 'https://www.facebook.com/pg/official.peta/events/', 'click_count' => 0],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/official.peta/', 'click_count' => 0],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://www.peta.org/about-peta/contact-peta/contact-options/', 'click_count' => 0],
            ],
            'vegan-outreach' => [
              \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://veganoutreach.org/', 'click_count' => 171],
                \App\Models\Link::TYPE_EVENTS => ['url' => 'https://www.facebook.com/pg/veganoutreach/events/?ref=page_internal', 'click_count' => 0],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/veganoutreach/', 'click_count' => 0],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://veganoutreach.org/contact/', 'click_count' => 0],
            ],
            'adopt-a-college' => [
              \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://adoptacollege.org/', 'click_count' => 143],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/veganoutreach', 'click_count' => 0],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://veganoutreach.org/contact/', 'click_count' => 0],
            ],
            'digital-vegan-activists' => [
              \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://www.facebook.com/', 'click_count' => 153],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/groups/digitalveganactivists/announcements/', 'click_count' => 0],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://www.facebook.com/groups/1795279694017651/badge_member_list/?badge_type=ADMIN', 'click_count' => 0],
            ],
            'vegfund-activism' => [
              \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://vegfund.org/', 'click_count' => 120],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/VegFund/?ref=search', 'click_count' => 0],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://vegfund.org/contact/', 'click_count' => 0],
            ],
            'narn-activism' => [
              \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://narn.org/', 'click_count' => 103],
              \App\Models\Link::TYPE_VOLUNTEER => ['url' => 'https://narn.org/volunteer-sign-up', 'click_count' => 0],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/NorthwestAnimalRightsNetwork/', 'click_count' => 0],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://narn.org/contact/', 'click_count' => 0],
            ],
            'reddit-activism' => [
              \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://www.reddit.com/r/Vegan/', 'click_count' => 141],
              \App\Models\Link::TYPE_REDDIT => ['url' => 'https://www.reddit.com/', 'click_count' => 0],
            ],

            'food-not-bombs' => [
                \App\Models\Link::TYPE_WEBSITE => ['url' => 'http://foodnotbombs.net/new_site/', 'click_count' => 128],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'http://foodnotbombs.net/new_site/contacts.php', 'click_count' => 0],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/FoodNotBombsGlobal', 'click_count' => 0],
            ],
            'vegan-mentorship-program' => [
                \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://veganoutreach.org/vegan-mentorship-program/', 'click_count' => 94],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://veganoutreach.org/contact/', 'click_count' => 0],
                \App\Models\Link::TYPE_FACEBOOK => ['url' => 'https://www.facebook.com/veganoutreach/', 'click_count' => 0],
            ],
            '5-minutes-5-vegans' => [
                \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://5minutes5vegans.org/', 'click_count' => 140],
                \App\Models\Link::TYPE_CONTACT => ['url' => 'https://youaretheirvoice.com/contact?5m5v', 'click_count' => 0],
            ],
            'veganuary-activism' => [
                \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://veganuary.com/', 'click_count' => 6],
            ],
            'vegan-hacktivists' => [
                \App\Models\Link::TYPE_WEBSITE => ['url' => 'https://veganhacktivists.org', 'click_count' => 183],
            ],
        ];

        foreach ($linksForSlug as $slug => $linksArr) {
            $org = \App\Models\Organization::where(['slug' => $slug])->first();
            if ($org != null) {
                foreach ($linksArr as $type => $data) {
                    $org->links()->create([
                   'type' => $type,
                   'url' => $data['url'],
                   'click_count' => $data['click_count'],
                ]);
                }
            }
        }
    }
}
