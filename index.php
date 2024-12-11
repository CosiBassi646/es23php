<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>numeri divisibili per 3</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-dark text-white">
    <h1 class = "text-center text-danger">TUTTI I NUMERI MINORI DI 100 DIVISIBILI PER 3</h1>
    <hr>
    <div class = "w-50 mx-auto my-auto text-center">
    <table class="table table-success">
        <?php 
        $conta = 0;
        $somma = 0;
        $media = 0;
            for($i=0;$i<100;$i = $i + 3){
                echo "<tr>";
                    echo "<td>$i</td>";
                    $conta ++;
                    $somma = $somma + $i;
                
                echo "</tr>";
            }
            $media = $somma/$conta;
            echo "<tr>";
            echo "<h3>Totale Numeri: $conta</h3>";
            echo "<h3>Media dei numeri: $media</h3>";
            echo "</tr>";

        ?>
    </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>