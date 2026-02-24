@extends('layout.app')

@section('content')
    <div class="wrap">
        <a href="{{ url('product') }}" class="back">← Volver a La Vitrina</a>

        <div class="card" role="region" aria-label="Detalle de producto">
            <div class="media">
                @if(!empty($product->image))
                    <img src="{{ strpos($product->image, 'http') === 0 ? $product->image : asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                @else
                    <img src="https://source.unsplash.com/800x800/?product" alt="Imagen producto">
                @endif
            </div>

            <div class="info">
                <div class="title">{{ $product->name ?? 'Producto sin nombre' }}</div>
                <div class="price">${{ isset($product->price) ? number_format($product->price, 2) : '0.00' }}
                    @if(!empty($product->state))<span class="state">{{ ucfirst($product->state) }}</span>@endif
                </div>

                <div class="meta">
                    <div class="rating">{{ $product->rating ?? '★★★★☆' }}</div>
                    <div class="badge">Envío rápido</div>
                </div>

                <div class="desc">{!! nl2br(e($product->description ?? 'Sin descripción disponible.')) !!}</div>

                <div class="actions">
                    <form method="POST" action="{{ url('/cart/add') }}">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id ?? '' }}">
                        <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                    </form>
                    <a href="{{ url('/products') }}" class="btn btn-outline">Seguir viendo</a>
                </div>
            </div>
        </div>
    </div>
@endsection