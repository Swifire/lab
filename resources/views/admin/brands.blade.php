@extends('layouts.admin')

@section('title')
    Список брендов
@endsection

@section('content')
<div class="container my-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 border border-2 rounded border-info p-4">
            <h1>Все бренды</h1>
            <div>
                <div>Создать бренд
                    <a class="fa fa-plus btn" href="{{route('brands.create')}}"></a>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Обновить</th>
                        <th scope="col">Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($brands as $brand)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $brand->name }}</td>
                        <td><i class="fa fa-pencil btn"></i></td>
                        <td>
                            <form action="{{route('brands.destroy', $brand->id)}}" method="post"></form>
                            @method('delete')
                            <i class="fa fa-trash btn"></i>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$brands->links('utils.pagination')}}
            </div>

        </div>
    </div>
@endsection
