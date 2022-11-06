<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Lab</title>
</head>
<body>
    <h1>{{ $heading }}</h1>
    <form action="/colours/{{ $id }}" method="post">
        @method('delete')
        @csrf
        <button>Отправить</button>
    </form>
</body>
</html>
