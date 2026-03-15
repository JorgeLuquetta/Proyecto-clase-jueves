@extends('layout.app')

@section('content')
    <div class="container mt-5 text-center">

        <h1>Bienvenido a nuestro Ecommerce</h1>
        <p>Encuentra los mejores productos</p>

        <a href="{{ route('product.index') }}" class="btn btn-primary mb-4">
            Explorar tienda
        </a>

    </div>

    <div class="container">

        <h2>Productos destacados</h2>
        <div class="row">

            @foreach ($products as $product)
                <div class="col-md-3">

                    <div class="card">

                        <div class="card-body">
                            <h5>{{ $product->name }}</h5>
                            <p>${{ $product->price }}</p>
                            <a href="/product/{{ $product->id }}" class="btn btn-success">
                                Ver producto
                            </a>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>

    </div>

@endsection
