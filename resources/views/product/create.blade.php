<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crear Producto — La Vitrina Estelar</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
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