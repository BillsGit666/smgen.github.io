<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\Provinces;
use App\Models\Regencies;
use App\Models\Villages;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getProvinces()
    {
        $provinces = Provinces::all();

        return response()->json($provinces);
    }

    public function getRegenciesByProvince($province_id)
    {
        $regencies = Regencies::where('province_id', $province_id)->get();

        return response()->json($regencies);
    }

    public function getDistrictsByRegency($regency_id)
    {
        $districts = Districts::where('regency_id', $regency_id)->get();

        return response()->json($districts);
    }

    public function getVillagesByDistrict($district_id)
    {
        $villages = Villages::where('district_id', $district_id)->get();

        return response()->json($villages);
    }
}
