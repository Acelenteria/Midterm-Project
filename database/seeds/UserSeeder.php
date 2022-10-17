<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'lname' => 'Lenteria',
                'fname' => 'Angela Cecilia',
                'address' => 'Pob. Centro, Clarin, Bohol',
                'phone' => '09123456789',
                'email' => 'angelacecilia@gmail.com',
                'password' => bcrypt('Whoyou???')
            ],
            [
                'id' => 2,
                'lname' => 'Unabia',
                'fname' => 'Bruce',
                'address' => 'Pob. Sur, Clarin, Bohol',
                'phone' => '09123456789',
                'email' => 'bruceunabia@gmail.com',
                'password' => bcrypt('KinsaKa???')
            ],
            [
                'id' => 3,
                'lname' => 'Catalan',
                'fname' => 'Jhon Lyod',
                'address' => 'Libertad, Tubigon, Bohol',
                'phone' => '09123456789',
                'email' => 'jhonlyod@gmail.com',
                'password' => bcrypt('KinsaYou???')
            ],
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
