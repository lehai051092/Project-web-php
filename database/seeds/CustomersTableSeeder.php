<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->name = "Hai";
        $customer->age = 18;
        $customer->save();

        $customer = new Customer();
        $customer->name = "Ha";
        $customer->age = 19;
        $customer->save();

        $customer = new Customer();
        $customer->name = "VA";
        $customer->age = 20;
        $customer->save();

        $customer = new Customer();
        $customer->name = "Vu";
        $customer->age = 18;
        $customer->save();

        $customer = new Customer();
        $customer->name = "Thanh";
        $customer->age = 34;
        $customer->save();
    }
}
