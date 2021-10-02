<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
</head>
<body>
    <h2>Data Barang</h2>

    <thead>
        <table border="1">
        <tr>
            <th>KODE_BAR</th>
            <th>ID_JB</th>
            <th>NAMA_BAR</th>
            <th>STOCK_BARANG</th>
            <th>HARGA_BELI_BARANG</th>
            <th>HARGA_JUAL_BARANG</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barang as $item)
            <tr>
                <td>{{ $item->KODE_BAR }}</td>
                <td>{{ $item->ID_JB }}</td>
                <td>{{ $item->NAMA_BAR }}</td>
                <td>{{ $item->STOCK_BARANG }}</td>
                <td>{{ $item->HARGA_BELI_BARANG }}</td>
                <td>{{ $item->HARGA_JUAL_BARANG }}</td>
        @endforeach
    </tbody>
</table>
</body>
</html>