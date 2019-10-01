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
            'featured' => true,
            'image_card_url' => 'https://veganactivism.org/banners/anonymous-for-the-voiceless.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-anonymous-for-the-voiceless.jpg',
            'call_to_action' => 'Participate in an Anonymous for the Voiceless "Cube of Truth"!',
            'card_content' => 'Anonymous for the Voiceless is an animal rights organisation that specializes in street activism.',
            'about' => "<p>Anonymous for the voiceless is an animal rights organisation that specializes in street activism. Over 9500 demonstrations in 845 cities across 79 countries worldwide, we've convinced at least 350,000 bystanders to take veganism seriously. Through the use of local standard-practice footage, we expose to the public what is intentionally hidden from them when it comes to animal exploitation. Combining this with a value-based sales approach and resource literature, we fully equip the public with everything they need in switching to a vegan lifestyle.</p><p>Anonymous for the voiceless holds an abolitionist stance against animal exploitation and promotes a clear vegan message. As we fight against speciesism (a form of discrimination), we do not tolerate discrimination, bullying or harassment of any kind within our organisation. We expect anyone representing us to be respectful and inclusive towards people of all political, racial, religious, cultural and other groups.</p><p>Anonymous for the voiceless is independent of any political affiliation or religion and wish no promotion of either at our events.</p>",
            'activism' => '<p>The Cube of Truth is a peaceful static demonstration akin to an art performance. This demonstration operates in a structured manner that triggers curiosity and interest from the public; we attempt to lead bystanders to a vegan conclusion through a combination of local standard-practice animal exploitation footage and conversations with a value-based sales approach.</p><p>Masks, signs, and outreach literature are provided. Black clothing appropriate for the weather is essential, and please bring a fully charged laptop or tablet if you have one.</p>',
        ]);

        \App\Organization::create([
            'title' => 'The Save Movement',
            'slug' => 'the-save-movement',
            'featured' => false,
            'image_card_url' => 'https://veganactivism.org/banners/the-save-movement.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-the-save-movement.jpg',
            'call_to_action' => 'Find a "The Save Movement" event nearby and bear witness!',
            'card_content' => 'Groups around the world bear witness to pigs, cows, chickens and other animals en route to slaughter.',
            'about' => "The Save Movement is comprised of groups around the world who bear witness of pigs, cows, chickens and other farmed animals en route to slaughter. Our goals are to raise awareness about the plight of farmed animals, to help people become vegan, and to build a mass-based, grassroots animal justice movement. The Save Movement started in December 2010 with the inception of Toronto Pig Save. Today there are over 560 groups in Canada, the U.S., U.K. &amp; Ireland, Australia, continental Europe, Hong Kong, South Asia, East Asia, South Africa, Mexico and Central\/South America.\",\"We encourage you to bear witness of animals sent to slaughter in your own community. Find out if there is a Save group near you (map of Save groups) or consider starting a Save group. We\u2019ll help you with tips, resources, and support.",
            'activism' => 'The goals of our regular vigils at slaughterhouse are to encourage people to adopt a nonviolent, vegan lifestyle, and, just as importantly, to nurture advocacy, activism and organizing on the part each participant. We document the animal victims and the activists via photos and videos and use social media to spread global awareness and activism.',
        ]);
        \App\Organization::create([
           'title' => 'Meat The Victims',
            'slug' => 'meat-the-victims',
            'featured' => false,
            'image_card_url' => 'https://veganactivism.org/banners/meat-the-victims.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-meat-the-victims.jpg',
            'call_to_action' => 'Peacefully enter farms & protest for media exposure and lives.',
            'card_content' => 'Meat The Victims is a new generation of the growing community willing to disobey unjust laws together to abolish animal exploitation.',
            'about' => 'Meat The Victims is a new generation of the growing community of citizens willing to disobey unjust laws together to abolish animal exploitation. Locking down inside the very places the animals are kept hostage and allowing the public to meet the victims of their choices through personal footage with them.',
            'activism' => "<p>The first ever Meat the Victims took place on April 6th 2018 at the Australian piggery where Leah had met that Mother pig. Leah went back inside, but this time with 67 other activists who locked down the piggery at 4am. The outside team arrived at 8am and the media waited in suspense for the inside team to come out.</p><p>The impact of this action for the animals was incredibly powerful. Between the media and the attendee \u2019s footage being shared there were hundred of thousands of views. The truth shocked the pubic as they met the victims of their choices.</p><p>Since that day Meat The Victims has become a global movement. A new generation of the growing community of citizens willing to disobey unjust laws together to abolish animal exploitation. Locking down inside the very places the animals are hostage and allowing the public to meet the victims of their choices.</p>",
        ]);
        \App\Organization::create([
           'title' => 'Direct Action Everywhere',
            'slug' => 'direct-action-everywhere',
            'featured' => true,
            'image_card_url' => 'https://veganactivism.org/banners/direct-action-everywhere.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-direct-action-everywhere.jpg',
            'call_to_action' => 'Join DxE, disruptive but peaceful protests, save live animals!',
            'card_content' => 'Join DxE, disruptive but peaceful protests, save live animals!',
            'about' => '<p>Our activists engage in creative nonviolent direct action to confront speciesism. That can mean disruptive demonstrations inside or outside restaurants, grocery stores, animal labs, zoos, or anywhere else that promotes speciesist violence. It can also include leafleting or tabling, creative street theater, open rescues, or anything else in accordance with our Organizing Principles. It can even mean confronting friends and family members when they engage in behavior that normalizes animal exploitation.</p><p>Peaceful protests on the street are pretty normal and accepted by the public these days, even if begrudgingly. Disrupting people while they break bread, however, is a complete breach of the status quo, thereby conveying the seriousness of the issues and inspiring people all over the world to take action for animals.</p>',
            'activism' => '<p>Open Rescue means going into farms without concealing our identities, documenting the conditions, and proudly rescuing dying animals. We do open rescues because they powerfully demonstrate that when animals are a commodity, even the best-of-the-best farms are inherently violent. Further, we save individuals like Angie and Sarah, and we share their incredible stories - stories that will move the world.</p><p>We encourage all chapters to organize at least one demonstration per month. Typically, these demonstrations are coordinated globally. Additionally, our activists often attend protests organized by other local animal rights groups. Ultimately, we encourage and empower every DxE activist and chapter to take creative, autonomous action any time!</p>',
        ]);
        \App\Organization::create([
            'title' => 'The Vegan Society',
            'slug' => 'the-vegan-society',
            'featured' => false,
            'image_card_url' => 'https://veganactivism.org/banners/the-vegan-society.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-the-vegan-society.jpg',
            'call_to_action' => 'Support The Vegan Society with some global volunteer work!',
            'card_content' => 'The Vegan Society is an educational charity that provides information and guidance on aspects of veganism.',
            'about' => 'Since Donald Watson founded The Vegan Society in 1944, volunteers have played a vital role in getting us to where we are today. From the streets to the spreadsheets, volunteers enable key projects and messages to get out in to the world, and so allow our work to keep growing. There are a range of ways you can get involved, whether you have 20 or 2 hours a month. We’re really proud of our volunteers, and love to shout about how great they are at every chance we get.',
            'activism' => '<p>The practicalities of volunteering ranges from role to role, but regardless of what you’re doing, volunteering with us will always be meaningful, enjoyable, and well supported. Every project you ever work on will hold value to the charity’s work, and will feed in to the future of veganism. You’ll always be given what you need, and you’ll never be alone (unless you want to be!). Our volunteers usually work in teams, either with other volunteers or with staff, so you’ll be able to meet other vegans who care about the same things that you do. We have a monthly newsletter, so you’ll always be kept in the loop about what’s coming up, and what’s going on now. Along with all this, you’ll have a great time developing your skills and spreading the word about why everyone should be vegan, and stay vegan.</p><p>Our volunteering happens in three camps. We have our office volunteer team (working at our Birmingham based Vegan HQ supporting general office duties), our specialist volunteers (lending their skills in various areas to support our work, spread out across the world), and finally our Community Network, launching summer 2019. The community network spans the UK, engaging local communities to learn more about The Vegan Society and veganism. To find out more, check out the detailed web pages below.</p><p>If you see a role that you\'re interested in, you can submit your application via our online form. From there, we will aim to reveiw your application within 5 working days, and get back to you to explain any next steps.</p>
                        <h2 class="post_title my-5">Learn more here</h2>
                        <ul class="mt-3">
                            <li><a style="color:#ff5959;" href="https://www.vegansociety.com/get-involved/volunteering-vegan-society/community-network" target="_blank">Community network</a></li>
                            <li><a style="color:#ff5959;" href="https://www.vegansociety.com/get-involved/volunteering-vegan-society/specialist-volunteering" target="_blank">Specialist Volunteering</a></li>
                            <li><a style="color:#ff5959;" href="https://www.vegansociety.com/get-involved/volunteering-vegan-society/office-volunteering" target="_blank">Office Volunteering</a></li>
                        </ul>"',
        ]);
        \App\Organization::create([
            'title' => 'Mercy For Animals',
            'slug' => 'mercy-for-animals',
            'featured' => false,
            'image_card_url' => 'https://veganactivism.org/banners/mercy-for-animals.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-mercy-for-animals.jpg',
            'call_to_action' => 'Make an impact by volunteering with Mercy for Animals!',
            'card_content' => 'Join our global movement and organize local events, take online actions, and support our mission!',
            'about' => '<p>Mercy For Animals exists to end the greatest cause of suffering on the planet: the exploitation of animals for food, in particular, industrial animal agriculture, aquaculture, and fishing.</p><p>These forms of food production cause egregious animal suffering and have detrimental effects on the planet and people.</p><p>MFA is dedicated to eradicating this cruel food system and replacing it with one that is not just kind to animals but essential for the future of our planet and all who share it.</p>',
            'activism' => '<p>Mercy For Animals engages in a variety of farmed animal advocacy programs, often involving filming or promoting footage from their undercover investigations of factory farms. They promote investigation footage primarily through the media and online campaigns. MFA also engages in legal work and corporate campaigns on behalf of animals, and they conduct grassroots outreach designed to change individuals’ attitudes and behavior towards farmed animals.</p><p>Over the past few years, MFA has developed strong online outreach programs in the U.S. and internationally. They report that, in the first eight months of 2016, their pro-veg web pages have been viewed approximately 29.8 million times and their social media content has been shared approximately 3.8 million times. They’ve distributed Vegetarian Starter Guides both digitally and in print, and have convinced almost 1 million individuals to pledge to go vegetarian. In addition to individual outreach, MFA has successfully conducted corporate outreach. In the first eight months of 2016 they’ve achieved, on their own or in conjunction with other groups, approximately 58 corporate policy changes. They’ve helped convince corporations to stop producing or using eggs from caged hens and to prohibit the slaughtering of broiler chickens while conscious.</p>',
        ]);
        \App\Organization::create([
            'title' => 'Challenge 22',
            'slug' => 'challenge-22',
            'featured' => false,
            'image_card_url' => 'https://veganactivism.org/banners/challenge-22.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-challenge-22.jpg',
            'call_to_action' => 'Mentor people looking to become Vegan with Challenge 22!',
            'card_content' => 'Challenge 22 offers users a free, supportive online framework for trying veganism for 22 days.',
            'about' => '<p>If you have been vegan for over 6 months, have patience and empathy for new vegans and the motivation to help make the vegan population grow, you’re exactly what Challange 22 is looking for! Join their mentoring program by hitting the "Volunteer" button below.</p><p>Challenge 22 offers participants a free, supportive online framework for trying veganism for 22 days. More than 300K people from all over the world have participated in the project since its launch in March 2014. While similar programs around the world are based on vegan starter-kits and email guides, Challenge 22 is an interactive program that offers a unique combination of group support and personal mentoring.</p>',
            'activism' => '<p>First, Each mentee joins a secret Facebook group, which enables participants to share their experience and learn from each other. The group is mentored by experienced vegan volunteers – culinary experts, parents, students and longtime vegans. In addition to the group support, mentees can be assigned a personal mentor, for the space to share and ask privately. The program features experienced dietitians, who are happy to give nutritional advice. In addition, each day participants receive a small task. By the end of the Challenge, mentees are equipped with nutritional information, cooking tips and recipes that enable them to maintain a healthy, tasty vegan lifestyle.</p><p>It all happens in a very joyful and supportive atmosphere – people upload pictures of their dishes, share recipes and cooking tips, talk about their daily experience, and all in all, live a great adventure together with other people in the same spirit.</p>',
        ]);
        \App\Organization::create([
           'title' => 'The Humane League',
           'slug' => 'the-humane-league',
           'featured' => false,
           'image_card_url' => 'https://veganactivism.org/banners/the-humane-league.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-the-humane-league.jpg',
            'call_to_action' => 'Join The Humane League\'s Fast Action Network!',
            'card_conent' => 'A group of dedicated online activists spending only a few minutes of their time each week to assist.',
            'about' => '<p>The Humane League was rated as a "Top Charity" by Animal Charity Evalators for each of their ranking periods! As well as certified Best In America by Independent Charities of America.</p><p>They exist to end the abuse of animals raised for food. They work to reform the way farm animals are treated while also inspiring people to make more compassionate food choices. Their strategy includes hard-hitting corporate campaigns and wide-ranging outreach and education programs, supported by an extensive network of organizations, activists and supporters around the world.</p>',
            'activism' => '<p>In the US, The Humane League has on-the-ground organizers in major cities across the country. These grassroots staff build and strengthen local communities of changemakers that support our work and spread their message, amplifying the ability to create meaningful change for farm animals.</p><p>They bring a pragmatic, objective approach in evaluating and testing our methods to determine what creates the most impact. That’s the purpose of Humane League Labs, where we engage in direct testing to improve our vegan advocacy and education efforts.</p><p>Their reach extends globally with the Open Wing Alliance. Through grants and training, they work in partnership with organizations on every continent with the singular goal of ending cages for laying hens.</p>',
        ]);
    }
}
