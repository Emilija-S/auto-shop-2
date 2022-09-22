<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\VehicleModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class VehicleModelController extends Controller
{
    public function index(): Response
    {
        $vehicle_models = VehicleModel::query()
            ->with('manufacturer', 'vehicles')
            ->paginate(15);
        return Inertia::render('VehicleModels/Index', compact('vehicle_models'));
    }

    public function create(): Response
    {
        $manufacturers = Manufacturer::all();
        return Inertia::render('VehicleModels/Create', compact('manufacturers'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'manufacturer_id' => 'required',
            'name' => 'required',
        ]);

        $vehicle_model = new VehicleModel();
        $vehicle_model->manufacturer_id = $request->input('manufacturer_id');
        $vehicle_model->name = $request->input('name');
        $vehicle_model->save();

        return redirect()->back();
    }

    public function edit(VehicleModel $vehicleModel): Response
    {
        return Inertia::render('VehicleModels/Edit', compact('vehicleModel'));
    }

    public function update(VehicleModel $vehicleModel, Request $request) {

    }

    public function destroy(VehicleModel $vehicleModel): RedirectResponse
    {
        $vehicleModel->delete();
        return redirect()->back();
    }
}
