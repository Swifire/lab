<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller {
    public function index() {
        //return DB::table('brands')->get();
        //return json_encode(DB::table('brands')->where('name', 'BMW')->first());
        //return json_encode(DB::table('brands',)->find(2));
        //return DB::table('brands',)->pluck('name');
        //return DB::table('brands',)->pluck('name', 'id');
        return DB::table('brands',)->count();
    }

    public function show($id): string {
        return json_encode(DB::select('select * from brands where id = ?', [$id]));
    }

    public function create(Request $request): string {
        $name = $request->query('name');

        // Подготовленные запросы, чтобы избежать инъекций в БД
        DB::insert('insert into brands (name) values (?)', [$name]);

        return 'create';
    }

    public function pagination() {
        return DB::table('brands')->simplePaginate(1);
    }

    public function store() {
        return 'Post - создание бренда';
    }

    public function destroy() {
        return 'Удаление бренда';
    }
}
