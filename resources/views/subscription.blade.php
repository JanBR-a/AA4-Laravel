<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
        }

        .container {
            margin-top: 50px;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
        }

        .card-body {
            padding: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Subscription Details</div>
                    <div class="card-body">
                        @if ($subscription->active == true)
                            <p><strong>Subscription Status:</strong> {{ $subscription->active ? 'Active' : 'Inactive' }}</p>
                            <p><strong>Start Date:</strong> {{ $subscription->starting_date }}</p>
                            <p><strong>End Date:</strong> {{ $subscription->expiring_date }}</p>
                            @if ($countDown != null)
                                <p>Tiempo para que expire la suscripción: {{ $countDown }} días</p>
                            @else
                                <p>Tu suscripción ha finalizado</p>
                            @endif
                            <form action="{{ url('subscription/' . $subscription->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-primary">Extender la Suscripción por 30 Días</button>
                            </form>
                            <br>
                            <a href="/">HOME</a>
                        @else
                            <p>No tienes ninguna suscripción activa. Suscríbete para poder usar esta funcionalidad.</p>
                            <form action="{{ url('subscription/' . $subscription->id . '/extend') }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="card_number">Número de tarjeta de crédito:</label>
                                    <input type="text" id="card_number" name="card_number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="expiration_date">Fecha de expiración de la tarjeta:</label>
                                    <input type="text" id="expiration_date" name="expiration_date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="cvv">CVV:</label>
                                    <input type="text" id="cvv" name="cvv" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Suscribirme</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

