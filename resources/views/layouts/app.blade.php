<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UKK PROJECT</title>
    <link rel="shortcut icon"
        href="https://smkn4-tanjungpinang.sch.id/wp-content/uploads/2022/06/cropped-logo-smkn4-tpi.png"
        type="image/x-icon">
    {{-- script chart-js  --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>
    <div class="w-full min-h-screen">
        @yield('content')
    </div>
</body>

</html>
