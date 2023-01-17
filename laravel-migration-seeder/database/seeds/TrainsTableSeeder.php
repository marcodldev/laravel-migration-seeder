<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'Train_Id' -> 'T427' ;
                'Departure_City' -> 'Trapani' ;
                'Arrivals_City' -> 'Messina' ;
                'Time_Departure' -> '16:00'
            ]
        ];

        foreach($trains as $elem) {
            $newTrain = new Train();
            $newTrain->Train_Id = $elem['Train_Id'];
            $newTrain->Departure_City = $elem['Departure_City'];
            $newTrain->Arrivals_City = $elem['Arrivals_City'];
            $newTrain->Time_Departure = $elem['Time_Departure'];
            $newTrain->save();
        }

    }
}
