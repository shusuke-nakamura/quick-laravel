<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}</title>
</head>
<body>
    @unless ($random === 50)
        <p>{{ $random }}は、50ではありません！</p>
    @endunless
</body>
</html>