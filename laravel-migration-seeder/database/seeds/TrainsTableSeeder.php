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
                'Train_Id' => 'T543' ,
                'Departure_City' => 'Palermo' ,
                'Arrivals_City' => 'Catania' ,
                'Time_Departure' => '18:30',
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
