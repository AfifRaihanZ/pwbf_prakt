<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemesanan</title>
</head>
<body>
    <h2>Data Supplier</h2>

    <thead>
        <table border="1">
        <tr>
            <th>ID_TRIMA</th>
            <th>ID_SUP</th>
            <th>ID_USER</th>
            <th>TGL_TRIMA</th>
            <th>TOTAL_HARGA</th>
            <th>STATUS_TRIMA</th>
        </tr>
    </thead>
    <tbody>
        @foreach($penerimaan as $item)
            <tr>
                <td>{{ $item->ID_TRIMA }}</td>
                <td>{{ $item->ID_SUP }}</td>
                <td>{{ $item->ID_USER }}</td>
                <td>{{ $item->TGL_TRIMA }}</td>
                <td>{{ $item->TOTAL_HARGA }}</td>
                <td>{{ $item->STATUS_TRIMA }}</td>
        @endforeach
    </tbody>
</table>
</body>
</html>