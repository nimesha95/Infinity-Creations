<?php

use Illuminate\Database\Seeder;

class MugTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mug = new \App\Mug([
            'mainimage' => 'https://5.imimg.com/data5/WT/XV/MY-10699537/printed-mugs-250x250.jpg',
            'title' => 'Faces Mug',
            'description' => 'This mug has faces printed on it',
            'price' => 500
        ]);
        $mug->save();

        $mug = new \App\Mug([
            'mainimage' => 'https://4.imimg.com/data4/HY/BH/MY-27716513/printed-mugs-250x250.png',
            'title' => 'In love Mug',
            'description' => 'This mug has phrase IN LOVE printed',
            'price' => 525
        ]);
        $mug->save();

        $mug = new \App\Mug([
            'mainimage' => 'https://3.imimg.com/data3/KH/BA/MY-15462102/printed-mugs-250x250.jpg',
            'title' => 'Flowers Mug',
            'description' => 'This mug has flowers printed on it',
            'price' => 550
        ]);
        $mug->save();

        $mug = new \App\Mug([
            'mainimage' => 'https://4.imimg.com/data4/UG/TD/MY-13616476/printed-mug-250x250.jpg',
            'title' => 'LOVE Mug',
            'description' => 'This mug has LOVE logo printed on it',
            'price' => 575
        ]);
        $mug->save();
    }
}
