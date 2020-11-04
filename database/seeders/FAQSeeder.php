<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FAQ::updateOrCreate([
           'faq_ques' => 'Do you ship London to Sylhet ?',
           'faq_ans'  => ' Yes!, We Do. ',
        ]);
    }
}
