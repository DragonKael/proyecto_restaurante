<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ////creo 10 usuarios
        User::factory()->count(30)->create();

        //factory(App\Models\User::class,10)->create();
        //
        User::create([
            'name'=>'El Root',
            'email'=>'el_root@bash.su',
            'password'=>bcrypt('T0d0sV4mos@Mor1r'),
            'class'=>'superadmin'
        ]);
    }
}
