<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Colour;
use function GuzzleHttp\Promise\all;

class ColoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $colours = Colour::paginate(2);

        return view('admin.colours')->with(['colours' => $colours]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.colour-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        Colour::create($request->all());

        return redirect()->back()->with('success', 'Цвет создан успешно');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        return response(json_encode(DB::table('colours')->find($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function deleteForm(Request $request)
    {
        $heading = 'Странца удаления цвета';
        $id = $request->query('id');

        return view('delete-colour', [
            'heading' => $heading,
            'id' => $id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        DB::table('colours')->delete($id);

        return response('Deleted successfully');
    }
}
