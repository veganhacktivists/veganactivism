<?php

use Illuminate\Database\Seeder;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class OrganizationsTableSeeder extends Seeder
{
    public function run()
    {
        \App\Organization::create([
            'title' => 'Anonymous for the Voiceless',
            'slug' => 'anonymous-for-the-voiceless',
            'image_card_url' => 'https://veganactivism.org/banners/anonymous-for-the-voiceless.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-anonymous-for-the-voiceless.jpg',
            'call_to_action' => 'Participate in an Anonymous for the Voiceless "Cube of Truth"!',
            'card_content' => 'Anonymous for the Voiceless is an animal rights organisation that specializes in street activism.',
            'about' => [
                'Anonymous for the voiceless is an animal rights organisation that specializes in street activism. Over 9500 demonstrations in 845 cities across 79 countries worldwide, we\'ve convinced at least 350,000 bystanders to take veganism seriously. Through the use of local standard-practice footage, we expose to the public what is intentionally hidden from them when it comes to animal exploitation. Combining this with a value-based sales approach and resource literature, we fully equip the public with everything they need in switching to a vegan lifestyle.',
                'Anonymous for the voiceless holds an abolitionist stance against animal exploitation and promotes a clear vegan message. As we fight against speciesism (a form of discrimination), we do not tolerate discrimination, bullying or harassment of any kind within our organisation. We expect anyone representing us to be respectful and inclusive towards people of all political, racial, religious, cultural and other groups.',
                'Anonymous for the voiceless is independent of any political affiliation or religion and wish no promotion of either at our events.',
            ],
            'activism' => [
                'The Cube of Truth is a peaceful static demonstration akin to an art performance. This demonstration operates in a structured manner that triggers curiosity and interest from the public; we attempt to lead bystanders to a vegan conclusion through a combination of local standard-practice animal exploitation footage and conversations with a value-based sales approach.',
                'Masks, signs, and outreach literature are provided. Black clothing appropriate for the weather is essential, and please bring a fully charged laptop or tablet if you have one.',
            ],
        ]);

        \App\Organization::create([
            'title' => 'The Save Movement',
            'slug' => 'the-save-movement',
            'image_card_url' => 'https://veganactivism.org/banners/the-save-movement.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-the-save-movement.jpg',
            'call_to_action' => 'Find a "The Save Movement" event nearby and bear witness!',
            'card_content' => 'Groups around the world bear witness to pigs, cows, chickens and other animals en route to slaughter.',
            'about' => [
                'The Save Movement is comprised of groups around the world who bear witness of pigs, cows, chickens and other farmed animals en route to slaughter. Our goals are to raise awareness about the plight of farmed animals, to help people become vegan, and to build a mass-based, grassroots animal justice movement. The Save Movement started in December 2010 with the inception of Toronto Pig Save. Today there are over 560 groups in Canada, the U.S., U.K. & Ireland, Australia, continental Europe, Hong Kong, South Asia, East Asia, South Africa, Mexico and Central/South America.',
                'We encourage you to bear witness of animals sent to slaughter in your own community. Find out if there is a Save group near you (map of Save groups) or consider starting a Save group. We’ll help you with tips, resources, and support.',
            ],
            'activism' => [
                'The goals of our regular vigils at slaughterhouse are to encourage people to adopt a nonviolent, vegan lifestyle, and, just as importantly, to nurture advocacy, activism and organizing on the part each participant. We document the animal victims and the activists via photos and videos and use social media to spread global awareness and activism.',
            ],
        ]);
        \App\Organization::create([
           'title' => 'Meat The Victims',
            'slug' => 'meat-the-victims',
            'image_card_url' => 'https://veganactivism.org/banners/meat-the-victims.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-meat-the-victims.jpg',
            'call_to_action' => 'Peacefully enter farms & protest for media exposure and lives.',
            'card_content' => 'Meat The Victims is a new generation of the growing community willing to disobey unjust laws together to abolish animal exploitation.',
            'about' => [
              'Meat The Victims is a new generation of the growing community of citizens willing to disobey unjust laws together to abolish animal exploitation. Locking down inside the very places the animals are kept hostage and allowing the public to meet the victims of their choices through personal footage with them.',
            ],
            'activism' => [
                'The first ever Meat the Victims took place on April 6th 2018 at the Australian piggery where Leah had met that Mother pig. Leah went back inside, but this time with 67 other activists who locked down the piggery at 4am. The outside team arrived at 8am and the media waited in suspense for the inside team to come out.',
                'The impact of this action for the animals was incredibly powerful. Between the media and the attendee’s footage being shared there were hundred of thousands of views. The truth shocked the pubic as they met the victims of their choices.',
                'Since that day Meat The Victims has become a global movement. A new generation of the growing community of citizens willing to disobey unjust laws together to abolish animal exploitation. Locking down inside the very places the animals are hostage and allowing the public to meet the victims of their choices.',
            ],
        ]);
        \App\Organization::create([
           'title' => 'Direct Action Everywhere',
            'slug' => 'direct-action-everywhere',
            'image_card_url' => 'https://veganactivism.org/banners/direct-action-everywhere.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-direct-action-everywhere.jpg',
            'call_to_action' => 'Join DxE, disruptive but peaceful protests, save live animals!',
            'card_content' => 'Join DxE, disruptive but peaceful protests, save live animals!',
            'about' => [
              'Our activists engage in creative nonviolent direct action to confront speciesism. That can mean disruptive demonstrations inside or outside restaurants, grocery stores, animal labs, zoos, or anywhere else that promotes speciesist violence. It can also include leafleting or tabling, creative street theater, open rescues, or anything else in accordance with our Organizing Principles. It can even mean confronting friends and family members when they engage in behavior that normalizes animal exploitation.',
              'Peaceful protests on the street are pretty normal and accepted by the public these days, even if begrudgingly. Disrupting people while they break bread, however, is a complete breach of the status quo, thereby conveying the seriousness of the issues and inspiring people all over the world to take action for animals.',
            ],
            'activism' => [
                'Open Rescue means going into farms without concealing our identities, documenting the conditions, and proudly rescuing dying animals. We do open rescues because they powerfully demonstrate that when animals are a commodity, even the best-of-the-best farms are inherently violent. Further, we save individuals like Angie and Sarah, and we share their incredible stories - stories that will move the world.',
                'We encourage all chapters to organize at least one demonstration per month. Typically, these demonstrations are coordinated globally. Additionally, our activists often attend protests organized by other local animal rights groups. Ultimately, we encourage and empower every DxE activist and chapter to take creative, autonomous action any time!',
            ],
        ]);
    }
}
