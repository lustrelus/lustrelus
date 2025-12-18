<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="The website of LustreLus" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="{{URL::asset('storage/js/app.js')}}" type="module">
    </script>

    <link rel="stylesheet" href="{{URL::asset('storage/css/app.css')}}">

    <link rel="icon" href="data:image/svg+xml,
    <svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22>
        <text y=%22.9em%22 font-size=%2290%22>☁️</text>
    </svg>">
    <title>Lustre's site~</title>
</head>

<body>
    <header>
        <img src="{{URL::asset('storage/img/banner.png')}}">
    </header>

    <main>
    <x-left.layout />

    <div id="content" class="box">
        {{ $slot }}
    </div>

    <x-right.layout />
    </main>
</body>
</html>
