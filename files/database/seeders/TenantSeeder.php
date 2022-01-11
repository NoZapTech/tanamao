<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant = [
            'user_id'               => 1,
            'segment'               => 1,
            'name'                  => 'Agência Missel',
            'address_zipcode'       => '20.943-000',
            'address_neighborhood'  => 'Barra da Tijuca',
            'address_street'        => 'Ayrton Senna',
            'address_number'        => '2500',
            'address_city'          => 'Rio de Janeiro',
            'address_state'         => 'Rio de Janeiro'
        ];
        Tenant::create($tenant);
    }
}
