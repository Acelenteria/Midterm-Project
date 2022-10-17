<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'Angela Cecilia Lenteria',
                'init_invest' => 50000,
                'start_date' => '2022-10-17',
                'remarks' => 'Transaction Done'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Bruce Unabia',
                'init_invest' => 100000,
                'start_date' => '2022-10-17',
                'remarks' => 'Transaction Done'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Eunizel Gabas',
                'init_invest' => 400000,
                'start_date' => '2022-10-17',
                'remarks' => 'Transaction Done'
            ],
        ];

        foreach ($data as $acc) {
            App\Account::create($acc);
        }
    }
}
