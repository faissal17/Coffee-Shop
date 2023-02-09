<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;  //add meal model , the data coming from database via model
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Meal::all();
        return view('dashboard', ['type' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->getClientOriginalName();
        $title = $request->get('title');
        $price = $request->get('price');
        $des = $request->get('description');

        // return $request->input();

        $Meal = new Meal();
        $Meal->name = $title;
        $Meal->image = $image;
        $Meal->price = $price;
        $Meal->description = $des;
        $Meal->save();

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Meal::all();
        return view('dashboard', ['type' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $coffe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            // 'image' => 'required',
        ]);

        $meal->update($request->only(['name', 'description', 'price']));


        return redirect('dashboard');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Meal::destroy($id);
        return redirect('dashboard');
    }
}
