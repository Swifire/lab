@extends('layouts.admin')

@section('title')
    Добавление автомобиля
@endsection

@section('content')
<div class="container my-4">
    <h3 class="text-center">Добавление автомобиля</h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="border border-2 rounded border-info p-4">
                @include('utils.alert-success')
                <form method="post" action="{{route('cars.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="price" class="form-label">Цена</label>
                        <input type="text" class="form-control" id="price" aria-describedby="priceHelp" name="price">
                        <div id="priceHelp" class="form-text">Введите цену</div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Описание</label>
                        <input type="text" class="form-control" id="description" aria-describedby="descriptionHelp" name="description">
                        <div id="descriptionHelp" class="form-text">Введите описание</div>
                    </div>
                    <div class="mb-3">
                        <select name="brand_id" id="brand_id" class="form-select" aria-label="Выберите бренд">
                            <option selected>Выберите бренд</option>
                            @foreach($brands as $id => $brand)
                                <option value="{{$id}}">{{$brand}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <select name="colour_id" id="colour_id" class="form-select" aria-label="Выберите цвет">
                            <option selected>Выберите цвет</option>
                            @foreach($colours as $id => $colour)
                                <option value="{{$id}}">{{$colour}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info">Создать</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
