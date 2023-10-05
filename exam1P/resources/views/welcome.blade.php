<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite(['resources/js/app.js'])
        <title> LOGIN </title>

</head>
<body>
    <h1 class='display-1 text-center text-danger'> LOGIN </h1>  

    <form>
        <div class='text-center'>
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control text-center" id="nombre" placeholder="Nombre">
        </div>
        <div class="text-center">
            <label for="email">Contraseña:</label>
            <input type="password" id="password" placeholder="Contraseña">

        <button type="submit" class="btn btn-primary text-center">Ingresar</button>
    </form>
</body>
</html>

