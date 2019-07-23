<?php

use Illuminate\Database\Seeder;

class CateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i =0 ; $i<16 ; $i++){
            DB::table('cate') -> insert([
                ['id' => $i , 'name' => '蛋糕/糕点' , 'pid' => '0' , 'path' => '0'],
                ['id' => $i+1 , 'name' => '蛋糕' , 'pid' => $id , 'path' => '0'],
                ['id' => $i+2 , 'name' => '糕点' , 'pid' => '0' , 'path' => '0'],
                ['id' => $i+3 , 'name' => '蛋糕/糕点' , 'pid' => '0' , 'path' => '0'],
            ]);
        }
    }
}
