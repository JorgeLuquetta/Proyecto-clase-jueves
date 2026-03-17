@extends('layout.app')

@section('content')
    <style>
        .admin-wrap {
            max-width: 1100px;
            margin: 24px auto;
        }

        .admin-panel {
            padding: 20px;
            margin-bottom: 18px;
            background: linear-gradient(120deg, #0f172a, #1f2b55);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .admin-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 14px;
            margin-bottom: 16px;
        }

        .admin-stat {
            background: linear-gradient(180deg, #1f2c4e, #131b3d);
            border-radius: 12px;
            border-left: 4px solid #ff9b00;
            padding: 14px;
            overflow-wrap: anywhere;
            word-break: break-word;
        }

        .admin-stat .meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .admin-card-tight {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 10px;
            padding: 12px;
            overflow-wrap: anywhere;
            word-break: break-word;
        }

        .admin-grid-wide {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 10px;
        }

        .admin-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .admin-actions {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
        }
    </style>
    <div class="wrap admin-wrap">
        <div class="card admin-panel">
            <div class="admin-header">
                <div>
                    <p class="subtitle"
                        style="font-size:13px; letter-spacing:.12em; text-transform:uppercase; color:#9fbfcf;">Panel
                        administrativo</p>
                    <h1 class="title" style="font-size:34px; margin-bottom:4px;">Bienvenido, administrador</h1>
                    <p style="color:#cfd6e5; margin:0;">Monitorea el inventario, pedidos y métricas clave desde una sola
                        pantalla.</p>
                </div>
                <div class="admin-actions">
                    <a href="/product" class="btn btn-outline">Ver catálogo</a>
                    <a href="/product/create" class="btn btn-primary">Agregar producto</a>
                    <button class="btn btn-outline" onclick="toggleCategories()">
                        Categorías
                    </button>
                </div>
            </div>
        </div>

        <div class="admin-row">
            <div class="admin-stat" style="border-left-color:#ff9b00;">
                <div class="meta"><span class="name">Usuarios</span><span class="badge">Total</span></div>
                <p style="font-size:34px; margin:10px 0 0; color:#f8fbff;">{{ $stats['users'] }}</p>
                <p style="color:#b8c6e0; margin-top:4px;">Cuenta de usuarios registrados</p>
            </div>
            <div class="admin-stat" style="border-left-color:#3b82f6;">
                <div class="meta"><span class="name">Categorías</span><span class="badge">Total</span></div>
                <p style="font-size:34px; margin:10px 0 0; color:#f8fbff;">{{ $stats['categories'] }}</p>
                <p style="color:#b8c6e0; margin-top:4px;">Categorías de productos activas</p>
            </div>
            <div class="admin-stat" style="border-left-color:#10b981;">
                <div class="meta"><span class="name">Productos</span><span class="badge">Total</span></div>
                <p style="font-size:34px; margin:10px 0 0; color:#f8fbff;">{{ $stats['products'] }}</p>
                <p style="color:#b8c6e0; margin-top:4px;">Productos en inventario</p>
            </div>
            <div class="admin-stat" style="border-left-color:#ef4444;">
                <div class="meta"><span class="name">Carrito</span><span class="badge">Items</span></div>
                <p style="font-size:34px; margin:10px 0 0; color:#f8fbff;">{{ $stats['cart_items'] }}</p>
                <p style="color:#b8c6e0; margin-top:4px;">Items actualmente en carritos</p>
            </div>
        </div>

        <div class="card"
            style="background:linear-gradient(180deg,#101b2f,#161f39); padding:18px; overflow-wrap:anywhere; word-break:break-word;">
            <div
                style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:8px; margin-bottom:12px;">
                <div>
                    <h2 style="margin:0; font-size:21px;">Productos recientes</h2>
                    <p style="margin:4px 0 0; color:#a9b9d2;">Accede rápido para editar o revisar detalles.</p>
                </div>
                <a href="/product" class="btn btn-primary" style="font-size:12px; padding:8px 12px;">Ir al listado</a>
            </div>
            <div class="admin-grid-wide">
                @forelse($latestProducts as $p)
                    <div class="admin-card-tight">
                        <div
                            style="height:120px; border-radius:10px; overflow:hidden; background:#0b1220; display:flex; align-items:center; justify-content:center;">
                            @if (!empty($p->image))
                                <img src="{{ asset('storage/' . $p->image) }}" alt="{{ $p->name }}"
                                    style="width:100%; height:100%; object-fit:cover; display:block;" />
                            @else
                                <img src="https://cdn-icons-png.flaticon.com/512/7910/7910160.png"
                                    alt="Imagen no disponible"
                                    style="width:100%; height:100%; object-fit:cover; display:block;" />
                            @endif
                        </div>
                        <div style="font-weight:700; color:#f8fbff; white-space:pre-line; margin-top:8px;">
                            {{ Str::limit($p->name, 30) }}</div>
                        <div style="font-size:13px; color:#9fbfcf; margin-top:4px; white-space:pre-line;">
                            {{ Str::limit($p->description ?? 'Sin descripción', 80) }}</div>
                        <div
                            style="margin-top:8px; display:flex; justify-content:space-between; align-items:center; gap:6px; flex-wrap:wrap;">
                            <span
                                style="font-weight:700; color:#ffbf4c;">${{ number_format($p->price, 0, ',', '.') }}</span>
                            <span class="badge"
                                style="background:linear-gradient(90deg,#22c55e,#0ea5e9);">{{ $p->category?->name ?? 'Sin cat.' }}</span>
                        </div>
                    </div>
                @empty
                    <div style="grid-column:1/-1; color:#c5d4ef;">No hay productos recientes.</div>
                @endforelse
            </div>
        </div>
        <div id="categoryCrud" style="display:none; margin-top:20px;" class="card admin-panel">

            <h2>Gestión de Categorías</h2>

            <!-- Crear -->
            <form action="{{ route('admin.category.store') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nueva categoría">
                <button class="btn btn-primary">Crear</button>
            </form>

            <hr>

            <!-- Listado -->
            @foreach ($categories as $category)
                <div style="display:flex; gap:10px; margin-bottom:10px;">

                    <form action="{{ route('admin.category.update', $category) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name="name" value="{{ $category->name }}">
                        <button class="btn btn-outline">Actualizar</button>
                    </form>

                    <form action="{{ route('admin.category.destroy', $category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>

                </div>
            @endforeach
        </div>
    </div>
    <script>
        function toggleCategories() {
            let panel = document.getElementById("categoryCrud");

            panel.style.display =
                panel.style.display === "none" ? "block" : "none";
        }
    </script>
@endsection
