<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\Payment;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::factory()->times(10)->create();
    }
}

