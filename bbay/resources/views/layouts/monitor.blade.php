<!-- lokasi file /views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'My App') }}</title>
    <!-- Include CSS and JavaScript files here -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link id="pagestyle" href="../assets/css/soft-ui.css" rel="stylesheet" />
    <link id="pagestyle" href="../assets/css/main.css" rel="stylesheet" />
    <link id="pagestyle" href="../assets/css/mobile.css" rel="stylesheet" />
    {{-- <meta http-equiv="refresh" content="5"> --}}
</head>
<body style="">
    @yield('content') <!-- Placeholder for page-specific content -->
    <!-- Include footer or other common elements here -->
</body>
<footer class="py-16 text-center text-sm text-black dark:text-white/70">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</footer>
</html>
