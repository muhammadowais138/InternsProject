<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Add Bootstrap CSS link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add other head elements as needed -->
</head>
<body>
    <!-- Add body content as needed -->
    @yield('content')
    <!-- Add Bootstrap JS and other scripts as needed -->
</body>
</html>
