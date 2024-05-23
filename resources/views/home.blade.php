<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teléfonos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .navigation {
            text-align: right;
            padding: 10px;
            background-color: #444;
        }

        .navigation a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .phone {
            width: 30%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            transition: transform 0.2s;
            cursor: pointer;
        }

        .phone:hover {
            transform: scale(1.05);
        }

        .phone img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }

        .phone-details {
            padding: 15px;
        }

        .phone-details h2 {
            font-size: 1.2em;
            margin: 0;
            color: #333;
        }

        .phone-details p {
            margin: 5px 0;
            color: #666;
        }

        .phone-details strong {
            color: #333;
        }

        .delete-btn {
            background-color: #ff4c4c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
            text-align: center;
        }

        .delete-btn:hover {
            background-color: #ff1f1f;
        }

        .detailBtn {
            background-color: #12b936;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
            text-align: center;
        }

        .detailBtn:hover {
            background-color: #1fff44;
        }

        @media print {
            .phone {
                page-break-inside: avoid;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Teléfonos</h1>
    </header>
    <div class="navigation">
        <?php if (auth()->check()): ?>
        <a href="{{ url('/dashboard') }}">Dashboard</a>
        <a href="{{ url('/subscription') }}">Subscription</a>
        <?php if (auth()->user()->role === 'admin'): ?>
        <a href="{{ route('add-phone') }}">Add Phone</a>
        <?php endif; ?>
        <?php else: ?>
        <a href="{{ url('/login') }}">Log in</a>
        <a href="{{ url('/register') }}">Register</a>
        <?php endif; ?>
    </div>
    <section>
        @foreach ($phones as $phone)
            <div class="phone">
                <img src="{{ $phone->image }}" alt="{{ $phone->model }}">
                <div class="phone-details">
                    <h2><strong>Modelo:</strong> {{ $phone->model }}</h2>
                    <p><strong>Descripción:</strong> {{ $phone->description }}</p>
                    <p><strong>Precio:</strong> {{ $phone->price }}</p>
                    <p><strong>Stock:</strong> {{ $phone->stock }}</p>
                    <p><strong>Fabricante:</strong> {{ $phone->manufacturer }}</p>
                    <p><strong>Lanzamiento:</strong> {{ $phone->released_date }}</p>
                    <p><strong>Sistema Operativo:</strong> {{ $phone->os }}</p>

                    @if (auth()->check() && auth()->user()->role === 'admin')
                        <form action="/phone/{{ $phone->id }}/delete" method="POST"
                            onsubmit="return confirm('¿Estás seguro de que quieres eliminar este teléfono?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Eliminar Teléfono</button>
                        </form>
                    @endif
                </div>
                <button class="detailBtn" onclick="redirectPhone('{{ $phone->id }}')">Ver detalles</button>
            </div>
        @endforeach
    </section>

    <script>
        function redirectPhone(phoneId) {
            window.location.href = "/phone/" + phoneId;
        }
    </script>
</body>

</html>
