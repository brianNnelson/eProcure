<?php

use Illuminate\Database\Seeder;

class SourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sources')->delete();
        
        \DB::table('sources')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Broker',
                'type' => 'blocks',
                'relation_id' => 0,
                'created_at' => '2016-02-12 15:57:22',
                'updated_at' => '2016-02-12 15:57:22',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Agent',
                'type' => 'blocks',
                'relation_id' => 0,
                'created_at' => '2016-02-12 15:57:22',
                'updated_at' => '2016-02-12 15:57:22',
            ),
        ));
        
        
    }
}