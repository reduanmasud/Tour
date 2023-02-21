<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SiteSetting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'role' => 3,
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password',
            'remember_token' => Str::random(10),
        ]);

        SiteSetting::create([
            'site_image' => "no data",
            'site_title' => "Ghuri",
            'site_bkash' => "no data",
            'site_nagat' => "no data",
            'site_address' => "no data",
            'site_icon' => "no data",
            'site_mobile' => "no data",
            'site_email' => "no data",
            'site_facebook' => "no data",
            'site_twitter' => "no data",
            'site_instragram' => "no data",
            'site_linkedin' => "no data",
        ]);

    }
}
