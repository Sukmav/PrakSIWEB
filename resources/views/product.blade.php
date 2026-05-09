<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h2>Daftar Produk</h2>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Brand</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $index => $product)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $product->nama_produk }}</td>
                <td>{{ $product->category->nama_kategori ?? 'Tidak ada kategori' }}</td>
                <td>{{ $product->brand->nama_brand ?? 'Tidak ada brand' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>