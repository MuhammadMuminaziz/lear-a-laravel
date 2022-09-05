<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // collect([
        //     [
        //         'name' => 'Muhammad Mumin Azis',
        //         'email' => 'muminazis@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Ahmad Fauzi',
        //         'email' => 'ahmadfauzi@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ])->each(function ($user) {
        //     DB::table('users')->insert($user);
        // });
        User::factory(10)->create();
    }
}
