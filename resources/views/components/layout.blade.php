<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Presto'}}</title>
    <link rel="icon" type="image/x-icon" href="/media/temp-favicon.svg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar/>
    <x-status/>    
    {{$slot}}
    <x-footer/>
</body>
</html>