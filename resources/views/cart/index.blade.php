@extends('layout.app')

@section('content')
    <div class="wrap">

        <h1>🛒 Carrito de compras</h1>

        @if (session('success'))
            <div style="background:#22c55e; color:white; padding:10px; margin-bottom:10px; border-radius:8px;">
                {{ session('success') }}
            </div>
        @endif

        @forelse($cart as $id => $item)
            <div class="cart-item">

                <div class="cart-image">
                    @if ($item['image'])
                        <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}">
                    @else
                        <img src="https://cdn-icons-png.flaticon.com/512/7910/7910160.png" alt="Sin imagen">
                    @endif
                </div>

                <div class="cart-info">
                    <h3>{{ $item['name'] }}</h3>
                    <p>Precio: ${{ $item['price'] }}</p>
                    <p>Cantidad: {{ $item['quantity'] }}</p>

                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </div>

            </div>

        @empty

            <p>No hay productos en el carrito 🛒</p>
        @endforelse

    </div>
@endsection
