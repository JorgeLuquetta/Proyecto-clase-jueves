<nav class="navbar">
		<div class="navbar-container">
			<a href="{{ url('/') }}" class="navbar-brand">🛍️ La Vitrina Estelar</a>
			<ul class="navbar-links">
				<li><a href="{{ url('product') }}">Productos</a></li>
				<li><a href="{{ url('/product/create') }}">Crear</a></li>
				<li><a href="{{ url('/product/show') }}">Carrito</a></li>
			</ul>
		</div>
	</nav>