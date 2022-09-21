<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ManufacturerController extends Controller
{
    public function index(): Response
    {
        $manufacturers = Manufacturer::query()->simplePaginate(10);
        return Inertia::render('Manufacturers/Index', compact('manufacturers'));
    }

    public function show(Manufacturer $manufacturer): Response
    {
        return Inertia::render('Manufacturers/Show', compact('manufacturer'));
    }

    public function create(): Response
    {
        return Inertia::render('Manufacturers/Create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'establishment_year' => 'required'
        ]);

        Manufacturer::query()->create($validated);
        return redirect()->back();
    }

    public function edit(Manufacturer $manufacturer): Response
    {
        return Inertia::render('Manufacturers/Edit', compact('manufacturer'));
    }

    public function update(Manufacturer $manufacturer, Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'establishment_year' => 'required'
        ]);
        $manufacturer->fill($validated);
        $manufacturer->save();
        return redirect()->back();
    }

    public function destroy(Manufacturer $manufacturer): RedirectResponse
    {
        $manufacturer->delete();
        return redirect()->back();
    }
}
