<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            [
                'first_name'  => 'João',
                'last_name'  => 'Vieira',
                'cpf'  => '165.344.047-37',
                'phone'  => '(21) 9 7969-0623',
                'email'  => 'admin@email.com',
                'password'  => bcrypt('secret123')
            ], [
                'first_name'  => 'Davi',
                'last_name'  => 'Labanca',
                'cpf'  => '165.344.047-36',
                'phone'  => '(21) 9 7969-0622',
                'email'  => 'customer@email.com',
                'password'  => bcrypt('secret123')
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
