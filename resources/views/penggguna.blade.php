<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
</head>
<body>
    <h2>Data Supplier</h2>

    <thead>
        <table border="1">
        <tr>
            <th>ID_USER</th>
            <th>NAMA_USER</th>
            <th>ALAMAT_USER</th>
            <th>TELP_USER</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengguna as $item)
            <tr>
                <td>{{ $item->ID_USER }}</td>
                <td>{{ $item->NAMA_USER }}</td>
                <td>{{ $item->ALAMAT_USER }}</td>
                <td>{{ $item->TELP_USER }}</td>
                <td>{{ $item->USERNAME }}</td>
                <td>{{ $item->PASSWORD }}</td>
        @endforeach
    </tbody>
</table>
</body>
</html>