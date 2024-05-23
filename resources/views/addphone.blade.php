<!-- resources/views/games/addgame.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Juego</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f3f3f3;
    margin: 0;
    padding: 20px;
}

h1 {
    color: #333;
    text-align: center;
}

form {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
input[type="date"],
textarea {
    width: calc(100% - 10px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

textarea {
    height: 100px;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}
</style>
<body>
    <h1>Agrega un nuevo Teléfono</h1>

    <form action="{{ route('store-phone') }}" method="POST">
        @csrf
        <label for="model">Modelo:</label><br>
        <input type="text" id="model" name="model" required><br><br>

        <label for="description">Descripción:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

        <label for="price">Precio:</label><br>
        <input type="number" id="price" name="price" required><br><br>

        <label for="stock">Stock:</label><br>
        <input type="number" id="stock" name="stock" required><br><br>

        <label for="image">Url de Imagen:</label><br>
        <input type="text" id="image" name="image"><br><br>

        <label for="manufacturer">Desarrollador:</label><br>
        <input type="text" id="manufacturer" name="manufacturer"><br><br>

        <label for="release_date">Fecha de Lanzamiento:</label><br>
        <input type="date" id="release_date" name="release_date"><br><br>

        <label for="os">Sistema Operativo:</label><br>
        <input type="text" id="os" name="os"><br><br>

        <label for="imei">imei:</label><br>
        <input type="text" id="imei" name="imei"><br><br>

        <button type="submit">Agregar Teléfono</button>
    </form>
</body>
</html>
