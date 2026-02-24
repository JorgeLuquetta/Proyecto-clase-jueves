<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $product->name ?? 'Detalle de producto' }} — La Vitrina Estelar</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body{margin:0;font-family:Inter,system-ui,Segoe UI,Roboto,Arial;background:linear-gradient(180deg,#071026 0%,#0b1220 60%);color:#e6eef8}
        .wrap{max-width:1000px;margin:40px auto;padding:20px}
        .card{display:grid;grid-template-columns:360px 1fr;gap:24px;background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:22px;border-radius:12px;border:1px solid rgba(255,255,255,0.03);box-shadow:0 12px 36px rgba(2,6,23,0.6)}
        .media{border-radius:10px;overflow:hidden;background:#071426;display:flex;align-items:center;justify-content:center;height:360px}
        .media img{width:100%;height:100%;object-fit:cover;display:block}
        .info{padding:6px 4px}
        .title{font-size:22px;font-weight:700;margin-bottom:6px}
        .price{font-size:20px;font-weight:800;color:#ffb020;margin-bottom:8px}
        .state{display:inline-block;padding:6px 10px;border-radius:999px;font-weight:700;font-size:13px;background:rgba(255,255,255,0.03);color:#cfe6ff;margin-left:8px}
        .desc{color:#b9d6ef;margin-top:12px;line-height:1.5}
        .meta{display:flex;align-items:center;gap:12px;margin-top:12px}
        .rating{color:#ffd166;font-weight:700}
        .badge{background:linear-gradient(90deg,#0b6cff,#6a3bff);padding:8px 10px;border-radius:8px;color:white;font-weight:700}
        .actions{display:flex;gap:12px;margin-top:18px}
        .btn{padding:12px 16px;border-radius:10px;border:none;font-weight:800;cursor:pointer}
        .btn-primary{background:linear-gradient(90deg,#ff9900,#ff7a00);color:#081126}
        .btn-outline{background:transparent;border:1px solid rgba(255,255,255,0.06);color:inherit}
        .back{color:#bfe9ff;text-decoration:none;font-weight:700}
        @media (max-width:860px){.card{grid-template-columns:1fr;grid-auto-rows:auto}.media{height:280px}}
    </style>
</head>
<body>
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
</body>
</html>