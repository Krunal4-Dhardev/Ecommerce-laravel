<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //for($i=0;$i<=4;$i++)
      //  {
            DB::table('products')->insert([
                [
                    'name'=>'LG',
                    'price'=>10000,
                    'category'=>"Mobile",
                    'description'=>"6gb ram 124gb storage",
                    'gallary'=>"https://www.lg.com/in/images/mobile-phones/md07518623/gallery/LMF100EMW-D-05.jpg",
                ],
                [
                    'name'=>'Samsung',
                    'price'=>64000,
                    'category'=>"Mobile",
                    'description'=>"12gb ram 128gb storage",
                    'gallary'=>"https://www.reliancedigital.in/medias/Samsung-S20-SmartPhone-491666902-i-1-1200Wx1200H?context=bWFzdGVyfGltYWdlc3w4MDM4MnxpbWFnZS9qcGVnfGltYWdlcy9oNWUvaGU1LzkyNTEwMTY0NzQ2NTQuanBnfGQ4ODY1M2FmMTQ1Mjg1YjY2N2JkM2Q1MGYyM2JiMzgyMTk5ZGM4NmRmMzU2ZWEyNzBhZDIyNTZhNTY1MGZhNDg"
                ],
                [
                    'name'=>'LG',
                    'price'=>3200,
                    'category'=>"Mobile",
                    'description'=>"4gb ram 64gb storage",
                    'gallary'=>"https://www.lg.com/in/images/mobile-phones/md07517838/gallery/LMG910EMW-Aurora-Silver-D-03.jpg"
                ]
            ]);
     //   }
    }
}
