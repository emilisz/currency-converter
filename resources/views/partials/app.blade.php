<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Currency converter">
    <meta name="description" content="Simple api currency converter">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <title>Converter</title>
</head>
<body>
    @yield('content')

    @livewireScripts
</body>
</html>