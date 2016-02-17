<?php

use Illuminate\Database\Seeder;

class BlocksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blocks')->delete();
        
        \DB::table('blocks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'symbol' => '2799.HK',
                'exchange_id' => 1,
                'discount' => '15',
                'number_shares' => '100',
                'need_id' => 2,
                'custodian_id' => 1,
                'rep_id' => 5,
                'created_at' => '2016-02-12 15:57:22',
                'updated_at' => '2016-02-12 15:57:22',
                'status' => 'published',
            ),
            1 => 
            array (
                'id' => 2,
                'symbol' => '0416.HK',
                'exchange_id' => 1,
                'discount' => '12',
                'number_shares' => '30',
                'need_id' => 1,
                'custodian_id' => 1,
                'rep_id' => 1,
                'created_at' => '2016-02-12 15:59:02',
                'updated_at' => '2016-02-12 15:59:02',
                'status' => 'published',
            ),
        ));
        
        
    }
}