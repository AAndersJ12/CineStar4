<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios CineStar</title>
</head>
<body>
    <div>
        <?php
        use Illuminate\Support\Facades\DB;
        
            if(DB::connection()->getPdo()){
                echo "Se hizo la vuelta de la pagina pirata" .DB::connection()->getDatabaseName();
            }
        ?>
    </div>
</body>
</html>