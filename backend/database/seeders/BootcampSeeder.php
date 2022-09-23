<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use File;
use Illuminate\Support\Facades\Hash;
class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. Leer el archivo users.json
        $json=File::get("database/_data/bootcamps.json");
        //2. Convertir el contenido json 
        //   a un arreglo en php
        $arreglo=json_decode($json);
        var_dump($arreglo);
        //3. recorrer el arreglo en php
        foreach($arreglo as $bootcamp){
          //4. por cada uno de los elementos
          //   del arrelgo crear user
          $newBootcamp= new Bootcamp();
          $newBootcamp->name = $bootcamp->name;
          $newBootcamp->website = $bootcamp->website;
          $newBootcamp->phone = $bootcamp->phone;
          $newBootcamp->user_id = $bootcamp->user_id;
          $newBootcamp->description = $bootcamp->description;
          $newBootcamp->average_cost= $bootcamp->average_cost;
          $newBootcamp->average_raiting = $bootcamp->average_raiting;
          $newBootcamp->save();
    }
        }
}