<nav class="navbar">
    <div class="navbar-container">

        <a href="{{ url('/') }}" class="navbar-brand">
            🛍️ La Vitrina Estelar
        </a>

        <ul class="navbar-links">

            <li>
                <a href="{{ url('/') }}">Inicio</a>
            </li>

            <li>
                <a href="{{ route('product.index') }}">Productos</a>
            </li>

            <li>
                <a href="{{ url('/product/create') }}">Vender</a>
            </li>

            <li>
                <a href="{{ route('cart.index') }}">Carrito 🛒</a>
            </li>

        </ul>

    </div>
</nav>
