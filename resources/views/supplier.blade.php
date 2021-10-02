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
            <th>ID_SUP</th>
            <th>ID_KOTA</th>
            <th>NAMA_SUP</th>
            <th>ALAMAT_SUP</th>
            <th>TELP_SUP</th>
        </tr>
    </thead>
    <tbody>
        @foreach($supplier as $item)
            <tr>
                <td>{{ $item->ID_SUP }}</td>
                <td>{{ $item->ID_KOTA }}</td>
                <td>{{ $item->NAMA_SUP }}</td>
                <td>{{ $item->ALAMAT_SUP }}</td>
                <td>{{ $item->TELP_SUP }}</td>
        @endforeach
    </tbody>
</table>
</body>
</html>