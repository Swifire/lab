@extends('layouts.admin')

@section('title')
    Список автомобилей
@endsection

@section('content')
<div class="container my-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 border border-2 rounded border-info p-4">
            <h1>Все автомобили</h1>
            <div>
                <div>Создать автомобиль
                    <a class="fa fa-plus btn" href="{{route('cars.create')}}"></a>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Бренд</th>
                        <th scope="col">Цвет</th>
                        <th scope="col">Обновить</th>
                        <th scope="col">Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $car->price }}</td>
                        <td>{{ $car->description }}</td>
                        <td>{{ $car->brand->name }}</td>
                        <td>{{ $car->colour->name }}</td>
                        <td><i class="fa fa-pencil btn"></i></td>
                        <td>
                            <form action="{{route('cars.destroy', $car->id)}}" method="post"></form>
                            @method('delete')
                            <i class="fa fa-trash btn"></i>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$cars->links('utils.pagination')}}
            </div>

        </div>
    </div>
@endsection
