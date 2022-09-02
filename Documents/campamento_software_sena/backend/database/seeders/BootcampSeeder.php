<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use File;


class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //Paso 1: Leer archivo users.json
            $json=File::get("database/_data/bootcamps.json");

            //Paso 2:Convertir el contenifp json a un arreglo en php
            $arreglo=json_decode($json);
      
            //Paso 3:Recorrer el arreglo en php
            foreach ($arreglo as $b) {
             
            //Paso 4: Por cada uno de los elemenos del arreglo crear user
            $NewBootCamp = new Bootcamp();
            $NewBootCamp->name = $b->name;
            $NewBootCamp->website = $b->website;
            $NewBootCamp->phone = $b->phone;
            $NewBootCamp->description = $b->description;
            $NewBootCamp->average_raiting = $b->average_raiting;
            $NewBootCamp->average_cost = $b->average_cost;
            $NewBootCamp->user_id = $b->user_id;
            $NewBootCamp->save();
            }
             
    }
}
