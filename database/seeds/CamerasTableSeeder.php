<?php

use Illuminate\Database\Seeder;
use App\Camera;

class CamerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camera = new \App\Camera([
          'name'=> 'Canon EOS 1300D',
          'condition'=> 'excellent',
          'price'=> '£309.00',
          'type'=> 'DSLR'
        ]);
        $camera->save();
        $camera = new \App\Camera([
          'name'=> 'Nikon D3300',
          'condition'=> 'Poor',
          'price'=> '£225.00',
          'type'=> 'DSLR'
        ]);
        $camera->save();
        $camera = new \App\Camera([
          'name'=> 'Pentax K-1',
          'condition'=> 'Good',
          'price'=> '£900.00',
          'type'=> 'DSLR'
        ]);
        $camera->save();
        $camera = new \App\Camera([
          'name'=> 'Nikon D3300',
          'condition'=> 'Very Good',
          'price'=> '£329',
          'type'=> 'DSLR'
        ]);
        $camera->save();

    }
}
