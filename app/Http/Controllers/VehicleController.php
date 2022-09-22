<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class VehicleController extends Controller
{
    public function index(): Response
    {
        $vehicles = Vehicle::query()
            ->with('vehicle_model')
            ->paginate(15);
        return Inertia::render('Vehicles/Index', compact('vehicles'));
    }

    public function create(): Response
    {
        $vehicle_models = VehicleModel::all();
        return Inertia::render('Vehicles/Create', compact('vehicle_models'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'vehicle_model_id' => 'required',
            'chassis_number' => 'required',
        ]);

        $vehicle = new Vehicle();
        $vehicle->vehicle_model_id = $request->input('vehicle_model_id');
        $vehicle->chassis_number = $request->input('chassis_number');
        $vehicle->title = $request->input('title');
        $vehicle->image = $request->input('image');
        $vehicle->description = $request->input('description');
        $vehicle->save();

        return redirect()->back();
    }

    public function edit(Vehicle $vehicle): Response
    {
        return Inertia::render('Vehicles/Edit', compact('vehicle'));
    }

    public function update(Vehicle $vehicle, Request $request) {

    }

    public function destroy(Vehicle $vehicle): RedirectResponse
    {
        $vehicle->delete();
        return redirect()->back();
    }
}
