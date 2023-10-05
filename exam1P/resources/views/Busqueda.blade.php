<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite(['resources/js/app.js'])
        <title> BUSQUEDAD </title>
</head>
<body>
    <h1 class='display-1 text-center text-danger'> BUSQUEDAD </h1>  

    <form>
        <div class="text-center">
            <label for="nombre">¿Qué prodcuto desea buscar?</label>
            <br>
            <input type="text" class="text-center" id="nombre" placeholder="Producto">
        </div>

            <button type="submit" class="btn btn-primary " class="center">Buscar</button>
    </form>


</body>
</html>