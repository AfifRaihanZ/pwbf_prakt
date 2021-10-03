<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WARNA</title>
</head>
<body>
    <h1>Data Warna</h1>    
    <thead>
        <table border="1">
        <tr>
            <th>ID_WARNA</th>
            <th>WARNA</th>
        </tr>
    </thead>
    <tbody>
        @foreach($warna as $item)
            <tr>
                <td>{{ $item->ID_WARNA }}</td>
                <td>{{ $item->WARNA }}</td>
        @endforeach
    </tbody>
</table>
</body>
</html>