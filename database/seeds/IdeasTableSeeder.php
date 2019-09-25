<?php

use Illuminate\Database\Seeder;

class IdeasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Idea::create([
            'title' => 'Always ask for vegan options',
            'description' => 'when you\'re eating out, walking by a restaurant, store, or bar. Even if you already know that they don\'t have vegan options, asking creates a demand for it.',
            'color' => '#f00',
        ]);
        \App\Idea::create([
            'title' => 'Buy vegan-friendly stickers',
            'description' => 'and place them on walls, lamp poles, & other public areas. You can also attach QR code stickers on meat products. Please respect local laws! <a href="https://www.etsy.com/market/vegan_activism_stickers" target="_blank">Find stickers</a>',
            'color' => '#9561e2',
        ]);
        \App\Idea::create([
            'title' => 'Move bookstore cookbooks',
            'description' => 'so that plant-friendly recipes have more exposure near meat-based recipe books. Please be respectful and ask these stores first if you can rearrange them!',
            'color' => '#53e24f',
        ]);
        \App\Idea::create([
            'title' => 'Update your social media',
            'description' => 'profile descriptions or website with a link to a vegan youtube video! Use a goo.gl link to track clicks and stats. We recommend <a href="https://www.youtube.com/watch?v=UROxRLbVils" target="_blank">Gary</a> or <a href="https://www.youtube.com/watch?v=Z3u7hXpOm58" target="_blank">Earthling Ed\'s</a> speech!',
            'color' => '#d4b528',
        ]);
        \App\Idea::create([
            'title' => 'Print vegan-friendly flyers',
            'description' => 'and pamphlets for people\'s mailboxes, or under their doors! <a href="https://www.youtube.com/watch?v=YMKUsOcvTHI" target="_blank">Hand them out to people</a>, leave them at libraries, colleges, supermarkets, or hang them in public places! Print or order resources by <a href="https://veganactivism.org/resources/example-flyers-brochures-pamphlets-to-print.pdf" target="_blank">clicking here</a>.
            ',
            'color' => '#ff07ea',
        ]);
        \App\Idea::create([
            'title' => 'Contact stores around you',
            'description' => 'and ask them to carry more vegan / plant-based / dairy-free items! It creates demand, and it only takes a few seconds to google your local store\'s website and email address! <a href="https://veganactivism.org/resources/example-email-to-local-stores.pdf" target="_blank">Example</a>',
            'color' => '#431cb9',
        ]);
        \App\Idea::create([
            'title' => 'Host potlucks / vegan meals',
            'description' => 'by inviting friends and family over and cooking for them! Show them how good plant-based meats, milks and desserts actually are!',
            'color' => '#12c4e2',
        ]);
        \App\Idea::create([
            'title' => 'Leave positive Yelp reviews',
            'description' => 'at restaurants that offered vegan options and give feedback to restaurants that you\'d like to see more plant-based options! <a href="https://veganactivism.org/resources/example-business-restaurant-reviews.pdf" target="_blank">Examples</a>.',
            'color' => '#c4ce48',
        ]);
        \App\Idea::create([
            'title' => 'Wear vegan shirts / clothes',
            'description' => 'and other items! By wearing vegan-friendly messages on your clothes you help normalize veganism and hopefully plant a few seeds in people around you!',
            'color' => '#c4ce48',
        ]);
        \App\Idea::create([
            'title' => 'Leave positive Yelp reviews',
            'description' => 'at restaurants that offered vegan options and give feedback to restaurants that you\'d like to see more plant-based options! <a href="https://veganactivism.org/resources/example-business-restaurant-reviews.pdf" target="_blank">Examples</a>.',
            'color' => '#c4ce48',
        ]);
        \App\Idea::create([
            'title' => 'Tweet or email celebrities',
            'description' => 'that you look up to, whether they play music, star in movies, write books, respectfully ask them to consider looking into Veganism! <a href="https://veganactivism.org/resources/example-tweets-email-to-celebs.pdf" target="_blank">Examples here</a>.',
            'color' => '#b098f7',
        ]);
        \App\Idea::create([
            'title' => 'Donate to sanctuaries or',
            'description' => 'organizations that could really use the funding! You could even sponsor an Animal at a sanctuary; your money is sorely needed. <a href="https://animalcharityevaluators.org/donate/" target="_blank">Donation list</a>.',
            'color' => '#8194e8',
        ]);
        \App\Idea::create([
            'title' => 'Use your creative skillsets',
            'description' => 'and create various forms of art like songs, poems, stories, drawings, and so on, to spread the message of going vegan!',
            'color' => '#22e290',
        ]);
        \App\Idea::create([
            'title' => 'Set up a free public booth',
            'description' => 'somewhere and give out small sample cups of plant-based milks to show people how good they are, and where to buy them from! Hand out pamphlets with information.',
            'color' => '#e28122',
        ]);
        
        \App\Idea::create([
            'title' => 'Ask your family to donate',
            'description' => 'towards vegan organizations or sanctuaries in place of getting you birthday, wedding or christmas gifts! Plant some seeds in their mind! <a href="https://animalcharityevaluators.org/donate/" target="_blank">Donate list</a>.',
            'color' => '#431cb9',
        ]);

        \App\Idea::create([
            'title' => 'Perform chalk activism on',
            'description' => 'public streets to spread information, facts and more - legally. Make sure the chalk is vegan (Crayola isn’t vegan)!',
            'color' => '#64c714',
        ]);
        \App\Idea::create([
            'title' => 'Change your WiFi network',
            'description' => 'name to link directly to a free documentary! You can do "WATCHDOMINION.COM" or a similar link, it\'s a quick and easy thing to do! <a href="https://i.imgur.com/Mr2CZi4.jpg" target="_blank">Screenshot</a>.',
            'color' => '#8194e8',
        ]);

        \App\Idea::create([
            'title' => 'Post content on reddit.com',
            'description' => 'that\s relevant to the community without directly pushing an agenda. <a href="https://veganactivism.org/pages/reddit-activism">Click here</a> for a full guide on how to contribute there!',
            'color' => '#ff0097',
        ]);
    }
}
