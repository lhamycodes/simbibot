<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        do {
            $code = Str::orderedUuid();
            $code_avail = User::where('uuid', $code)->first();
        } while (!empty($code_avail));

        $firstName = str_random(5);
        $lastName = str_random(5);

        DB::table('users')->insert([
            'uuid' => $code,
            'name' => $firstName ." ". $lastName,
            'email' => $lastName.'@gmail.com',
            'password' => bcrypt('adminPassword'),
        ]);
    }
}
