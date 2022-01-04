<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Room;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/page/package/packageMainMenu', [
            'active' => ['packages', true, 'package-list'],
            'packages' => Package::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/page/package/insertPackage', [
            'active' => ['packages', true, 'package-list'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'package_name' => 'required|max:64',
            'price_per_hour' => 'required|digits_between:0,100000',
            'computer_spec' => 'max:255',
            'description' => 'required|max:255',
            'photo_url' => 'max:255'
        ]);
        
        Package::create($validatedData);

        return redirect('/wanboAdmin/packages')->with('success', 'New package has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('admin/page/package/showPackage', [
            'active' => ['packages', true, 'package-list'],
            'rooms' => Room::all(),
            'package' => $package
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        return view('admin/page/package/editPackage',[
            'active' => ['packages', true, 'package-list'],
            'package' => $package
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackageRequest  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $validatedData = $request->validate([
            'package_name' => 'required|max:64',
            'price_per_hour' => 'required|digits_between:0,100000',
            'computer_spec' => 'max:255',
            'description' => 'required|max:255',
            'photo_url' => 'max:255'
        ]);

        Package::where('id', $package->id)->update($validatedData);

        return redirect('/wanboAdmin/packages')->with('success', 'Package has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        Package::destroy($package->id);

        return redirect('/wanboAdmin/packages')->with('success', 'Package has been deleted!');
    }
}
