<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'OPPO mobile',
                "price"=> "500000",
                "description"=> " hp edisi marvel",
                "category"=>"mobile",
                "gallery"=>"https://www.oppo.com/content/dam/oppo/product-asset-library/reno/reno5/athena-marvel/v1/assets/kv_phone_1920-1fb987.png.webp"
                
            ],
            [
                'name'=>'LG mobile',
                "price"=> "3000000",
                "description"=> " hp yang sangat bagus dan murah",
                "category"=>"mobile",
                "gallery"=>"https://p-id.ipricegroup.com/uploaded_95210d46e102b231150360169dd09f03.jpg?position=1"
                
            ],
            [
                'name'=>'SAMSUNG  Tv',
                "price"=> "4000000",
                "description"=> "Tv yang sudah UHD",
                "category"=>"Tv",
                "gallery"=>"https://images.samsung.com/is/image/samsung/p6pim/id/ua65au7000kxxd/gallery/id-uhd-au7000-ua65au7000kxxd-422905439?$684_547_PNG$"
                
            ],
            [
                'name'=>'LG tv',
                "price"=> "3000000",
                "description"=> " tv yang sangat bagus dan murah",
                "category"=>"tv",
                "gallery"=>"https://www.lg.com/id/images/tv/md07529116/350.jpg"
                
            ]
        ]);
    }
}
