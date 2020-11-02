<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::updateOrCreate([
        'status'    => 'Approve',
        'status_description'   => 'Order Approve',
        'deletable' => false,
        ]);
        Status::updateOrCreate([
            'status'    => 'Reject',
            'status_description'   => 'Order Reject',
            'deletable' => false,
        ]);
        Status::updateOrCreate([
            'status'    => 'Pending',
            'status_description'   => 'Order Pending',
            'deletable' => false,
        ]);
    }
}
