<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use App\Http\Requests\StoreBeverageRequest;
use App\Http\Requests\UpdateBeverageRequest;
use Illuminate\Http\Request;

class BeverageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/page/foodList/foodListMainMenu', [
            'active' => ['food', true, 'food-list'],
            'beverages' => Beverage::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/page/foodList/insertNewFood',[
            'active' => ['food', true, 'food-list'],
            'types' => ['other', 'food', 'drink', 'snack']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBeverageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'beverage_name' => 'required|max:64',
            'price' => 'required|digits_between:0,100000',
            'type' => 'required',
            'description' => 'max:255'
        ]);
        
        Beverage::create($validatedData);

        return redirect('/wanboAdmin/beverages')->with('success', 'New beverage has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beverage  $beverage
     * @return \Illuminate\Http\Response
     */
    public function show(Beverage $beverage)
    {
        return view('/admin/page/foodList/showFoodDetail', [
            'active' => ['food', true, 'food-list'],
            'beverage' => $beverage
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beverage  $beverage
     * @return \Illuminate\Http\Response
     */
    public function edit(Beverage $beverage)
    {
        return view('admin/page/foodList/editFoodDetail', [
            'beverage' => $beverage,
            'active' => ['food', true, 'food-list'],
            'types' => ["other", "food", "drink", "snack"]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBeverageRequest  $request
     * @param  \App\Models\Beverage  $beverage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beverage $beverage)
    {
        $validatedData = $request->validate([
            'beverage_name' => 'required|max:64',
            'price' => 'required|digits_between:0,100000',
            'type' => 'required',
            'description' => 'max:255'
        ]);

        Beverage::where('id', $beverage->id)->update($validatedData);

        return redirect('/wanboAdmin/beverages')->with('success', 'Beverage has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beverage  $beverage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beverage $beverage)
    {
        Beverage::destroy($beverage->id);

        return redirect('/wanboAdmin/beverages')->with('success', 'Post has been deleted!');
    }
}
