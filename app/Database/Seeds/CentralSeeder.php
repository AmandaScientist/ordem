<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CentralSeeder extends Seeder
{
    public function run()
    {
        //incocando o método run do CorSeeder
        $this->call('CorSeeder');
    }
}
