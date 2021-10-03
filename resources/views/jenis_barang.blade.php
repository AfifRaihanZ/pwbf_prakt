<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jenis Barang</title>
</head>
<body>
    <h1>Data Jenis Barang</h1>
    <thead>
        <table border="1">
        <tr>
            <th>ID_JB</th>
            <th>JENIS_BARANG</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jenis_barang as $item)
            <tr>
                <td>{{ $item->ID_JB }}</td>
                <td>{{ $item->JENIS_BARANG }}</td>
        @endforeach
    </tbody>
        </table>
</body>
</html>