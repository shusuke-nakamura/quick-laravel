<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}</title>
</head>
<body>
    @php
        $i = 0;
    @endphp
    @while ($i < 6)
        @php
            $i++;
        @endphp
        <h{{ $i }}>{{ $i }}番目です。</h{{ $i }}>
    @endwhile
</body>
</html>
