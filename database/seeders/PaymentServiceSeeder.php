<?php

namespace Database\Seeders;

use App\Models\PaymentService;
use Illuminate\Database\Seeder;

class PaymentServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentService::updateOrCreate([
            'pay_service_name' => 'Nagad',
            'pay_service_account'  => '+8801778966356',
            'pay_service_type'  => 'Personal',
        ]);
        PaymentService::updateOrCreate([
            'pay_service_name' => 'bKash',
            'pay_service_account'  => '+8801778966356',
            'pay_service_type'  => 'Merchant',
        ]);
        PaymentService::updateOrCreate([
            'pay_service_name' => 'Rocket / DBBL',
            'pay_service_account'  => '+8801778966356',
            'pay_service_type'  => 'Personal',
        ]);
        PaymentService::updateOrCreate([
            'pay_service_name' => 'Paypal',
            'pay_service_account'  => 'mah@mahekarim.me',
            'pay_service_type'  => 'Business',
        ]);
    }
}
