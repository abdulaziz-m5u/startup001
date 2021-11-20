<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\TravelPackage;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreTravelPackageRequest;

class TravelPackageController extends Controller
{

    public function index() : View
    {
        $travelPackages = TravelPackage::get();

        return view('admin.travel-packages.index', compact('travelPackages'));
    }

    public function create(): View
    {
        return view('admin.travel-packages.create');
    }

    public function store(StoreTravelPackageRequest $request): RedirectResponse
    {
        $slug = Str::slug($request->name);        
        TravelPackage::create($request->validated() + ["slug" => $slug]);

        return redirect()->route('admin.travel-packages.index')->with('message', 'Added Successfully !');
    }

    public function edit(TravelPackage $travelPackage): View
    {
        return view('admin.travel-packages.edit', compact('travelPackage'));
    }

    public function update(StoreTravelPackageRequest $request, TravelPackage $travelPackage): RedirectResponse
    {
        $travelPackage->update($request->validated());

        return redirect()->route('admin.travel-packages.index')->with('message', 'Updated Successfully !');;
    }

    public function destroy(TravelPackage $travelPackage): RedirectResponse
    {
        $travelPackage->delete();

        return redirect()->route('admin.travel-packages.index')->with('message', 'Deleted Successfully');
    }
}
