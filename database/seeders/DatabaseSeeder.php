<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Room;
use App\Models\Hotel;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Hotel::factory()->stateValues("Hôtel des Angevins", "Angers 49000", 3, "angers@hotel.com", "0987654321")->create();
        Hotel::factory()->stateValues("Hôtel des Mancelles", "Le Mans 72000", 4, "lemans@hotel.com", "0987654321")->create();
        Hotel::factory()->stateValues("Hôtel des Marseillais", "Marseille 13000", 5, "marseille@hotel.com", "0987654321")->create();
        User::factory()->userAdmin("Léane", "leanecharp@orange.fr", "password")->create();
        for ($i=1; $i < 4; $i++) { 
            for ($j=1; $j < 6; $j++) { 
                Room::factory()->hotelNumberValues($i, $j)->create();
            }
        }
    }
}
