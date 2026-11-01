<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selfwork Invio Mail</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar></x-navbar>
    @if (session('success'))
        <div class="alert alert-success text-center m-0 mt-5">
            {{ session('success') }}
        </div>
    @endif
    
        {{$slot}}
    <x-footer></x-footer>
</body>
</html>