<?php

use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $comics = config('comics');
        foreach ($comics as $comic) {
            // CREO UNA NUOVA ISTANZA
            $new_comic = new Comic();
            // RIEMPO GLI ATTRIBUTI
            $new_comic->fill($comic);
            //SALVO I DATI
            $new_comic->save();
        }
    }
}
