<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>La Vitrina Estelar — Productos</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
	<style>
		:root{--bg:#0f172a;--card:#0b1220;--accent:#ff9900;--muted:#94a3b8}
		*{box-sizing:border-box}
		body{margin:0;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;background:linear-gradient(180deg,#071026 0%,#0b1220 60%);color:#e6eef8;-webkit-font-smoothing:antialiased}
		.wrap{max-width:1200px;margin:48px auto;padding:24px}
		.header{display:flex;align-items:center;justify-content:space-between;margin-bottom:20px}
		.title{font-size:28px;font-weight:700;letter-spacing:-0.02em}
		.subtitle{color:var(--muted);font-weight:500;font-size:14px}
		.search{display:flex;gap:12px;align-items:center}
		.search input{padding:10px 14px;border-radius:999px;border:none;background:rgba(255,255,255,0.06);color:inherit;outline:none;min-width:260px}
		.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:18px}
		.card{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));border-radius:12px;padding:14px;box-shadow:0 6px 18px rgba(2,6,23,0.6);transition:transform .18s ease,box-shadow .18s ease;border:1px solid rgba(255,255,255,0.03)}
		.card:hover{transform:translateY(-6px);box-shadow:0 18px 40px rgba(2,6,23,0.75)}
		.image{border-radius:8px;overflow:hidden;height:140px;background:#071426;display:flex;align-items:center;justify-content:center}
		.image img{width:100%;height:100%;object-fit:cover;display:block}
		.meta{display:flex;align-items:center;justify-content:space-between;margin-top:10px}
		.name{font-weight:600;font-size:15px}
		.price{font-weight:700;color:var(--accent);font-size:16px}
		.rating{color:#ffd166;font-size:13px;margin-right:6px}
		.row{display:flex;align-items:center;gap:8px}
		.badge{background:linear-gradient(90deg,#0b6cff,#6a3bff);padding:6px 8px;border-radius:8px;color:white;font-size:12px;font-weight:600}
		.desc{color:var(--muted);font-size:13px;margin-top:8px}
		.actions{display:flex;gap:8px;margin-top:12px}
		.btn{flex:1;padding:10px;border-radius:10px;border:none;cursor:pointer;font-weight:700}
		.btn-primary{background:linear-gradient(90deg,var(--accent),#ff7a00);color:#081126}
		.btn-outline{background:transparent;border:1px solid rgba(255,255,255,0.06);color:inherit}
		.prime{display:inline-flex;align-items:center;gap:6px;font-size:12px;color:#bfe9ff;background:rgba(11,115,255,0.08);padding:6px;border-radius:8px}
		@media (max-width:520px){.header{flex-direction:column;align-items:flex-start;gap:12px}.search input{min-width:160px}}
	</style>
</head>
<body>
	<div class="wrap">
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
</body>
</html>