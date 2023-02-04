<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments = [
            [
                'method' => 'Visa Debit',
                'status' => 'Complete'
            ]
        ];

        foreach($payments as $payment)
        {
            \App\Models\Payment::factory(1)->create([
                'method' => $payment['method'],
                'status' => $payment['status']
            ]);
        }
    }
}
