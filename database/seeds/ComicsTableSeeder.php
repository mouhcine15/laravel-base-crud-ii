<?php

use App\Comic;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20 ; $i++) { 
            $comic = new Comic();
            $comic->created_at = "10:44:23";
            $comic->updated_at = "10:45:00";
            $comic->titolo = $faker->word();
            $comic->descrizione = $faker->sentence();
            $comic->genere = $faker->word();
            $comic->prezzo = $faker->randomDigit();
            $comic->save();
         }
    }
}
