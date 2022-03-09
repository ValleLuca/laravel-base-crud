<?php

use App\Example;
use Illuminate\Database\Seeder;

class ExamplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $examples = config('crudapi');

        foreach($examples as $example){
            $newExample = new Example();
            $newExample->title = $example["title"];
            $newExample->description = $example["description"];
            $newExample->series = $example["series"];
            $newExample->price = $example["price"];
            $newExample->sale_date = $example["sale_date"];
            $newExample->type = $example["type"];
            $newExample->save();

        }
    }
}
