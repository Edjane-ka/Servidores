<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página não Encontrada</title>

    

    <style>
        html, body, .container {
            height: 100%;
        }
        .container {
            display: table;
            vertical-align: middle;
        }
        .vertical-center-row {
            display: table-cell;
            vertical-align: middle;
        }
    </style>

</head>
<body>
    
    <div class="container">
        <div class="vertical-center-row">
            <div class="col">
                <h1 class="text-center">Página não encontrada</h1>
                <h2 class="text-center text-primary"><?php echo $uri; ?></h2>
                <h2 class="text-center"><a class="text-success" href="/">Voltar</a></h2>
            </div>
            
        </div>
    </div>

   

</body>
</html>