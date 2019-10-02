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
            'featured' => false,
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
            'featured' => false,
            'image_card_url' => 'https://veganactivism.org/banners/direct-action-everywhere.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-direct-action-everywhere.jpg',
            'call_to_action' => 'Join DxE, disruptive but peaceful protests, save live animals!',
            'card_content' => 'Join DxE, disruptive but peaceful protests, save live animals!',
            'about' => '<p>Our activists engage in creative nonviolent direct action to confront speciesism. That can mean disruptive demonstrations inside or outside restaurants, grocery stores, animal labs, zoos, or anywhere else that promotes speciesist violence. It can also include leafleting or tabling, creative street theater, open rescues, or anything else in accordance with our Organizing Principles. It can even mean confronting friends and family members when they engage in behavior that normalizes animal exploitation.</p><p>Peaceful protests on the street are pretty normal and accepted by the public these days, even if begrudgingly. Disrupting people while they break bread, however, is a complete breach of the status quo, thereby conveying the seriousness of the issues and inspiring people all over the world to take action for animals.</p>',
            'activism' => '<p>Open Rescue means going into farms without concealing our identities, documenting the conditions, and proudly rescuing dying animals. We do open rescues because they powerfully demonstrate that when animals are a commodity, even the best-of-the-best farms are inherently violent. Further, we save individuals like Angie and Sarah, and we share their incredible stories - stories that will move the world.</p><p>We encourage all chapters to organize at least one demonstration per month. Typically, these demonstrations are coordinated globally. Additionally, our activists often attend protests organized by other local animal rights groups. Ultimately, we encourage and empower every DxE activist and chapter to take creative, autonomous action any time!</p>',
        ]);
