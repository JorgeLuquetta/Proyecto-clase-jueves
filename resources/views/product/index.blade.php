@extends('layout.app')

@section('content')
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

			@foreach ($misProductos as $product)
			<!-- Producto 1 -->
			<div class="card">
				<div class="image">
					
				@if ($product->image)
						<img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
					@else
						<img src="https://cdn-icons-png.flaticon.com/512/7910/7910160.png" alt="Imagen no disponible">
					@endif
				</div>
				
				<div class="meta">
					
						

					<div class="row"><div class="rating">★★★★★</div><div class="name">{{ $product->name }}</div></div>
					<div class="price">{{ $product->price }}</div>
				</div>
				<div class="desc">{{ $product->description }}</div>
				<div class="actions">
					<button class="btn btn-primary">Añadir al carrito</button>
					<button class="btn btn-outline">Ver</button>
					<form action="{{ route('product.destroy', $product) }}" method="POST">
						@method('delete')
						@csrf
					<button class="btn btn-danger" style="margin-top: 10px">Eliminar</button>
				</form>
				</div>
			</div>
			@endforeach

		</div>
	</div>
@endsection