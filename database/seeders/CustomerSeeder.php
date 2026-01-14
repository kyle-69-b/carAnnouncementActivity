<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'first_name' => 'Kyle',
            'last_name' => 'Mendez',
            'email' => 'knnm4240@gmail.com',
            'phone' => '09488719334'
        ]);
        Customer::create([
            'first_name' => 'Rege',
            'last_name' => 'Pelesores',
            'email' => 'pelesoresreggienino16@example.com',
            'phone' => '09979409888'
        ]);
    }
}
