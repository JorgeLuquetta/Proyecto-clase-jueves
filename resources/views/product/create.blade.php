<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crear Producto — La Vitrina Estelar</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
	<style>
		body{margin:0;font-family:Inter,system-ui,Segoe UI,Roboto,Arial;background:linear-gradient(180deg,#071026 0%,#0b1220 60%);color:#e6eef8}
		.container{max-width:760px;margin:48px auto;padding:20px}
		.card{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:24px;border-radius:12px;border:1px solid rgba(255,255,255,0.03);box-shadow:0 10px 30px rgba(2,6,23,0.6)}
		h1{margin:0 0 6px 0;font-size:22px}
		p.lead{margin:0 0 18px;color:#9fb2c9}
		label{display:block;font-size:13px;color:#cfe6ff;margin-bottom:6px;margin-top:12px}
		input[type=text], input[type=number], textarea{width:100%;padding:12px;border-radius:8px;border:1px solid rgba(255,255,255,0.06);background:rgba(255,255,255,0.02);color:inherit;outline:none}
		textarea{min-height:120px;resize:vertical}
		.row{display:flex;gap:12px}
		.col{flex:1}
		.actions{display:flex;gap:10px;margin-top:16px}
		.btn{padding:10px 14px;border-radius:10px;border:none;font-weight:700;cursor:pointer}
		.btn-primary{background:linear-gradient(90deg,#ff9900,#ff7a00);color:#081126}
		.btn-outline{background:transparent;border:1px solid rgba(255,255,255,0.06);color:inherit}
		.error{color:#ffb4a2;font-size:13px;margin-top:6px}
		a.cancel{display:inline-flex;align-items:center;gap:8px;color:#bcd9ff;text-decoration:none;font-weight:600}
		@media (max-width:640px){.row{flex-direction:column}}
	</style>
</head>
<body>
	<div class="container">
		<div class="card">
			<h1>Crear nuevo producto</h1>
			<p class="lead">Completa los campos para añadir un producto a La Vitrina Estelar.</p>

			<form method="POST" action="{{ url('/products') }}" enctype="multipart/form-data">
				@csrf

				<label for="name">Nombre</label>
				<input id="name" name="name" type="text" value="{{ old('name') }}" required placeholder="Ej: Auriculares inalámbricos Pro X">
				@error('name')<div class="error">{{ $message }}</div>@enderror

				<label for="price">Precio (USD)</label>
				<input id="price" name="price" type="number" step="0.01" min="0" value="{{ old('price') }}" required placeholder="Ej: 129.99">
				@error('price')<div class="error">{{ $message }}</div>@enderror

				<label for="description">Descripción</label>
				<textarea id="description" name="description" required placeholder="Breve descripción del producto">{{ old('description') }}</textarea>
				@error('description')<div class="error">{{ $message }}</div>@enderror

				<label for="image">Imagen del producto</label>
				<input id="image" name="image" type="file" accept="image/*">
				@error('image')<div class="error">{{ $message }}</div>@enderror

				<label for="state">Estado</label>
				<select id="state" name="state" required style="width:100%;padding:12px;border-radius:8px;border:1px solid rgba(255,255,255,0.06);background:rgba(255,255,255,0.02);color:inherit">
					<option value="">Selecciona un estado</option>
					<option value="disponible" {{ old('state')=='disponible' ? 'selected' : '' }}>Disponible</option>
					<option value="agotado" {{ old('state')=='agotado' ? 'selected' : '' }}>Agotado</option>
					<option value="preventa" {{ old('state')=='preventa' ? 'selected' : '' }}>Preventa</option>
					<option value="descontinuado" {{ old('state')=='descontinuado' ? 'selected' : '' }}>Descontinuado</option>
				</select>
				@error('state')<div class="error">{{ $message }}</div>@enderror

				<div class="actions">
					<button type="submit" class="btn btn-primary">Guardar producto</button>
					<a href="{{ url('/products') }}" class="cancel">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>