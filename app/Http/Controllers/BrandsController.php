<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller {
    public function index() {
        $brands = Brand::paginate(2);

        return view('admin.brands')->with(['brands' => $brands]);
    }

    public function show($id): string {
        return json_encode(DB::select('select * from brands where id = ?', [$id]));
    }

    public function create(Request $request): string {
        return view('admin.brand-create');
    }

    public function pagination() {
        return DB::table('brands')->simplePaginate(1);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'min:2'
        ]);

        Brand::create($request->all());

        return redirect()->back()->with('success', 'Бренд создан успешно');
    }

    public function destroy() {
        return 'Удаление бренда';
    }
}
