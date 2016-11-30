<?php
use App\Core\Product\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        for ($i = 0; $i <216; $i++) {
            $name = $faker->name;
            Product::create(array(
                'category_id' => $faker->numberBetween(1, 12),
                'code' => $faker->ean13,
                'name' => $name,
                'slug' => str_slug($name, "-"),
                'image'=> 'media/products/img_'.$faker->numberBetween(1,100).'.jpg',
                'price' => $faker->randomFloat(2, 30, 150),
                'stock' => $faker->numberBetween(20, 100),
//                'condition' => $faker->numberBetween(1, 2),
//                'views' => 0,
                'description' => $faker->text,
                'estado'=>$faker->numberBetween(1,2)
            ));
        }
    }
}
