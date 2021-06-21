<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing Page</title>
</head>
<body>
    <h1>Welcome to Testing with PhpUnit Laravel</h1>

    @foreach ($beverage as $beverage)
        <h3>{{ $beverage->name }}</h3>
    @endforeach
</body>
</html>