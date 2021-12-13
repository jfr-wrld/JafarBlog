<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new App\User;
        $administrator->name = 'Asidik';
        $administrator->email = 'asidikaj@gmail.com';
        $administrator->password = \Hash::make('jafar123');

        $administrator->save();

        $this->command->info('User Admin sudah diinsert');
    }
}
