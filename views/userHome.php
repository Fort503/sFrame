<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-800 to-blue-600 font-sans leading-normal tracking-normal">
    <div class="container mx-auto w-2/3">
        <h1 class="text-3xl text-center my-8 text-white">Lista de Usuarios</h1>
        <ul class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <?php foreach ($data["usuarios"] as $usuario): ?>
            <li class="bg-white shadow-md rounded-md p-4">
                <div class="text-gray-900 font-bold text-lg mb-2">ID: <?= $usuario["id"]; ?></div>
                <div class="text-gray-700">Nombre: <?= $usuario["nombre"]; ?></div>
                <div class="text-gray-700">Apellido: <?= $usuario["apellido"]; ?></div>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
