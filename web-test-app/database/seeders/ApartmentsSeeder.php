<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $houses = House::all();

        foreach ($houses as $house) {
            Apartment::insert([
                [
                    'name' => 'Квартира 1',
                    'square' => 15,
                    'layout' => 2,
                    'image' => '/storage/apartments/images/4YSgH5OEp0lic17iMxH1SMkl3IVkuwLmIONR0ei4.jpg',
                    'price' => 20000000,
                    'house_id' => $house->id,
                ],
                [
                    'name' => 'Квартира 1',
                    'square' => 15,
                    'layout' => 2,
                    'image' => '/storage/apartments/images/4YSgH5OEp0lic17iMxH1SMkl3IVkuwLmIONR0ei4.jpg',
                    'price' => 20000000,
                    'house_id' => $house->id,
                ],
                [
                    'name' => 'Квартира 1',
                    'square' => 15,
                    'layout' => 2,
                    'image' => '/storage/apartments/images/4YSgH5OEp0lic17iMxH1SMkl3IVkuwLmIONR0ei4.jpg',
                    'price' => 20000000,
                    'house_id' => $house->id,
                ],
                [
                    'name' => 'Квартира 1',
                    'square' => 15,
                    'layout' => 2,
                    'image' => '/storage/apartments/images/4YSgH5OEp0lic17iMxH1SMkl3IVkuwLmIONR0ei4.jpg',
                    'price' => 20000000,
                    'house_id' => $house->id,
                ],
                [
                    'name' => 'Квартира 1',
                    'square' => 15,
                    'layout' => 2,
                    'image' => '/storage/apartments/images/4YSgH5OEp0lic17iMxH1SMkl3IVkuwLmIONR0ei4.jpg',
                    'price' => 20000000,
                    'house_id' => $house->id,
                ],
                [
                    'name' => 'Квартира 1',
                    'square' => 15,
                    'layout' => 2,
                    'image' => '/storage/apartments/images/4YSgH5OEp0lic17iMxH1SMkl3IVkuwLmIONR0ei4.jpg',
                    'price' => 20000000,
                    'house_id' => $house->id,
                ],
                [
                    'name' => 'Квартира 1',
                    'square' => 15,
                    'layout' => 2,
                    'image' => '/storage/apartments/images/4YSgH5OEp0lic17iMxH1SMkl3IVkuwLmIONR0ei4.jpg',
                    'price' => 20000000,
                    'house_id' => $house->id,
                ],
                [
                    'name' => 'Квартира 1',
                    'square' => 15,
                    'layout' => 2,
                    'image' => '/storage/apartments/images/4YSgH5OEp0lic17iMxH1SMkl3IVkuwLmIONR0ei4.jpg',
                    'price' => 20000000,
                    'house_id' => $house->id
                ]
            ]);
        }
    }
}