<<<<<<< Updated upstream
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
        \App\Organization::create([
            'title' => 'Hen Hero',
            'slug' => 'hen-hero',
            'featured' => false,
            'image_card_url' => 'https://veganactivism.org/banners/hen-hero.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-hen-hero.jpg',
            'call_to_action' => 'Be a Hen Hero for just a few minutes each day!',
            'card_content' => 'Join thousands of people taking one-minute daily actions to help millions of animals by becoming a Hen Hero!',
            'about' => 'Join our Hen Heroes team of online activists! Most of our Hen Hero actions take less than 60 seconds, but can spare hundreds of thousands of chickens a lifetime of suffering. Join Hen Heroes to receive one-minute daily actions to help end egregious animal abuse.',
            'activism' => 'It will only take you one minute a day on social media to make a big difference for hens. Volunteers can sign up to receive daily emails with tasks that can be completed in under a few minutes. These tasks complement their corporate campaigns and often involve tweeting, emailing, calling, or posting on Facebook.',
        ]);
        \App\Organization::create([
            'title' => 'Animal Protectors',
            'slug' => 'animal-protectors',
            'featured' => false,
            'image_card_url' => 'https://veganactivism.org/banners/animal-protectors.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-animal-protectors.jpg',
            'call_to_action' => 'Join Animal Protectors to stand up for animals online!',
            'card_content' => 'Take small, easy, daily online actions that add up to a big difference for millions of animals!',
            'about' => '<p>Animal Protectors is a non-profit shelter for cats and dogs located in New Kensington, PA. Non-profit means that they run completely off of donations and fundraising events. Their non-profit status gives them the ability to focus all their funds to caring for their animals and finding homes for them. They are also no-kill, meaning that they never euthanize for space. The mission of their no-kill shelter is to find safe, loving homes for abused, abandoned, and homeless animals in the A-K Valley and to educate the public about responsible pet ownership.</p><p>Their vision is to always be a trusted and caring no-kill animal shelter that the community looks to for animal rescue, education, and resources. Animal Protectors of Allegheny Valley was founded in 1966 as a network of foster homes providing temporary shelter and adoption services for abandoned and unwanted animals. From 1966 through 1985, volunteers fought to end the practice of euthanizing abandoned dogs in the city of New Kensington. The group raised funds to help with veterinary care and food for these strays by asking for donations from friends and relatives, many times paying the bills themselves.</p>',
            'activism' => '<p>As part of our commitment to their community, they strive to educate on the realities of animal abuse and neglect, spaying/neutering, responsible pet ownership and pit bull education. They offer low cost microchipping, "soft paws" applications, (an alternative to de-clawing), and rabies clinics.</p><p>One of the hardest parts of their jobs is receiving an animal who has been abused. Once an abused animal is in their care, they take every step to help this animal to trust again. Recognizing cruelty is not as easy as it sounds. Often, people assume that an animal’s behavior – such as being timid or frightened – is a sign of abuse. This is not always the case.</p>',
        ]);
        \App\Organization::create([
            'title' => 'Animal Ethics',
            'slug' => 'animal-ethics',
            'featured' => false,
            'image_card_url' => 'https://veganactivism.org/banners/animal-ethics.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-animal-ethics.jpg',
            'call_to_action' => 'Volunteer with Animal Ethics to make a difference globally.',
            'card_content' => 'If you want to make a difference for animals, or provide resources for animal advocates, you can collaborate with Animal Ethics.',
            'about' => '<p>Animal Ethics was formed to provide information and promote discussion and debate about issues in animal ethics, and to provide resources for animal advocates. Detailed information on the data regarding the situation of nonhuman animals as well as on the arguments to defend animals is not always available, and Animal Ethics intends to provide it to all those who want to help animals. In addition, they do outreach work themselves, aimed not at stopping particular ways in which animals are harmed (which other organizations are already addressing), but at achieving a shift in attitudes towards speciesism.</p><p>Our work deals with the way nonhuman animals are considered in everyday life, as well as how they are considered in fields that affect human attitudes and activities that are relevant to animals. These include academia, scientific fields, and the law. We look at the way nonhuman animals are impacted by current human activities, and how they might be impacted by future planned or unplanned human activities. This involves not only the ways we might harm them, but also how we might help them even when the cause of their plight is not human action.</p>',
            'activism' => 'The field of animal ethics deals with why we should take nonhuman animals into consideration in our moral decisions, and the ways in which we should. This has tremendously relevant practical consequences. Many people currently have little regard for nonhuman animals. But more often, people do give some consideration to the interests of animals, but still have a discriminatory attitude towards them. We can morally consider someone but still discriminate against them in a way that harms them. We can also discriminate against them in ways that don’t harm them at all, such as by helping some individuals more than we help others, for reasons that are unfair. Animal ethics as a field addresses these questions, and it is our aim to deal with them.',
        ]);
        \App\Organization::create([
            'title' => 'PETA Activism',
            'slug' => 'peta-activism',
            'featured' => false,
            'image_card_url' => 'https://veganactivism.org/banners/peta-activism.jpg',
            'image_full_url' => 'https://veganactivism.org/banners/full-size/big-peta-activism.jpg',
            'call_to_action' => 'Peta needs your help around the world, take action with us!',
            'card_content' => 'Our volunteers come from diverse backgrounds. No matter what your talents are, if you want to volunteer for animals, we have a place for you!',
            'about' => '<p> People for the Ethical Treatment of Animals is an American animal rights organization based in Virgina. PETA is a nonprofit corporation with nearly 400 employees, it claims that it has 6.5 million members and supporters, in addition to claiming that it is the largest animal rights group in the world. Its slogan is "Animals are not ours to eat, wear, experiment on, use for entertainment, or abuse in any other way."</p><p>PETA focuses its attention on the four areas in which the largest numbers of animals suffer the most intensely for the longest periods of time: in laboratories, in the food industry, in the clothing trade, and in the entertainment industry. They also work on a variety of other issues, including the cruel killing of rodents, birds, and other animals who are often considered “pests” as well as cruelty to domesticated animals.</p>',
            'activism' => 'PETA works through public education, cruelty investigations, research, animal rescue, legislation, special events, celebrity involvement, and protest campaigns.',
        ]);
