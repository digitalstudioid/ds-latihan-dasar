<!DOCTYPE html>
<html>
<head>
	<title>Pelanggan</title>
</head>
<body>
	<h4>{{ $pelanggan->nama }} Pernah Transaksi :</h4>
	<ul>
		@foreach ($pelanggan->transaksi as $brg)
			<li>{{ $brg->barang }}</li>
		@endforeach
	</ul>
</body>
</html>