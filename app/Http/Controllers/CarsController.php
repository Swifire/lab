<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Car, Brand, Colour};

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = '';
        $cars = Car::all();

        foreach ($cars as $car) {
            $result .= "<p>" . $car->price . "</p>";
            $result .= "<p>" . $car->description . "</p>";
            $result .= "<p>" . $car->brand->name . "</p>";
            $result .= "<p>" . $car->colour->name . "</p>";
        }

        return response($result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colours = Colour::all()->pluck('name', 'id')->toArray();
        $brands = Brand::all()->pluck('name', 'id')->toArray();

        return view('admin.car-create')->with([
            'colours' => $colours,
            'brands' => $brands
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        Car::create($request->all());

        return redirect()->back()->with('success', 'Автомобиль добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
