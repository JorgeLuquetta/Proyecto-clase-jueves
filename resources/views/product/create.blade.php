@extends('layout.app')

@section('content')
	<div class="container">
		<div class="card">
			<h1>Crear nuevo producto</h1>
			<p class="lead">Completa los campos para añadir un producto a La Vitrina Estelar.</p>

			<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
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

				<label for="state">Categoría</label>
				<select id="state" name="state" required style="width:100%;padding:12px;border-radius:8px;border:1px solid rgba(255,255,255,0.06);background:rgba(255,255,255,0.02);color:inherit">
					@foreach ($categoryList as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
				</select>
				@error('state')<div class="error">{{ $message }}</div>@enderror

				<div class="actions">
					<button type="submit" class="btn btn-primary">Guardar producto</button>
					<a href="{{ url('/products') }}" class="cancel">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
@endsection