<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [ 'name' => 'admin' ],
            [ 'name' => 'vendor' ],
            [ 'name' => 'nozap' ],
            [ 'name' => 'customer' ],
        ];
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
