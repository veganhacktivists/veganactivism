<?php

namespace App\Console\Commands;

use App\Role;
use App\Models\BackpackUser;
use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SeedProduction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:seed:prod';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed the production database with records';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->seedRoles();
        $this->seedFirstUser();
        $this->seedCustomData();
    }

    private function seedRoles()
    {
        /*
         * Feel free to add your own additional roles, but
         * DO NOT change/remove the admin role. It is
         * required for the admin panel to work.
         */
        $roleNames = [
            'admin',
        ];
        $this->info('Creating roles:');
        foreach ($roleNames as $roleName) {
            Role::create(['name' => $roleName]);
            $this->line("* `$roleName` role created");
        }
    }

    private function seedFirstUser()
    {
        $this->info('Creating the initial admin user!');
        $name = $this->ask('Name', 'Admin User');
        $defaultEmail = 'admin@'.preg_replace('/https?:\/\//', '', config('app.url'));
        do {
            $email = $this->ask('Email', $defaultEmail);
        } while (!filter_var($email, FILTER_VALIDATE_EMAIL));
        do {
            $password = $this->secret('Password');
        } while (!$password);
        $user = (new BackpackUser())->fill([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        $user->email_verified_at = time();
        try {
            DB::transaction(function () use ($user) {
                $user->save();
                $user->assignRole('admin');
            });
            $this->info('User successfully created');
        } catch (QueryException $e) {
            $this->error($e->getMessage());
            $this->seedFirstUser();
        }
    }

    private function seedCustomData()
    {
        $org = \App\Organization::create([
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

        $org->links()->create([
            'url' => 'https://www.anonymousforthevoiceless.org',
        ]);
    }
}
