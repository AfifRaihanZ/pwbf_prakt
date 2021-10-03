<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ukuran</title>
</head>
<body>
    <h1>Data Ukuran</h1>
    <thead>
        <table border="1">
        <tr>
            <th>ID_UKURAN</th>
            <th>UKURAN</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ukuran as $item)
            <tr>
                <td>{{ $item->ID_UKURAN }}</td>
                <td>{{ $item->UKURAN }}</td>
        @endforeach
    </tbody>
</table>
</body>
</html>