<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ManufacturerApiController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $manufacturers = Manufacturer::query()->paginate(15);
        return JsonResource::collection($manufacturers);
    }
}
