@extends('layouts.admin')

@section('title')
    Создание бренда
@endsection

@section('content')
<div class="container my-4">
    <h3 class="text-center">Создание бренда</h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="border border-2 rounded border-info p-4">
                @include('utils.alert-success')
                <form method="post" action="{{route('brands.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Название</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name">
                        <div id="nameHelp" class="form-text">Введите название бренда</div>
                        @error('name')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-info">Создать</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
