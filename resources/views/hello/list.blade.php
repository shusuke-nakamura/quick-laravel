<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $appTitle }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
</head>

<body>
    <table class="table">
        <tr>
            <th>書名</th>
            <th>価格</th>
            <th>出版社</th>
            <th>刊行日</th>
        </tr>
        @foreach ($records as $record)
        <tr>
            <td>{{ $record->title }}</td>
            <td>{{ $record->price }}円</td>
            <td>{{ $record->publisher }}</td>
            <td>{{ $record->published }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>