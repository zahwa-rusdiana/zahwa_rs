<!DOCTYPE html>
<html>
<head>
    <title>Produk</title>
</head>
<body>

<h1>DAFTAR PRODUK</h1>

<p>Jumlah data: {{ $products->count() }}</p>

@foreach($products as $product)
    <h2>{{ $product->nama }}</h2>
    <p>Harga: {{ $product->harga }}</p>
    <p>Stok: {{ $product->stok }}</p>
    <hr>
@endforeach

</body>
</html>