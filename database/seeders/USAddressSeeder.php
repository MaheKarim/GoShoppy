<?php

namespace Database\Seeders;

use App\Models\USAddress;
use Illuminate\Database\Seeder;

class USAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        USAddress::updateOrCreate([
            'house_number'    => '6650 NE Mt. St. Helens',
            'street_number'   => 'C/O BDW-CLZ',
            'state_name'   => 'Portland, Oregon',
            'postal_code'   => '97252',
            'telephone_number'   => ' 503-914-6317',
            'deletable' => false,
        ]);
    }
}
