<?php

use Illuminate\Database\Seeder;

class SNSTabaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => 1,
            'logo' => 'https://onecareer.imgix.net/uploads/company/square_logo/43/1611635125-sony_logo_.png?ixlib=rails-3.1.0&auto=format&fit=max&w=136',
            'name' => 'ソニーグループ',
            'address' => '東京都港区港南1-7-1',
            'potision' => '社長　兼　CEO',
            'president' => '吉田兼一朗',
            'capital' => '8,606億円',
            'employees' => '128,400名',
        ]);
    }
}
