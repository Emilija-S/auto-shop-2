<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleApiController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $vehicles = Vehicle::query()
            ->with('vehicle_model', 'manufacturer')
            ->paginate(15);
        return JsonResource::collection($vehicles);
    }
}
