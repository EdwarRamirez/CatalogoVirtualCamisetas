<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            ['codigo' => 'hombre1','nombre' => 'Camiseta estampado botella','precio' => 42000,'talla' => 'L','color' => 'Negro','categoria' => 'Hombre','imagen' => 'home-hombre1.jpg','stock' => 60,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'hombre2','nombre' => 'Camiseta estampado "Rule The World"','precio' => 37000,'talla' => 'M','color' => 'Blanco','categoria' => 'Hombre','imagen' => 'home-hombre2.jpg','stock' => 15,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'hombre3','nombre' => 'Camiseta estampado bicicleta','precio' => 20000,'talla' => 'L','color' => 'Blanco','categoria' => 'Hombre','imagen' => 'home-hombre3.jpg','stock' => 0,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'hombre4','nombre' => 'Camisilla estampado "Enjoy Freedom"','precio' => 15000,'talla' => 'S','color' => 'Azul Claro','categoria' => 'Hombre','imagen' => 'home-hombre4.jpg','stock' => 22,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'hombre5','nombre' => 'Camiseta lisa gris','precio' => 12000,'talla' => 'M','color' => 'Gris','categoria' => 'Hombre','imagen' => 'home-hombre5.jpg','stock' => 54,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'hombre6','nombre' => 'Camiseta lisa azul','precio' => 12000,'talla' => 'M','color' => 'Azul Oscuro','categoria' => 'Hombre','imagen' => 'home-hombre6.jpg','stock' => 27,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'hombre7','nombre' => 'Camiseta estampado "Just Do It"','precio' => 37000,'talla' => 'XL','color' => 'Gris','categoria' => 'Hombre','imagen' => 'home-hombre7.jpg','stock' => 11,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'mujer1','nombre' => 'Blusa esampado cactus','precio' => 17000,'talla' => 'S','color' => 'Blanco','categoria' => 'Mujer','imagen' => 'home-mujer1.jpg','stock' => 34,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'mujer2','nombre' => 'Blusa estampado "Los Caleños Son Como Las Flores"','precio' => 28000,'talla' => 'M','color' => 'Vinotinto','categoria' => 'Mujer','imagen' => 'home-mujer2.jpg','stock' => 6,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'mujer3','nombre' => 'Camiseta estampado tribal','precio' => 21000,'talla' => 'S','color' => 'Rosa','categoria' => 'Mujer','imagen' => 'home-mujer3.jpg','stock' => 30,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'mujer4','nombre' => 'Blusa lisa azul','precio' => 12000,'talla' => 'XS','color' => 'Azul Turquesa','categoria' => 'Mujer','imagen' => 'home-mujer4.jpg','stock' => 2,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'mujer5','nombre' => 'Blusa estampado tenis','precio' => 23000,'talla' => 'M','color' => 'Blanco','categoria' => 'Mujer','imagen' => 'home-mujer5.jpg','stock' => 0,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'mujer6','nombre' => 'Camiseta estampado isla','precio' => 16000,'talla' => 'S','color' => 'Rosa Claro','categoria' => 'Mujer','imagen' => 'home-mujer6.jpg','stock' => 8,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'mujer7','nombre' => 'Camiseta estampado paris','precio' => 19000,'talla' => 'S','color' => 'Blanco','categoria' => 'Mujer','imagen' => 'home-mujer7.jpg','stock' => 29,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'niño1','nombre' => 'Camiseta estampado flash','precio' => 16000,'talla' => '6','color' => 'Rojo','categoria' => 'Niño','imagen' => 'home-niño1.jpg','stock' => 22,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'niño2','nombre' => 'Camiseta estampado planta','precio' => 16000,'talla' => '8','color' => 'Gris','categoria' => 'Niño','imagen' => 'home-niño2.jpg','stock' => 10,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'niño3','nombre' => 'Camiseta estampado dalmata','precio' => 16000,'talla' => '8','color' => 'Gris','categoria' => 'Niño','imagen' => 'home-niño3.jpg','stock' => 15,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'niño4','nombre' => 'Camiseta estampado roblox','precio' => 16000,'talla' => '10','color' => 'Azul','categoria' => 'Niño','imagen' => 'home-niño4.jpg','stock' => 0,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'niño5','nombre' => 'Camiseta estampado mickey','precio' => 16000,'talla' => '6','color' => 'Rojo','categoria' => 'Niño','imagen' => 'home-niño5.jpg','stock' => 19,'created_at' => date("Y-m-d H:i:s"),],
            ['codigo' => 'niño6','nombre' => 'Camiseta estampado vans','precio' => 16000,'talla' => '12','color' => 'Blanco','categoria' => 'Niño','imagen' => 'home-niño6.jpg','stock' => 27,'created_at' => date("Y-m-d H:i:s"),]
        ]);
    }
}
