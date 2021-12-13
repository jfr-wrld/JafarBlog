<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new Setting;
        $setting->owner = 'Asidik Al Jafar';
        $setting->bio = "Hi, I'm Asidik Al Jafar. UI/UX Design Enthusiasts";
        $setting->web_portfolio = 'https://github.com/jfr-wrld';
        $setting->fb = 'https://web.facebook.com/iamjfrr';
        $setting->twitter = 'https://twitter.com/iamjfrr';
        $setting->instagram = 'https://www.instagram.com/iam.jfr/';

        $setting->save();

        $this->command->info('Setting berhasil');
    }
}
