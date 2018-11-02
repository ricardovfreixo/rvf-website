<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
        	'name' => 'Ricardo',
        	'email' => 'hello@ricardovfreixo.me',
        	'email_verified_at' => \Carbon\Carbon::now(),
        	'password' => \Hash::make('your-password-here'),
        ]);

        factory(App\Post::class,50)->create([
        	'user_id' => $user->id
        ]);
    }
}
