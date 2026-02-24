<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>La Vitrina Estelar — Productos</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

	@include('layout.navbar')

	<div class="wrap page-index">
		<div class="header">
			<div>
				<div class="title">La Vitrina Estelar</div>
				<div class="subtitle">Selección semanal: 5 productos top, curados especialmente para ti</div>
			</div>
			<div class="search">
				<input placeholder="Buscar productos, marcas y más..." aria-label="Buscar">
				<div class="badge">Envío rápido</div>
			</div>
		</div>

		<div class="grid">
			<!-- Producto 1 -->
			<div class="card">
				<div class="image"><img src="https://source.unsplash.com/600x400/?headphones" alt="Auriculares inalámbricos"></div>
				<div class="meta">
					<div class="row"><div class="rating">★★★★★</div><div class="name">Auriculares inalámbricos Pro X</div></div>
					<div class="price">$129.99</div>
				</div>
				<div class="desc">Cancelación de ruido avanzada · 30h batería · Bluetooth 5.3</div>
				<div class="actions">
					<button class="btn btn-primary">Añadir al carrito</button>
					<button class="btn btn-outline">Ver</button>
				</div>
			</div>

			<!-- Producto 2 -->
			<div class="card">
				<div class="image"><img src="https://source.unsplash.com/600x400/?laptop" alt="Portátil Ultraligero"></div>
				<div class="meta">
					<div class="row"><div class="rating">★★★★☆</div><div class="name">UltraBook 14" Slim</div></div>
					<div class="price">$899.00</div>
				</div>
				<div class="desc">Intel i7 · 16GB RAM · SSD 512GB · pantalla 2K</div>
				<div class="actions">
					<button class="btn btn-primary">Comprar ahora</button>
					<button class="btn btn-outline">Ver detalles</button>
				</div>
			</div>

			<!-- Producto 3 -->
			<div class="card">
				<div class="image"><img src="https://source.unsplash.com/600x400/?watch,smartwatch" alt="Smartwatch"></div>
				<div class="meta">
					<div class="row"><div class="rating">★★★★☆</div><div class="name">Smartwatch Active</div></div>
					<div class="price">$199.50</div>
				</div>
				<div class="desc">Monitor de salud · GPS integrado · Resistente al agua</div>
				<div class="actions">
					<button class="btn btn-primary">Añadir</button>
					<button class="btn btn-outline">Comparar</button>
				</div>
			</div>

			<!-- Producto 4 -->
			<div class="card">
				<div class="image"><img src="https://source.unsplash.com/600x400/?camera,photography" alt="Cámara Mirrorless"></div>
				<div class="meta">
					<div class="row"><div class="rating">★★★★★</div><div class="name">Cámara Mirrorless Z6</div></div>
					<div class="price">$1,349.00</div>
				</div>
				<div class="desc">24MP · 4K vídeo · Objetivo 24-70 incluido</div>
				<div class="actions">
					<button class="btn btn-primary">Comprar</button>
					<button class="btn btn-outline">Añadir a lista</button>
				</div>
			</div>

			<!-- Producto 5 -->
			<div class="card">
				<div class="image"><img src="https://source.unsplash.com/600x400/?speaker,bluetooth" alt="Altavoz Bluetooth"></div>
				<div class="meta">
					<div class="row"><div class="rating">★★★★☆</div><div class="name">Altavoz Boom 360</div></div>
					<div class="price">$79.99</div>
				</div>
				<div class="desc">Sonido envolvente · Resistente al agua · 20h reproducción</div>
				<div class="actions">
					<button class="btn btn-primary">Añadir al carrito</button>
					<button class="btn btn-outline">Ver</button>
				</div>
			</div>
		</div>
	</div>

	@include('layout.footer')

</body>
</html>