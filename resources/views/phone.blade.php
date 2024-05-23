<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $phone->model }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        p {
            margin-bottom: 10px;
            color: #666;
            line-height: 1.5;
        }

        p strong {
            font-weight: bold;
            color: #333;
        }

        .image-container {
            margin-bottom: 20px;
            text-align: center;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .video-container {
            margin-bottom: 20px;
        }

        .video-container iframe {
            width: 100%;
            height: 315px;
            border: none;
            border-radius: 8px;
        }

        .btn-buy {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            text-align: center;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }

        .btn-buy:hover {
            background-color: #45a049;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .alert-danger ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .alert-danger li {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="image-container">
            <img src="{{ $phone->image }}" alt="{{ $phone->model }}">
        </div>

        <h1>{{ $phone->model }}</h1>

        <p><strong>Description:</strong> {{ $phone->description }}</p>
        <p><strong>Price:</strong> {{ $phone->price }}</p>
        <p><strong>Stock:</strong> {{ $phone->stock }}</p>
        <p><strong>Manufacturer:</strong> {{ $phone->manufacturer }}</p>
        <p><strong>Released:</strong> {{ $phone->released_date }}</p>
        <p><strong>OS:</strong> {{ $phone->os }}</p>

        <form action="{{ url('/phone/' . $phone->id . '/transaction') }}" method="GET">
            @csrf
            @if (auth()->guest())
                <button type="button" onclick="window.location.href = '{{ url('/register') }}'"
                    class="btn-buy">Comprar Teléfono</button>
            @else
                <button type="submit" class="btn-buy">Comprar Teléfono</button>
            @endif
        </form>
    </div>
</body>

</html>
