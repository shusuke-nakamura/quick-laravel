<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}</title>
</head>
<body>
    @switch($random)
        @case(5)
            <p>大ラッキーの一日です！</p>
            @break
        @case(4)
            <p>ちょっぴり良いことがあるかも？</p>
            @break
        @case(3)
            <p>ふつうの一日です。</p>
            @break
        @case(2)
            <p>今日は静かに過ごしましょう・・・</p>
            @break
        @default
            <p>umm・・・</p>
    @endswitch
</body>
</html>
