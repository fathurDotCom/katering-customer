<?php

use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\District;
use App\Models\Province;
use App\Models\Subdistrict;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Ramsey\Uuid\Uuid;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

// Artisan::command('test', function () {
//     $country = Country::first();
    
//     Subdistrict::chunk(100, function($data) use ($country) {
//         foreach($data as $item) {
//             $district = District::where('id', $item->district_id)->first();
//             $city = City::where('id', $district->city_id)->first();
//             $province = Province::where('id', $city->province_id)->first();
    
//             $item->update([
//                 'uuid' => Uuid::uuid4()->toString(),
//                 'country_uuid' => $country->uuid,
//                 'province_uuid' => $province->uuid,
//                 'city_uuid' => $city->uuid,
//                 'district_uuid' => $district->uuid,
//                 'created_at' => date('Y-m-d H:i:s'),
//             ]);

//         }
//     });


// });