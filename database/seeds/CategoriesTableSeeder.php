<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => "Celulares",
            'slug' => str_slug("Celulares", "-"),
            'icon' => 'fa fa-mobile'
        ]);
        DB::table('categories')->insert([
            'name' => "Electronicos & Aplicaciones",
            'slug' => str_slug("Electronicos & Aplicaciones", "-"),
            'icon' => 'fa fa-laptop'
        ]);
        DB::table('categories')->insert([
            'name' => "Autos",
            'slug' => str_slug("Autos", "-"),
            'icon' => 'fa fa-automobile'
        ]);
        DB::table('categories')->insert([
            'name' => "Muebles",
            'slug' => str_slug("Muebles", "-"),
            'icon' => 'fa fa-wheelchair'
        ]);
        DB::table('categories')->insert([
            'name' => "Motocicletas",
            'slug' => str_slug("Motocicletas", "-"),
            'icon' => 'fa fa-motorcycle'
        ]);
        DB::table('categories')->insert([
            'name' => "Mascotas",
            'slug' => str_slug("Mascotas", "-"),
            'icon' => 'fa fa-paw'
        ]);
        DB::table('categories')->insert([
            'name' => "Libros, deportes & Entretimiento",
            'slug' => str_slug("Libros, deportes & Entretimiento", "-"),
            'icon' => 'fa fa-book'
        ]);
        DB::table('categories')->insert([
            'name' => "Moda",
            'slug' => str_slug("Moda", "-"),
            'icon' => 'fa fa-asterisk'
        ]);
        DB::table('categories')->insert([
            'name' => "Juegos",
            'slug' => str_slug("Juegos", "-"),
            'icon' => 'fa fa-gamepad'
        ]);
        DB::table('categories')->insert([
            'name' => "Servicios",
            'slug' => str_slug("Servicios", "-"),
            'icon' => 'fa fa-shield'
        ]);
        DB::table('categories')->insert([
            'name' => "Trabajos",
            'slug' => str_slug("Trabajos", "-"),
            'icon' => 'fa fa-at'
        ]);
        DB::table('categories')->insert([
            'name' => "Bienes Raíces",
            'slug' => str_slug("Bienes Raíces", "-"),
            'icon' => 'fa fa-home'
        ]);
    }
}