=======

        \App\Organization::create([
            'title' => 'Vegan Outreach',
             'slug' => 'vegan-outreach',
             'featured' => false,
             'image_card_url' => 'https://veganactivism.org/banners/vegan-outreach.jpg',
             'image_full_url' => 'https://veganactivism.org/banners/full-size/big-vegan-mentorship-program.jpg',
             'call_to_action' => 'Volunteer in many ways with the organization Vegan Outreach!',
             'card_content' => 'The cruelty inflicted on farmed animals is terrible, but you can be a part of the movement that will end that abuse. Here’s how.',
             'about' => '<p>Vegan Outreach gives focus on reaching the people who are motivated enough to make changes now—of which there are always many in our target audience who just need some additional encouragement. By steadily increasing the number of vegans they are laying the groundwork to more quickly reach a tipping point.</p><p>Founded in 1993, Vegan Outreach is a 501c3 nonprofit organization working to end violence towards animals. They seek a future when sentient animals are no longer exploited as commodities.</p>',
             'activism' => '<p>Vegan Outreach creates goals for massive changes, by creating student outreach programs, in-depth activities, and long term support. Vegan Outreach campaigns to make switching to veganism easier, by campaigning to add vegan entrees at restaurants and other foodservice establishments, never shaming others, and putting the emphasis of veganism on avoiding obvious animal products, but using one\'s time and energy advocating to others rather focusing on personal purity or trace ingredients </p><p>An extremely noteable feature from Vegan Outreach, is their leafletting guides. If you are interested in leafletting, (https://veganoutreach.org/leafleting/) Vegan outreach can provide you with the materials to learn how to become an effective leafletter - through educating demonstrations, downloadable PDFS, and their own leafletting order form.</p>',
         ]);

        \App\Organization::create([
            'title' => 'Adopt A College',
             'slug' => 'adopt-a-college',
             'featured' => false,
             'image_card_url' => 'https://veganactivism.org/banners/vegan-outreach.jpg',
             'image_full_url' => 'https://veganactivism.org/banners/full-size/big-adopt-a-college.png',
             'call_to_action' => 'Hand out pro-veg booklets and show virtual reality videos!',
             'card_content' => 'Adopt a College (AAC) is a program in which activists hand out pro-veg booklets and show iAnimal virtual reality videos.',
             'about' => '<p>Adopt a College (AAC) is a program in which activists hand out pro-veg booklets and show iAnimal virtual reality videos exposing the suffering of farmed animals. AAC reaches hundreds of thousands of college students who wouldn’t approach a literature table. We also leaflet high schools, concerts, festivals, and anywhere young adults can be found. Most of our activists aren’t students.</p><p>As of Dec 20, 2018, AAC activists have handed out 20,458,192 booklets and shown VR videos to 26,014 people at 3,941 schools!</p>',
             'activism' => '',
         ]);

        \App\Organization::create([
            'title' => 'Digital Vegan Activists',
             'slug' => 'digital-vegan-activists',
             'featured' => false,
             'image_card_url' => 'https://veganactivism.org/banners/digital-activists.jpg',
             'image_full_url' => 'https://veganactivism.org/banners/full-size/big-digital-activists.jpg',
             'call_to_action' => 'Support one pro-vegan comment a day on Facebook!',
             'card_content' => 'We post one pro-vegan comment on non-vegan pages per day, members will click like and have it quickly rise to the top to spread information!',
             'about' => '<p>	In this non-partisan vegan activist group, we do the following: Our daily leader scans or monitors a popular non-vegan Facebook page (examples include food and fashion pages, major news outlets). The leader makes a non-aggressive, pro-vegan comment on a post on that page. They post a link to their comment in the DVA group (this link is pinned for the day) As soon as possible after the link is posted, group members Like it (and add replies and additional comments if they choose to do so).The leader’s comment will rise to the top of its page in proportion to the number of Likes and replies it gets, and the speed at which they arrive! We support one link each day and celebrate each night! On some days, we will share additional submissions from members for your support.</p><h2 class="post_title mb-20px">What else should I know?</h2><p>In speaking to others online, we value thoughtful, reasoned, respectful commentary, questions, and the provision of links to help people make the connection and learn about veganism as an ethical position. We absolutely reject being rude, belittling people’s intelligence, their dignity, and any form of discriminatory language (e.g. sexism, racism, ableism, ageism, homophobia, etc.). We are here to raise awareness with a clear vegan message to help create a vegan world. We also reject any comments that promote less than veganism and abolition as a minimum standard, such as welfarism or reductionism, or any comments that may confuse people regarding veganism as the end goal and minimum standard. If you want to focus on improving treatment or reducing use, there are many other groups for that.</p>',

             'activism' => '',
         ]);

        \App\Organization::create([
            'title' => 'VegFund',
             'slug' => 'vegfund-activism',
             'featured' => false,
             'image_card_url' => 'https://veganactivism.org/banners/vegfund.png',
             'image_full_url' => 'https://veganactivism.org/banners/full-size/big-digital-activists.jpg',
             'call_to_action' => 'VegFund offers a wide variety of grants for vegan advocacy!',
             'card_content' => 'VegFund empowers vegan activists worldwide by funding and supporting effective outreach activities that inspire a vegan lifestyle.',
             'about' => '<p>The first thing you should know is that VegFund exists to support you in your efforts to inform people about the benefits of plant-based and vegan living. We provide grants, connections, and skills-building resources to animal rights, environmental, and human health advocates and organizations.  In 2018, VegFund supported nearly 1,000 vegan outreach activities spanning more than 45 countries. These activities ranged from film screenings and video outreach to vegfests, food samplings, conferences, research projects, vegan challenges, online veg pledges, and more. And, we\'ve been doing this since 2009!
             
             Hand-in-hand with financial support is our commitment to help you maximize the effectiveness of your outreach. VegFund develops trainings for activists, curates the very best research available on plant-based living and effective advocacy, and facilitates information sharing among activists in the vegan community.
             
             Take a look for yourself. Visit the Grants section of the VegFund website where you can read the details about our grant programs. And browse our Activist Stories for some real-life examples.
             
             Start planning your own event today!</p>',

             'activism' => '',
         ]);
>>>>>>> Stashed changes
    }
}
