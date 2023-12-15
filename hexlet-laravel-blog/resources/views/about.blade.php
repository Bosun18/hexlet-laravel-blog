<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel | About</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div class="container mt-4">
    <h1>О блоге</h1>
    <p>Эксперименты с Ларавелем на Хекслете</p>
    <!-- BEGIN (write your solution here) -->
    <ul>
        @foreach ($team as $member)
            <li>{{ $member['name'] }} - {{ $member['position'] }}</li>
        @endforeach
    </ul>
    <!-- END -->
</div>
</body>
</html>
