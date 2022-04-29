<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}</title>
</head>
<body>
    @isset($msg)
        <p>変数msgは「{{ $msg }}」です。</p>
    @else
        <p>メッセージはありません。</p>
    @endisset
</body>
</html>
