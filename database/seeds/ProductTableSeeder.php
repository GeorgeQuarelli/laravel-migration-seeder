<?php

use Illuminate\Database\Seeder;
use App\Product;
Use Faker\Generator as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $dati_prodotti = [
        //     [
        //         'nome' => 'iPhone 11 Pro',
        //         'price' => '1600.00',
        //     ],
        //     [
        //         'nome' => 'iPhone 11 Pro Max',
        //         'price' => '1200.00',
        //     ],
        //     [
        //         'nome' => 'iPhone 11',
        //         'price' => '890.00',
        //     ]
        // ];
        //
        // foreach ($dati_prodotti as $dati_prodotto) {
        //     $nuovo_prodotto = new Product();
        //     $nuovo_prodotto->name=$dati_prodotto['nome'];
        //     $nuovo_prodotto->description='iphone description';
        //     $nuovo_prodotto->price=$dati_prodotto['price'];
        //     $nuovo_prodotto->save();
        // }

        for ($i = 0; $i < 10; $i++) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->name= $faker->sentence(4);
            $nuovo_prodotto->description= $faker->text(50);
            $nuovo_prodotto->price= $faker->randomFloat(2, 10, 1000);
            $nuovo_prodotto->save();
        }
    }
}
