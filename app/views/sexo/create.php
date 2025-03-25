<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Sexo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }
        .container {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s ease-in-out;
        }
        input[type="text"]:focus {
            border-color: #6a11cb;
            outline: none;
        }
        input[type="submit"] {
            background: #28a745;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            border-radius: 6px;
            transition: background 0.3s, transform 0.2s;
        }
        input[type="submit"]:hover {
            background: #218838;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registrar Sexo</h2>
    <form action="../../controllers/SexoController.php?action=create" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required placeholder="Ingrese el nombre"
               pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+" maxlength="50"
               title="Solo se permiten letras y espacios">
        <input type="submit" value="Crear" aria-label="Crear nuevo registro de sexo">
    </form>
</div>

</body>
</html>
