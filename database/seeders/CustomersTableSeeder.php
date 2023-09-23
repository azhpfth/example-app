<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Lala',
            'gender' => 'Perempuan',
            'phone_number' => '0857927495',
            'email' => '@lala12.gmail.com',
        ]);
        Customer::create([
            'name' => 'Andi',
            'gender' => 'Laki-laki',
            'phone_number' => '0854739294',
            'email' => '@andi33.gmail.com',
        ]);
    }
}
