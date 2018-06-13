<!DOCTYPE html>
<html>
<head>
	<title>Halaman View</title>
</head>
<body>
	<h1>Ini hanya halaman view biasa.</h1>
	
	<!--PHP Version-->
	<h3>View array variable using PHP Syntax</h3>
	<p><?php echo $var1 ?></p>
	<p><?php echo $var2 ?></p>
	<p><?php echo $var3 ?></p>
	<p>--------------------------------</p>
	<!--Blade Version-->
	<h3>View array variable using Blade Syntax</h3>
	<p>{{ $var1 }}</p>
	<p>{{ $var2 }}</p>
	<p>{{ $var3 }}</p>
	<p>--------------------------------</p>


	<!--IF - PHP Version-->
	<h3>IF - using PHP Syntax</h3>

	<?php if($var1 == 'Sepatu') : ?>
			<?php echo 'Sepatu baru punya Rudi.' ?>
	<?php else : ?>
		  	<?php echo 'Sepatu baru BUKAN punya Rudi.' ?>
	<?php endif; ?>
	<p>--------------------------------</p>
	<?php
		if ($var1 == 'Sepatu') {
			echo "Sepatu baru punya Rudi.";
		} else {
			echo 'Sepatu baru BUKAN punya Rudi.';
		}
	?>
	<p>--------------------------------</p>
	<!--IF - Blade Version-->
	<h3>IF - using Blade Syntax</h3>
	@if($var1 == 'Sepatu')
		<p>Sepatu baru punya Rudi.</p>
	@else
		<p>Sepatu baru BUKAN punya Rudi.</p>
	@endif
	<p>--------------------------------</p>


	<!--FOREACH - PHP Version-->
	<h3>FOREACH - using PHP Syntax</h3>

	<?php if (!empty($data)): ?>
		<ul>
			<?php foreach($data as $dt): ?>
				<li><?= $dt ?></li>
			<?php endforeach ?>
		</ul>
	<?php else: ?>
		<p>Tidak ada data.</p>
	<?php endif ?>
	<p>--------------------------------</p>
	<?php
		if (!empty($data)) {
			echo "<ul>";
				foreach($data as $dt) {
					echo "<li>" . $dt . "<br>";	
				};
			echo "</ul>";
		} else {
			echo 'Tidak ada data.';
		}
	?>
	<p>--------------------------------</p>
	<?php if (!empty($transaksi)): ?>
		<ul>
			<?php foreach($transaksi as $trx): ?>
				<li><?= $trx->barang ?></li>
			<?php endforeach ?>
		</ul>
	<?php else: ?>
		<p>Tidak ada data transaksi.</p>
	<?php endif ?>
	<p>--------------------------------</p>
	<?php
		if (!empty($transaksi)) {
			echo "<ul>";
				foreach($transaksi as $trx) {
					echo "<li>" . $trx->barang . "<br>";	
				};
			echo "</ul>";
		} else {
			echo 'Tidak ada data transaksi.';
		}
	?>
	<p>--------------------------------</p>

	<!--FOREACH - Blade Version-->
	<h3>FOREACH - using Blade Syntax</h3>

	@if (!empty($data))
		<ul>
			@foreach($data as $dt)
				<li>{{ $dt }}</li>
			@endforeach
		</ul>
	@else
		<p>Tidak ada data.</p>
	@endif
	<p>--------------------------------</p>
	@if (!empty($transaksi))
		<ul>
			@foreach($transaksi as $trx)
				<li>{{ $trx->barang }}</li>
			@endforeach
		</ul>
	@else
		<p>Tidak ada data transaksi.</p>
	@endif
</body>
</html>